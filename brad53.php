<?php
    include 'bradutils.php';

    $myBike = new Bike;
    $urBike = new Bike;

    $myBike->upSpeed(); $myBike->upSpeed(); $myBike->upSpeed(); $myBike->upSpeed();
    $urBike->upSpeed(); $urBike->upSpeed();$urBike->downSpeed();
    echo $myBike->getSpeed() . ':' . $urBike->getSpeed() . '<hr>';

    for(;($urBike->getSpeed()) < 10; $urBike->upSpeed());
    //$urBike->speed = 10.1;

    echo $myBike->getSpeed() . ':' . $urBike->getSpeed() . '<hr>';


?>