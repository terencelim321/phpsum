<?php
#create curl resource request
$curl = curl_init(); //$ data type curl resource
$url = 'https://phpsum.herokuapp.com/json.php';
#set curl options
curl_setopt($curl, CURLOPT_URL, $url);

#run curl (execute http request)
$data = curl_exec($curl);
$a = json_decode($data, true);
echo $a['number1'];
#close curl resource
curl_close($curl);
?>