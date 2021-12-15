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

        // Code Review => I/O => File => Network
        // 大部分(3/4 +)的案例,至少做兩次的判斷
        if ( ($year % 4 == 0 && $year % 100 !== 0) || ($year % 400 == 0) ) {
            echo '閏年';
        } else {
            echo '平年';
        }

    }
?>
<form>
年:<input type="number" name="year" />
<input type="submit" value="判斷" />
<?php echo $isLeap?'潤':'平'; ?>
</form>
