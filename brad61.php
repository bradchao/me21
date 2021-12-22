<?php
    $passwd = '123456';
    
    $passwd2 = password_hash($passwd, PASSWORD_DEFAULT);
    echo $passwd2;
    echo '<hr />';

    if (password_verify('12346', $passwd2)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>