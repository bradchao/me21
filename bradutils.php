<?php
    function checkTWId($id){
        // 長度為 10
        // A-Z x 1
        // 0-9 x 9
        // 第二碼 1 / 2
        $isRight = false;

        if (strlen($id) == 10){
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $c1 = substr($id,0,1);
            if (strpos($letters, $c1) !== false ){
                
                $isRight = true;
            }
        }

        return $isRight;
    }

?>