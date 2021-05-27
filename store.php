<?php
#if (isset($_POST['name'])){
#    $num1 = $_POST['number1'];
#    $num2 = $_POST['number2'];
#    echo $num1;
#}
print_r($_POST);
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$sum = $num1 + $num2;

echo 'sum is ' . $sum;

?>