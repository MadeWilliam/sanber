<!-- Buatlah sebuah function perolehan_medali() yang menerima satu parameter berupa array multidimensi yang berisi nama negara dan perolehan medali. function akan menghitung jumlah medali emas, perak dan perunggu per negara. function akan me-return sebuah array berisi array asosiatif per-negara disertai jumlah masing-masing perolehan medal. jika tidak ada data pada array yang diinputkan di parameter, maka function me-return "no data"
 -->

 <?php

 function perolehan_medali($array) {
        //  PSEUDOCODES
        //  1. foreach array 
        //  2. associate countries & medals
        
        $indonesia = array( 
            ["negara" => 'indonesia'],
            ["emas" => 0],
            ["perak" => 0],
            ["perunggu" => 0] 
        );

        $india = array( 
            ["negara" => 'india'],
            ["emas" => 0],
            ["perak" => 0],
            ["perunggu" => 0] 
        );

        $koreaSelatan = array( 
            ["negara" => 'korea selatan'],
            ["emas" => 0],
            ["perak" => 0],
            ["perunggu" => 0] 
        );

        foreach ($array as $country) {
                if($country[0] == 'indonesia') {
                    switch ($country[1]) {
                        case 'emas':
                            $indonesia["emas"] = 2;
                            break;
                        case 'perak':
                            $indonesia["perak"] = 2;
                            break;
                        case 'perunggu':
                            $indonesia["perunggu"] = 2;
                            break;
                    }
                }
                if($country[0] == 'korea selatan') {
                    switch ($country[1]) {
                        case 'emas':
                            $koreaSelatan["emas"] = 2;
                            break;
                        case 'perak':
                            $koreaSelatan["perak"] = 2;
                            break;
                        case 'perunggu':
                            $koreaSelatan["perunggu"] = 2;
                            break;
                    }
                }
                if($country[0] == 'india') {
                    switch ($country[1]) {
                        case 'emas':
                            $india["emas"] = 2;
                            break;
                        case 'perak':
                            $india["perak"] = 2;
                            break;
                        case 'perunggu':
                            $india["perunggu"] = 2;
                            break;
                    }
                }
            }
        }

// TEST CASES
print_r(perolehan_medali(array(
    array('indonesia', 'emas'),
    array('india', 'perak'),
    array('korea selatan', 'emas'),
    array('india', 'perak'),
    array('india', 'emas'),
    array('indonesia', 'perak'),
    array('indonesia', 'perak')
)));    
