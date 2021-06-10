<?php

class PerhitunganModel{


    public function hitungWP($dataWp)
    {
        $alternatif = count($dataWp['alt']);

        foreach ($dataWp['nilai'] as $n) {
            $bobotKtr[] = $n['nilai_bk'];
        }

        $X = $this->getSubBobot($dataWp['alt'], $dataWp['sub']);

        // Normalisasi
        for ($j=1; $j <= 12; $j++) { 
            for ($i=1; $i <= $alternatif; $i++) { 
                $pow[] = pow($X['C'.$j.'-'.$i], 2);
            }
            $X['X'.$j] = array_sum($pow);
            $X['X'.$j] = sqrt($X['X'.$j]);
            unset($pow);
        }

        // Ternormalisasi terbobot
        for ($j=1; $j <= 12; $j++) { 
            for ($i=1; $i <= $alternatif; $i++) { 
                $R['R'.$j.'-'.$i] = $X['C'.$j.'-'.$i] / $X['X'.$j];
                $ideal[] = $V['V'.$j.'-'.$i] = $bobotKtr[$j-1] * $R['R'.$j.'-'.$i];
            }

            $Amax[] = max($ideal);
            $Amin[] = min($ideal);
            unset($ideal);

            for ($d=1; $d <= $alternatif; $d++) {
                $dmax['P'.$j.'-'.$d] = pow($Amax[$j-1] - $V['V'.$j.'-'.$d], 2);
                $dmin['P'.$j.'-'.$d] = pow($V['V'.$j.'-'.$d] - $Amin[$j-1], 2);
            }
        }


        /*==================== A1 [D+] ====================*/
        for ($i=1; $i <= $alternatif; $i++) { 
            for ($j=1; $j <= 12; $j++) {
                $dp[] = $dmax['P'.$j.'-'.$i]; 
                $dm[] = $dmin['P'.$j.'-'.$i]; 
            }
            $data['DP'.$i] = array_sum($dp);
            $data['DP'.$i] = sqrt($data['DP'.$i]);
            unset($dp);

            $data['DM'.$i] = array_sum($dm);
            $data['DM'.$i] = sqrt($data['DM'.$i]);
            unset($dm);
        }
        
        for ($i=1; $i <= $alternatif; $i++) { 
            $rank[$i] = $data['DM'.$i] / ($data['DM'.$i] + $data['DP'.$i]);
        }

        $u=1;
        foreach ($dataWp['alt'] as $alt) {
            $users[$u] = $alt['nama'];
            $u++;
        }

        $data['X'] = $R;
        $data['V'] = $V;

        arsort($rank);
        $data['rankWp'] = $rank;
        $data['users'] = $users;

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
}