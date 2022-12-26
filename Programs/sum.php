<?php
$num=4567867;
$num1=$num;
$sum=0;
$rem=0;

for ($i=0; $i <=strlen($num) ; $i++) { 
    $rem=$num%10;
    $sum=$sum+$rem;
    $num=$num/10;
}
echo "sum of digits $num1 is $sum";
?>