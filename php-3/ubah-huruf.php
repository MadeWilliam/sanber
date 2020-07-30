<?php
    function ubah_huruf($str) {
        $result = '';
        foreach (str_split($str) as $word) {
            $result .= chr(ord($word)+1);
        }
        echo $result . "<br/>";
    }
    
    // TEST CASES
    echo ubah_huruf('wow'); // xpx
    echo ubah_huruf('developer'); // efwfmpqfs
    echo ubah_huruf('laravel'); // mbsbwfm
    echo ubah_huruf('keren'); // lfsfo
    echo ubah_huruf('semangat'); // tfnbohbu
?>