<?php
$n = 1221;

$num = $n;  
$sum = 0;  
while(floor($num)) {  
$rem = $num % 10;  
$sum = $sum * 10 + $rem;  
$num = $num/10;  
}  

if($num == $n)
{
    echo "Given number is Palindrome";
}
else
{
    echo "Given number is not Palindrome";
}
?>