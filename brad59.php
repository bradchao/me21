<?php
    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'class2', 3306);
    $mysqli->set_charset('utf-8');

    $sql = "SELECT * FROM students";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_array()){
        echo "{$row['cName']}:{$row['ch']}:{$row['eng']}<br />";
    }


?>

