<?php
#create curl resource request
$curl = curl_init(); //$ data type curl resource
$url = 'https://phpsum.herokuapp.com/curl.json';
#set curl options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

#run curl (execute http request)
$data = curl_exec($curl);
$decoded = json_decode($data, true);
#print_r($decoded);

$num1 = $decoded['numbers']['number1'];
$num2 = $decoded['numbers']['number2'];
$sum = $num1 + $num2 ;
echo "The sum is" . $sum;
curl_close($curl);
?>