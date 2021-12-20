<?php
    if (!isset($_GET['filename'])) die('Get out here');

    $filename = $_GET['filename'];
    $content = $_GET['content'];

    $fp = fopen("./dir1/{$filename}", 'w');
    fwrite($fp, $content);
    fclose($fp);

    // 輸出轉導向
    header("Location: ./dir1/{$filename}");
?>