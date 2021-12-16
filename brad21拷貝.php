<table border="1" width="100%">
    <?php
        $start = 1;
        $cols = 9;
        $rows = 1;

        for ($k = 0; $k < $rows; $k++){
            echo '<tr>';
            for ($j = $start; $j < $start+$cols; $j++){
                $newj = $j  + $k * $cols;
                echo '<td>'; 
                for ($i = 1; $i <= 9; $i++){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br />";
                }
                echo '</td>';
            }
            echo '</tr>';    
        }
    ?>

</table>