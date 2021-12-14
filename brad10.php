<?php
    $result = $x = $y = '';
    if (isset($_GET['x']) && $_GET['y']){
        $x = $_GET['x']; $y = $_GET['y'];
        $result = $x + $y;
        // echo "{$x} + {$y} = {$result}";        
    } 
?>
<form>
    <input name='x' value="<?php echo $x; ?>" />
    +
    <input name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="=" />
    <?php 
        echo $result; 
    ?>    
</form>
