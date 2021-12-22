<?php
    if (!isset($_REQUEST['account'])) header('Location: brad62.php');

    include 'bradutils.php';
    $mysqli = connectSQL('iii');

    $account = $_REQUEST['account']; $passwd = $_REQUEST['passwd'];

    $sql = "SELECT id,account,passwd,realname FROM member WHERE account = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0){
        $stmt->bind_result($id, $account, $passwdHash, $realname);
        $stmt->fetch();

        //echo $passwd . ":" . $passwdHash;

        if (password_verify($passwd, $passwdHash)){
            // OK
            header('Location: brad69.php');
        }else{
            // XX
            header('Location: brad62.php');
        }
    }else{
        // account not exist
        header('Location: brad62.php');
    }
?>