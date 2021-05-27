<?php
#create curl resource request
$curl = curl_init(); //$ data type curl resource
$url = 'https://phpsum.herokuapp.com/curl.json';
#set curl options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true)

#run curl (execute http request)
$data = curl_exec($curl);
$decoded = json_decode($data);
print_r($decoded);
#$a = json_decode(file_get_contents($data), true);
#echo $a;
#close curl resource
curl_close($curl);
?>