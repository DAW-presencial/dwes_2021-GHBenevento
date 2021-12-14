<?php

$number_array = [4, 3, 5];

function sort_bubble(&$arr){
        $len = count($arr);
        for($i=0 ; $i < $len ; $i++){
            $current = $arr[$i];
            $next = $arr[$i+1];
            if($current > $next ){
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $i = 0;
            }
        }
}

function sort_quick(&$arr, $low, $high){
    $current = $arr[($low + $high)/2 ];
    $c_low= $low;
    $c_high = $high;
        while($c_low <= $c_high) {
            while ($arr[$c_low] < $current) {
                $c_low++;
            }
            while ($arr[$c_high] > $current) {
                $c_high--;
            }
            if($c_low <= $high){
                $temp = $arr[$c_low];
                $arr[$c_low] = $arr[$c_high];
                $arr[$c_high] = $temp;
            }
            $c_low++;
            $c_high--;
        }
        if($low < $c_high){
            sort_quick($arr, $low, $c_high);
        }
        if($c_low > $high){
            sort_quick($arr, $c_low, $high);
        }

}