<?php

class PerhitunganModel{

    private $tbl_subKriteria = 'subkriteria';
    private $tbl_pivotKtr = 'pivot_ktr_sub';
    private $tbl_ranking = 'ranking';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function hitungWP($dataWp)
    {
        /* Ambil bobot kriteria */
        foreach ($dataWp['nilai'] as $n) {
            $bobotKtr[] = $n['nilai_bk'];
        }

        /* Hitung jumlah alternatif & Hitung jumlah kriteria */
        $jmlAlternatif = count($dataWp['alt']);
        $jmlKriteria = count($bobotKtr);

        /* Ambil semua bobot sub-kriteria (matrix keputusan) */
        $X = $this->getSubBobot($dataWp['alt'], $dataWp['sub'], $jmlKriteria);

        /* Normalisasi matriks */
        for ($j=1; $j <= $jmlKriteria; $j++) { 
            $tmp = $this->getBobotSubByIdKriteria($j);
            foreach($tmp as $value) {
                $max[] = $value['bobot_sub'];
            }

            $max = max($max);
            for ($i=1; $i <= $jmlAlternatif; $i++) { 
                $data["A$j-$i"] = $X["C$j-$i"] / $max;
            }
            unset($max);
        }

        /* 
        TAHAP 1
        Menghitung Nilai Bobot Preferensi (Qi) 
        */
        for ($i=1; $i <= $jmlAlternatif; $i++) { 
            for ($c=1; $c <= $jmlKriteria; $c++) { 
                $dikali["$c-$i"] = $data["A$c-$i"] * $bobotKtr[$c-1];
                $ditambah[] = $dikali["$c-$i"];
            }

            $kali5 = array_sum($ditambah);
            $data["QP1-$i"] = 0.5 * $kali5;
            unset($ditambah);
        }
        
        /* TAHAP 2 */
        unset($dikali);
        for ($i=1; $i <= $jmlAlternatif; $i++) { 
            $dikali = 1;
            for ($c=1; $c <= $jmlKriteria; $c++) { 
                $dipangkat["Q$c-$i"] = pow($data["A$c-$i"], $bobotKtr[$c-1]);
                $dikali *= $dipangkat["Q$c-$i"];
            }
            $data["QP2-$i"] = 0.5 * $dikali;
        }

        /* 
        TAHAP 3
        Hasil Perhitungan 
        */
        for ($i=1; $i <= $jmlAlternatif; $i++) { 
            $data["QP3-$i"] = $data["QP1-$i"] + $data["QP2-$i"];
        }

        /* Ambil semua User/Alternatif */
        $user['users'] = $this->getAlternatifName($dataWp);

        /* Gabungkan nama user dan nilai perhitungan ke dalam array rank */
        for ($i=1; $i <= $jmlAlternatif; $i++) { 
            $rank[$i] = array('nilai' => $data["QP3-$i"], 'nama' => $user['users'][$i]);
        }

        /* Sorting nilai berdasarkan yang tertinggi */
        arsort($rank);

        /* Menentukan jumlah yang diterima dan tidak diterima */
        $count=1;
        $desc="Diterima";
        foreach($rank as $key => $v){
            if($count > 80){
                $desc = "Tidak diterima";
            }
            $rank[$key]["status"]=$desc;
            $count++;
        }
        
        // die("<pre>". print_r($rank, 1) ."</pre>");
        // echo "<pre>". print_r($rank, 1) ."</pre>";
        
        $data['rankWp'] = $rank;
        return $data;
    }

    public function hitungVK($dataVk)
    {
        foreach ($dataVk['nilai'] as $n) {
            $bobotKtr[] = $n['nilai_bk'];
        }

        /* Hitung jumlah Alternatif & kriteria */
        $alternatif = count($dataVk['alt']);
        $jmlKriteria = count($bobotKtr);

        /* Ambil semua bobot sub-kriteria (matrix keputusan) */
        $X = $this->getSubBobot($dataVk['alt'], $dataVk['sub'], $jmlKriteria);

        /* Normalisasi Matriks */
        for ($j=1; $j <= $jmlKriteria; $j++) {
            
            $tmp = $this->getBobotSubByIdKriteria($j);
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

        /* Normalisasi x Bobot */
        for ($i=1; $i <= $jmlKriteria; $i++) { 
            for ($j=1; $j <= $alternatif; $j++) { 
                $data["A$i-$j"] = $bobotKtr[$i-1] * $data["N$i-$j"];
            }
        }

        /* Menghitung Nilai S dan R */
        for ($i=1; $i <= $alternatif; $i++) { 
            for ($j=1; $j <= $jmlKriteria; $j++) { 
                $nilaiAlt[] = $data["A$j-$i"];
            }
            $S[] = array_sum($nilaiAlt);
            $R[] = max($nilaiAlt);
            unset($nilaiAlt);
        }


        /* Menghitung Nilai Vikor */
        $_s_max_kurang_min = max($S) - min($S);
        $_r_max_kurang_min = max($R) - min($R);
        $_rV = 1 - 0.5;

        for ($j=1; $j <= $alternatif; $j++) {
            $_s_kurang_min = $S[$j-1] - min($S);
            $pembagian_s = $_s_kurang_min / $_s_max_kurang_min;
            $_S = 0.5 * $pembagian_s;

            $_r_kurang_min = $R[$j-1] - min($R);
            $pembagian_r = $_r_kurang_min / $_r_max_kurang_min;
            $_R = $_rV * $pembagian_r;

            $Q[$j] = $_S + $_R;
        }

        $data['users'] = $this->getAlternatifName($dataVk);
        $data["S"] = $S;
        $data["R"] = $R;

        asort($Q);
        $data["Q"] = $Q;

        return $data;
    }

    public function getSubBobot($alternatif, $subkriteria, $jmlKriteria)
    {
        $k = 1;
        foreach ($alternatif as $alt) {
            foreach ($subkriteria as $sub) {
                for ($i=1; $i <= $jmlKriteria; $i++) { 
                    $alt["c$i"] == $sub['id_sub'] ? $key["C$i-".$k] = $sub['bobot_sub'] : 0;
                }
            }
            $k++;
        }
        return $key;
    }

    public function getBobotSubByIdKriteria($id)
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