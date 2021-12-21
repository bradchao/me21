<?php

    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'class2', 3306);
    // var_dump($mysqli);

    $mysqli->set_charset('utf-8');

    $sql = "INSERT INTO students (cName, cBirthday) VALUES (?,?)";
    $stmt = $mysqli->prepare($sql);

    $name = 'Brad';
    $birthday = '1999-01-02';

    $stmt->bind_param('ss', $name, $birthday);
    if ($stmt->execute()){
        echo 'OK';
    }else{
        echo 'XX';
    }





?>