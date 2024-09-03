<?php 
$num1=20; $num2=30; $num3=10;
if($num1>$num2 && $num1>$num3)
{
    echo $num1;
}
elseif($num2>$num1 && $num2>$num3)
{
    echo $num2 ;
}
else
{
    echo $num3;
}