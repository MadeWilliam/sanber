 <?php
    function papan_catur($angka)
    {
        echo "papan catur $angka";
        for ($row = 1; $row <= $angka; $row++) {
            echo "<br/>";
            for ($col = 1; $col <= ($angka * 2); $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "# ";
                } else {
                    echo "&nbsp";
                }
            }
        }
        echo "<br>";
    }

    papan_catur(6);
    papan_catur(9);
    papan_catur(15);
    
?>
