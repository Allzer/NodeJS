<?php
    
    $list_1 = [1,2,23,4,54];

    function info($list){
        return array_sum($list);
    }

    $res = info($list_1);
    echo $res
?>