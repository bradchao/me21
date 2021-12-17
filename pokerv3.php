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
        $suits = ["&spades;","&hearts;","&diams;","&clubs;"];
        $value = ['A', 2,3,4,5,6,7,8,9,10,'J','Q','K'];
        foreach($players as $player){
            sort($player);
            echo '<tr>';
            foreach($player as $card){
                echo "<td>";
                echo $suits[(int)($card / 13)]; // [0], [1], [2]. [3]
                echo $value[$card % 13];
                echo "</td>";
            }
            echo '</tr>';    
        }
    ?>
</table>


