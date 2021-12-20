<?php
    $fp = fopen('./dir1/brad1.txt', 'w');
    fwrite($fp, "Hello, Brad");
    fclose($fp);
?>