<?php

 $Sum = 0;
function AvgOfArr($Arr){
    for ( $i = 0; $i < sizeof($Arr); $i++ ){
        $Sum = $Sum+$Arr[$i];
    }

    $Avg = $Sum/2;

    echo "Sum is : $Sum\n";
    echo "Avg is : $Avg";
}

$Arr = [1,2,3,4,5];
AvgOfArr($Arr);
?>