
<html>
<body>

Number 1 <?php echo $_POST["num1"]; ?><br>
Number 2 is: <?php echo $_POST["num2"]; ?>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$output = shell_exec("python sum.py $num1 $num2");
echo "sum of both numbers = " $output;
?>


</body>
</html>
