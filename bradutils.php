<?php
    function checkTWId($id){
        // 長度為 10
        // A-Z x 1
        // 0-9 x 9
        // 第二碼 1 / 2
        $isRight = false;
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $c1 = substr($id, 0, 1);
            $n12 = strpos($letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;

            //echo "{$n1} : {$n2}";
        }
        return $isRight;
    }

?>