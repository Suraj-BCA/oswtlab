<?php
function Checknum($a,$b){
    if($a==30 or $b==30){
        echo "One of Among Two number is 30";
        return true;
    }
    else{
        $a+$b == 30;
        echo "Sum of two number is Equal to 30";
        return true;

    }
}
Checknum(30,10);
?>