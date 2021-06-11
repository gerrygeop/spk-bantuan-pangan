<?php

class PerhitunganModel{

    // private $tbl_kriteria = 'kriteria';
    private $tbl_subKriteria = 'subkriteria';
    private $tbl_pivotKtr = 'pivot_ktr_sub';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function hitungWP($dataWp)
    {
        $alternatif = count($dataWp['alt']);

        foreach ($dataWp['nilai'] as $n) {
            $bobotKtr[] = $n['nilai_bk'];
        }

        $X = $this->getSubBobot($dataWp['alt'], $dataWp['sub']);

        // Normalisasi matriks
        for ($j=1; $j <= 12; $j++) { 
            $tmp = $this->getSubKriteriaByIdKriteria($j);
            foreach($tmp as $value) {
                $max[] = $value['bobot_sub'];
            }

            $max = max($max);
            for ($i=1; $i <= $alternatif; $i++) { 
                $data["A$j-$i"] = $X["C$j-$i"] / $max;
            }
            unset($max);
        }

        // Menghitung Nilai Bobot Preferensi (Qi)
        // Tahap 1
        for ($i=1; $i <= $alternatif; $i++) { 
            for ($c=1; $c <= 12; $c++) { 
                $dikali["$c-$i"] = $data["A$c-$i"] * $bobotKtr[$c-1];
                $ditambah[] = $dikali["$c-$i"];
            }

            $kali5 = array_sum($ditambah);
            $data["QP1-$i"] = 0.5 * $kali5;
            unset($ditambah);
        }
        
        // Tahap 2
        unset($dikali);
        for ($i=1; $i <= $alternatif; $i++) { 
            $dikali = 1;
            for ($c=1; $c <= 12; $c++) { 
                $dipangkat["Q$c-$i"] = pow($data["A$c-$i"], $bobotKtr[$c-1]);
                $dikali *= $dipangkat["Q$c-$i"];
            }
            $data["QP2-$i"] = 0.5 * $dikali;
        }

        // Tahap 3
        // Hasil Perhitungan
        for ($i=1; $i <= $alternatif; $i++) { 
            $rank[$i] = $data["QP3-$i"] = $data["QP1-$i"] + $data["QP2-$i"];
        }

        $u=1;
        foreach ($dataWp['alt'] as $alt) {
            $users[$u] = $alt['nama'];
            $u++;
        }
        
        arsort($rank);
        $data['rankWp'] = $rank;
        $data['users'] = $users;
        // $data['X'] = $A;
        // $data['V'] = $V;


        return $data;
    }


    public function hitungVK($dataVk)
    {
        $alternatif = count($dataVk['alt']);
        $C = $this->getSubBobot($dataVk['alt'], $dataVk['sub']);
        
        // Nilai dari table kriteria simpan ke variabel nilai
        foreach ($dataVk['nilai'] as $n) {
            $nilai[] = $n['nilai_bk'];
        }

        // Matriks Normalisasi
        for ($i=1; $i <= 12; $i++) { 
            $w['w'.$i] = $nilai[$i-1] / array_sum($nilai);
        }

        // Pangkat C1 => C11 ^ W1 => W11
        for ($i=1; $i <= $alternatif; $i++) { 
            for ($j=1; $j <= 12; $j++) { 
                $p['p'.$j.'-'.$i] = pow($C['C'.$j.'-'.$i], $w['w'.$j]);
            }
        }


        // Mencari Nilai S
        for ($i=1; $i <= $alternatif; $i++) { 
            $S['S'.$i] = $p['p1-'.$i]*$p['p2-'.$i]*$p['p3-'.$i]*$p['p4-'.$i]*$p['p5-'.$i]*$p['p6-'.$i]*$p['p7-'.$i]*$p['p8-'.$i]*$p['p9-'.$i]*$p['p10-'.$i]*$p['p11-'.$i]*$p['p12-'.$i];
        }

        // Mencari Nilai V
        for ($i=1; $i <= $alternatif; $i++) { 
            $rank[$i] = $V['V'.$i] = $S['S'.$i] / array_sum($S);
        }

        $u=1;
        foreach ($dataVk['alt'] as $alt) {
            $users[$u] = $alt['nama'];
            $u++;
        }

        $data['W'] = $w;
        $data['S'] = $S;
        $data['V'] = $V;

        arsort($rank);
        $data['rankVk'] = $rank;

        $data['users'] = $users;

        return $data;
    }

    public function getSubBobot($alternatif, $subkriteria)
    {
        $k = 1;
        foreach ($alternatif as $alt) {
            foreach ($subkriteria as $sub) {
                $alt['c1'] == $sub['id_sub'] ? $key['C1-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c2'] == $sub['id_sub'] ? $key['C2-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c3'] == $sub['id_sub'] ? $key['C3-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c4'] == $sub['id_sub'] ? $key['C4-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c5'] == $sub['id_sub'] ? $key['C5-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c6'] == $sub['id_sub'] ? $key['C6-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c7'] == $sub['id_sub'] ? $key['C7-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c8'] == $sub['id_sub'] ? $key['C8-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c9'] == $sub['id_sub'] ? $key['C9-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c10'] == $sub['id_sub'] ? $key['C10-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c11'] == $sub['id_sub'] ? $key['C11-'.$k] = $sub['bobot_sub'] : 0;
                $alt['c12'] == $sub['id_sub'] ? $key['C12-'.$k] = $sub['bobot_sub'] : 0;
            }
            $k++;
        }
        return $key;
    }

    public function getSubKriteriaByIdKriteria($id)
    {
        $query = "SELECT bobot_sub FROM $this->tbl_subKriteria JOIN $this->tbl_pivotKtr USING(id_sub) WHERE id_ktr=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
}