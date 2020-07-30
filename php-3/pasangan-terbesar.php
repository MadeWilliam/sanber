<?php
        function pasangan_terbesar($angka){
        // kode di sini
            echo "Pasangan terbesar ($angka) : ";

            $val=0;
            
            for($y=0; $y< strlen($angka); $y++)
            {
                $newVal = substr(strval($angka),$y,2);
                if($val<$newVal)
                {
                    $val=$newVal;
                }
            }
            echo "$val <br>";
        }

        // TEST CASES
        echo pasangan_terbesar(641573); // 73
        echo pasangan_terbesar(12783456); // 83
        echo pasangan_terbesar(910233); // 91
        echo pasangan_terbesar(71856421); // 85
        echo pasangan_terbesar(79918293); // 99
?>