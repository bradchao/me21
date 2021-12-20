<?php
    $fp = opendir("c:\\");

    while ($f1 = readdir($fp)){
        echo $f1 . '<br />';
    }


    closedir($fp);
?>