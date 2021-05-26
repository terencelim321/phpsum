
<html>
<body>

Number 1 is :<?php echo $_POST["num1"]; ?><br>
Number 2 is: <?php echo $_POST["num2"]; ?>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$age = array("number1"=>$num1, "number2"=>$num2);

echo json_encode($age);

?>


</body>
</html>
