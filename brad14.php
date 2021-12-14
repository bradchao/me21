<?php
    $isLeap = '';
    if (isset($_GET['year'])){
        $year = $_GET['year'];
        if ($year % 4 == 0){
            if ($year % 100 == 0){
                if ($year % 400 == 0){
                    // 潤
                    $isLeap = true;
                }else{
                    // 平
                    $isLeap = false;
                }
            }else{
                // 潤
                $isLeap = true;
            }
        }else{
            // 平
            $isLeap = false;
        }
    }
?>
<form>
年:<input type="number" name="year" />
<input type="submit" value="判斷" />
<?php echo $isLeap?'潤':'平'; ?>
</form>
