<?php
    if (!isset($_POST['account'])) header('Location: brad63.php');

    include 'bradutils.php';
    $mysqli = connectSQL('iii');

    $account = $_POST['account'];
    $passwd =  password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $realname = $_POST['realname'];

    $sql = "INSERT INTO member (account,passwd,realname) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $account, $passwd, $realname);
    if ($stmt->execute()){
        echo 'Register Success';
        $url = 'brad62.php';
        $mesg = 'Back to Login';
    }else{
        echo 'Register Failure';
        $url = 'brad63.php';
        $mesg = 'Back to Register';
    }
?>
<hr>
<a href='<?php echo $url; ?>'><?php echo $mesg; ?></a>
