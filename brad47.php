<?php
    $img = imagecreatefromjpeg('./dir1/coffee.jpg');

    $yellow = imagecolorallocate($img, 255, 255, 0);

    imagettftext( $img, 48, 0, 100, 100, $yellow, './dir1/font1.ttf', 'Hello, World');

    header('Content-type: image/jpeg');
    imagejpeg($img);

    imagedestroy($img);

?>