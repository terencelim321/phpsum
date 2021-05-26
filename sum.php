
<html>
<body>

Number 1 is :<?php echo $_POST["num1"]; ?><br>
Number 2 is: <?php echo $_POST["num2"]; ?>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);

echo $myJSON;
?>


</body>
</html>
