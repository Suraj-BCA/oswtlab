<?php
function larg($a,$b,$c){
    if($a>$b or $a>$c){
        echo " Largest number among three is $a";
    }
    elseif($b>$a or $b>$c){
        echo " Largest number among three is $b";
    }
    else{
        echo " Largest number among three is $c";
    }
}
larg(7,9,8);
?>