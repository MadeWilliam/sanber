  <?php

    function skor_terbesar($var1, $var2)
    {
        if ($var1['nilai'] == $var2['nilai']) {
            return 0;
        }
        return $var1['nilai'] < $var2['nilai'] ? 1 : -1;
    }
  
    $skor = [
        [
            "nama" => "Bobby",
            "kelas" => "Laravel",
            "nilai" => 78
        ],
        [
            "nama" => "Regi",
            "kelas" => "React Native",
            "nilai" => 86
        ],
        [
            "nama" => "Aghnat",
            "kelas" => "Laravel",
            "nilai" => 90
        ],
        [
            "nama" => "Indra",
            "kelas" => "React JS",
            "nilai" => 85
        ],
        [
            "nama" => "Yoga",
            "kelas" => "React Native",
            "nilai" => 77
        ],
    ];
    
    uasort($skor, 'skor_terbesar');
    echo "<pre>";
    print_r($skor);
    echo "</pre>";
    /* OUTPUT
    Array (
        [Laravel] => Array
                (
                    [nama] => Aghnat
                    [kelas] => Laravel
                    [nilai] => 90
                )
        [React Native] => Array
                    (
                        [nama] => Regi
                        [kelas] => React Native
                        [nilai] => 86
                    )
        [React JS] => Array
                    (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                    )
    )
    */
?>