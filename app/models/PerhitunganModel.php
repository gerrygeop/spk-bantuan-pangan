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
        // Hitung jumlah alternatif
        $alternatif = count($dataWp['alt']);

        // Get All bobot sub-kriteria (matrix keputusan)
        $X = $this->getSubBobot($dataWp['alt'], $dataWp['sub']);

        // Get bobot kriteria
        foreach ($dataWp['nilai'] as $n) {
            $bobotKtr[] = $n['nilai_bk'];
        }

        // Hitung jumlah kriteria
        $jmlKriteria = count($bobotKtr);

        // Normalisasi matriks
        for ($j=1; $j <= $jmlKriteria; $j++) { 
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
        //* Tahap 1
        for ($i=1; $i <= $alternatif; $i++) { 
            for ($c=1; $c <= $jmlKriteria; $c++) { 
                $dikali["$c-$i"] = $data["A$c-$i"] * $bobotKtr[$c-1];
                $ditambah[] = $dikali["$c-$i"];
            }

            $kali5 = array_sum($ditambah);
            $data["QP1-$i"] = 0.5 * $kali5;
            unset($ditambah);
        }
        
        //* Tahap 2
        unset($dikali);
        for ($i=1; $i <= $alternatif; $i++) { 
            $dikali = 1;
            for ($c=1; $c <= $jmlKriteria; $c++) { 
                $dipangkat["Q$c-$i"] = pow($data["A$c-$i"], $bobotKtr[$c-1]);
                $dikali *= $dipangkat["Q$c-$i"];
            }
            $data["QP2-$i"] = 0.5 * $dikali;
        }

        //* Tahap 3
        //* Hasil Perhitungan
        for ($i=1; $i <= $alternatif; $i++) { 
            $rank[$i] = $data["QP3-$i"] = $data["QP1-$i"] + $data["QP2-$i"];
        }

        // Get All User/Alternatif
        $data['users'] = $this->getAlternatifName($dataWp);
        
        // Sorting nilai WASPAS (ranking)
        arsort($rank);
        $data['rankWp'] = $rank;

        return $data;
    }


    public function hitungVK($dataVk)
    {
        // Hitung jumlah alternatif
        $alternatif = count($dataVk['alt']);

        // Get All bobot sub-kriteria (matrix keputusan)
        $X = $this->getSubBobot($dataVk['alt'], $dataVk['sub']);
        
        // Get bobot kriteria from ...? ^lupa
        foreach ($dataVk['nilai'] as $n) {
            $nilai[] = $n['nilai_bk'];
        }

        // Hitung jumlah kriteria
        $jmlKriteria = count($nilai);

        // Normalisasi Matriks
        for ($j=1; $j <= $jmlKriteria; $j++) {
            
            $tmp = $this->getSubKriteriaByIdKriteria($j);
            foreach($tmp as $value) {
                $Xj[] = $value['bobot_sub'];
            }

            $max = max($Xj);
            $min = min($Xj);
            for ($i=1; $i <= $alternatif; $i++) { 
                $hasil1["$j-$i"] = $max - $X["C$j-$i"];
                $hasil2["$j-$i"] = $max - $min;
                $data["N$j-$i"] = $hasil1["$j-$i"] / $hasil2["$j-$i"];
            }
            unset($Xj);
        }

        // Normalisasi * Bobot
        for ($i=1; $i <= $jmlKriteria; $i++) { 
            for ($j=1; $j <= $alternatif; $j++) { 
                $data["A$i-$j"] = $nilai[$i-1] * $data["N$i-$j"];
            }
        }

        // Menghitung Nilai S dan R
        for ($i=1; $i <= $alternatif; $i++) { 
            for ($j=1; $j <= $jmlKriteria; $j++) { 
                $nilaiAlt[] = $data["A$j-$i"];
            }
            $S[] = array_sum($nilaiAlt);
            $R[] = max($nilaiAlt);
            unset($nilaiAlt);
        }


        /*
            TODO: Menghitung Nilai Vikor
            ___         ___
              \\_(.^.)_//
        */


        // Get All User/Alternatif with name
        $u=1;
        foreach ($dataVk['alt'] as $alt) {
            $users[$u] = $alt['nama'];
            $u++;
        }

        $data['users'] = $this->getAlternatifName($dataVk);

        $data["S"] = $S;
        $data["R"] = $R;

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

    public function getAlternatifName($data)
    {
        $u=1;
        foreach ($data['alt'] as $alt) {
            $users[$u] = $alt['nama'];
            $u++;
        }
        return $users;
    }
}