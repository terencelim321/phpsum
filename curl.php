<?php
#create curl resource request
$curl = curl_init(); //$ data type curl resource
$url = 'http://www.google.com';
#set curl options
curl_setopt($curl, CURLOPT_URL, $url);

#run curl (execute http request)
$result = curl_exec($curl);
echo $result;
#close curl resource
curl_close($curl);
?>