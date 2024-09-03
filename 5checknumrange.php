<?php
function ChecknumRange($a,$b){
    if($a  >= 100 and $a <=200 or $b  >=100 and $b <=200){
        echo "One of them two number is in the range of 100...200";
    }
    else{
        echo "None of the number are in the range of 100...200";
    }

}
ChecknumRange(201,99);
?>