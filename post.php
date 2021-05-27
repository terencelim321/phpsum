<?php
$numbers = array(
                    'number1' => 1
                    'number2' => 2

);
$str = http_build_query($numbers);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://phpsum.herokuapp.com/store.php");
curl_setopt($curl, CURLOPT_POST,1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $str);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($curl);
curl_close($curl);
echo $output;
?>