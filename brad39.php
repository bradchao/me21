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
        echo '<td>' .  . '</td>';
        echo '</tr>';
    }


    closedir($fp);
?>
</table>
