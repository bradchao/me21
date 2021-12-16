<?php
    $poker = range(0,51);
    shuffle($poker);
    // foreach($poker as $v){
    //     echo "{$v}<br>";
    // }
?>
<hr />
<?php
    $players = [[],[],[],[]];
    // var_dump($players);

    foreach ($poker as $i => $card){
        $players[$i % 4][ (int)($i / 4) ] = $card;
    }

?>
<table border="1" width="100%">
    <?php
        foreach($players as $player){
            echo '<tr>';
            foreach($player as $card){
                echo "<td>{$card}</td>";
            }
            echo '</tr>';    
        }

    ?>
</table>