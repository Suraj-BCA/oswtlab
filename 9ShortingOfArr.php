<?php
function AscShort($Arr){
    for($i = 0; $i < sizeof($Arr); $i++){
        for($j = $i+1; $j < sizeof($Arr); $j++){
            if($Arr[$i]>$Arr[$j]){
                $temp = $Arr[$i];
                $Arr[$i] = $Arr[$j];
                $Arr[$j] = $temp;
            }
        }
    }
    echo "Asscending Shorted Array : " ;
    for($i = 0; $i < sizeof($Arr); $i++){
        echo " $Arr[$i]";
    }
}
function DesShort($Arr){

for($i = 0; $i < sizeof($Arr); $i++){
    for($j = $i+1; $j < sizeof($Arr); $j++){
        if($Arr[$i]<$Arr[$j]){
            $temp = $Arr[$i];
            $Arr[$i] = $Arr[$j];
            $Arr[$j] = $temp;
        }
    }
}
echo "<br>Decending Shorted Array : " ;
for($i = 0; $i < sizeof($Arr); $i++){
    echo " $Arr[$i]";
    }
}
$Arr = [5,3,9,1,2];

AscShort($Arr);
DesShort($Arr);
?>
