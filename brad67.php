<?php
    if (!isset($_REQUEST['account'])) {
        // die
        return;
    };

    include 'bradutils.php';
    $mysqli = connectSQL('iii');
    $account = $_REQUEST['account'];

    $sql = "SELECT account FROM member WHERE account = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0){
        // XX
        echo 'XX';
    }else{
        // OK
        echo 'OK';
    }
?>