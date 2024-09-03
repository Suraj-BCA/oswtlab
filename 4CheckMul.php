<?php
function ChecknumMul($a){

    if($a%3==0){
        echo "Number is Multiple of 3";
    }
    elseif($a%7==0){
        echo "Number is Multiple of 7";
    }
    else{
        echo "None is multiple of 3 or 7";
    }
}
ChecknumMul(21);
?>