<?php
    include 'bradutils.php';

    echo createTWIdByRandom() . '<br />';
    echo createTWIdByGender(false) . '<br />';
    echo createTWIdByArea('W') . '<br />';
    echo createTWIdByBoth(true, 'B') . '<br />';
?>