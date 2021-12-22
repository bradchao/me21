<?php
    session_start();
    $lottery = $_SESSION['lottery'];
    echo $lottery . '<hr />';

    $a = $_SESSION['a'];
    var_dump($a);

?>