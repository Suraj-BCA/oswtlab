<?php
function sumofnum($a,$b){
    if($a!=$b){
        $sum = $a+$b;
    }
    else{
        $sum = 3*($a+$b);
    }
    echo " Sum of two number is : $sum";
}
sumofnum(10,10);
?>