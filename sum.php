
<html>
<body>

Number 1 is :<?php echo $_POST["num1"]; ?><br>
Number 2 is: <?php echo $_POST["num2"]; ?>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$output = shell_exec("python sum.py $num1 $num2");
#echo "sum of both numbers = " $output;

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>


</body>
</html>
