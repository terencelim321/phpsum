<?php
if(isset($_POST["submit"]))
{
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
}
$numbers = array(
                    'number1' => $num1,
                    'number2' => $num2

);
#$str = http_build_query($numbers);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://phpsum.herokuapp.com/store.php");
curl_setopt($curl, CURLOPT_POST,1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $numbers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($curl);
curl_close($curl);

?>

<html>
<body>
 
<form method = "POST" action = "" >
  Input number 1 :<input  name="number1"  type="number"> <br>
  Input number 2 :<input  name="number2"  type="number"><br>
  <input  type="submit"  name="submit" >

</form>
<?echo $output;?>
</body>
</html>