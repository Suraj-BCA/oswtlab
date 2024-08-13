<?php
function AddTwoNum($a,$b,$c){
    $sum = $a+$b;
    if($sum==$c){
        echo "Yes Sum of Two integer is equal to 3rd One";
    }
    else{
        echo "No Sum of Two integer is not equal to 3rd One";
    }
}

AddTwoNum(2,5,7);
?>