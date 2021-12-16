<?php
    $poker = array();
    for ($i = 0; $i < 52; $i++){

        do{
            $temp = rand(0,51);

            // 檢查 $temp 是否已經產生過了?
            $isRepeat = false;  // is Repeat 是否重複
            for ($j = 0; $j < $i; $j++){
                if ($poker[$j] == $temp){
                    // 重複了
                    $isRepeat = true;
                    break;
                }
            }
        }while($isRepeat);

        $poker[$i] = $temp;
        echo "{$poker[$i]}<br />";
    }
    
?>