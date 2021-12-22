<?php
    session_start();

    $lottery = rand(1,49);
    echo $lottery;

    $a = [1,2,3,4,5];

    $_SESSION['lottery'] = $lottery;

    $a[0] = 123;
    $_SESSION['a'] = $a;
    
?>
<hr />
<a href='brad71.php'>Next</a>