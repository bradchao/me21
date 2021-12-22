<?php
    include 'bradutils.php';

    session_start();
    if (!isset($_SESSION['member'])) header('Location: brad70.php');

    $lottery = $_SESSION['lottery'];
    echo $lottery . '<hr />';

    $a = $_SESSION['a'];
    var_dump($a);

    $member = $_SESSION['member'];
    var_dump($member);

?>
<a href="logout.php">Logout</a>