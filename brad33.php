<?php
    include 'bradutils.php';

    $id = 'A123456789';

    if (checkTWId($id)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>