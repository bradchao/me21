<?php
    include 'bradutils.php';
    session_start();

    $lottery = rand(1,49);
    echo $lottery;

    $a = [1,2,3,4,5];

    $_SESSION['lottery'] = $lottery;

    $a[0] = 123;
    $_SESSION['a'] = $a;

    $member = new Member(1,'brad','Brad Chao');
    echo "{$member->getId()} : {$member->getAccount()} : {$member->getRealname()}";
    $_SESSION['member'] = $member;

    $member->setRealname('New Brad');


?>
<hr />
<a href='brad71.php'>Next</a>