<?php
    date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width="100%" >
    <tr>
        <th>Filename</th>
        <th>Size</th>
        <th>MTime</th>
    </tr>
<?php
    $dir = "./dir1/";
    $fp = @opendir($dir) or exit('Server Busy');
    //var_dump($fp);
    while ($fname = readdir($fp)){
        echo '<tr>';
        echo "<td>" . ($dir . $fname) . "</td>" ;
        echo '<td>' . filesize($dir . $fname) . 'bytes </td>' ;
        echo '<td>' . date('Y-m-d H:i:s',filemtime($dir . $fname)) . '</td>';
        echo '</tr>';
    }


    closedir($fp);
?>
</table>

timestamp 時間戳記
