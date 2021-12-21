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
<hr />
<?php
    $brad = new Person('Brad');
    $tony = new Person('Tony');

    $brad->getBike()->upSpeed();
    $brad->getBike()->upSpeed();
    $brad->getBike()->upSpeed();
    $brad->getBike()->upSpeed();

    $tony->getScooter()->changeGear(4);
    $tony->getScooter()->upSpeed();
    $tony->getScooter()->upSpeed();
    $tony->getScooter()->upSpeed();

    echo "{$brad->getName()}:Bike:{$brad->getBike()->getSpeed()}<br />";
    echo "{$tony->getName()}:Scooter:{$tony->getScooter()->getSpeed()}<br />";

    var_dump($brad);
?>

object(Person)#2 (3) { 
    ["name":"Person":private]=> string(4) "Brad" 
    
    ["bike":"Person":private]=> object(Bike)#3 (1) { 
        ["speed":protected]=> float(1.728) 
    }

    ["scooter":"Person":private]=> object(Scooter)#4 (2) { 
        ["gear":"Scooter":private]=> int(0) 
        ["speed":protected]=> int(0) 
    } 
}

