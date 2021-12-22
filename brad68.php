<?php
    if (!isset($_POST['account'])) header('Location: brad62.php');

    include 'bradutils.php';
    $mysqli = connectSQL('iii');

    $account = $_POST['account']; $passwd = $_POST['passwd'];

    $sql = "SELECT id,account,passwd,realname FROM member WHERE account = ?";
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0){
        $stmt->bind_result($id, $account, $passwdHash, $realname);
        $stmt->fetch();
        if (password_verify($passwd, $passwdHash)){
            // OK
        }else{
            // XX
        }
    }else{
        // account not exist
    }
?>