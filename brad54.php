<?php
    include 'bradutils.php';

    $s1 = new Scooter;
    $s1->upSpeed();$s1->upSpeed();$s1->upSpeed();$s1->upSpeed();$s1->upSpeed();
    echo $s1->getSpeed() . '<hr />';
    $s1->changeGear(2);
    $s1->upSpeed();$s1->upSpeed();
    echo $s1->getSpeed() . '<hr />';
    $s1->dump();


?>