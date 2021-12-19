<?php
    // 正規表示法 Regex
    $id = 'X133456789';
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
        echo 'OK1';
    }else{
        echo 'XX2';
    }

?>