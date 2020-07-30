
<?php

/* NOTES : Below programs are Hard codedly written */

function skor_terbesar($arr)
{
    //kode di sini
    $namaLaravel = "";
    $kelasLaravel = "";
    $nilaiLaravel = 0;

    $namaReactNative = "";
    $kelasReactNative = "";
    $nilaiReactNative = 0;

    $namaReactJS = "";
    $kelasReactJS = "";
    $nilaiReactJS = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]["kelas"] == "Laravel" && $arr[$i]["nilai"] > $nilaiLaravel) {
            $namaLaravel = $arr[$i]["nama"];
            $kelasLaravel = $arr[$i]["kelas"];
            $nilaiLaravel = $arr[$i]["nilai"];
        } else if ($arr[$i]["kelas"] == "React Native" && $arr[$i]["nilai"] > $nilaiReactNative) {
            $namaReactNative = $arr[$i]["nama"];
            $kelasReactNative = $arr[$i]["kelas"];
            $nilaiReactNative = $arr[$i]["nilai"];
        } else if ($arr[$i]["kelas"] == "React JS" && $arr[$i]["nilai"] > $nilaiReactJS) {
            $namaReactJS = $arr[$i]["nama"];
            $kelasReactJS = $arr[$i]["kelas"];
            $nilaiReactJS = $arr[$i]["nilai"];
        }
    }

    $newArray['Laravel'] = array(
        "nama" => $namaLaravel,
        "kelas" => $kelasLaravel,
        "nilai" => $nilaiLaravel
    );

    $newArray['React Native'] = array(
        "nama" => $namaReactNative,
        "kelas" => $kelasReactNative,
        "nilai" => $nilaiReactNative
    );

    $newArray['React JS'] = array(
        "nama" => $namaReactJS,
        "kelas" => $kelasReactJS,
        "nilai" => $nilaiReactJS
    );

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
}

// TEST CASES
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

print_r(skor_terbesar($skor));
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