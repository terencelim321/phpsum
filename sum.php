
<html>
<body>

Number 1 is :<?php echo $_POST["num1"]; ?><br>
Number 2 is: <?php echo $_POST["num2"]; ?>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
#$num1 = 2;
#$num2 = 3;

$age = array("number1"=>$num1, "number2"=>$num2);

echo json_encode($age);
$json = json_encode($age);

$result = shell_exec("python sum.py $json");
echo $result;
?>


</body>
</html>
