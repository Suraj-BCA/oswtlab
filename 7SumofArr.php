<?php
function SumofArr($arr){
    $sum = 0;
    for ( $i = 0; $i < sizeof($arr); $i++ ) {
     $sum = $sum + $arr[$i];
}
    echo "Sum of Array is : $sum";
}
$arr = [3,8,9,4,6];
SumofArr($arr);
?>