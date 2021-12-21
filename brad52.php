<?php
    function createFilename($source, $index){
        date_default_timezone_set('Asia/Taipei');
        $data = explode('.',$source);
        if (count($data)>=2){
            $sname = '.' . $data[count($data)-1] ;
        }else{
            $sname = '';
        }
        $filename = date('Ymd_His') . $index  . $sname;
        return $filename;
    }
?>