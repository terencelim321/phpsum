<?php
#create curl resource
$curl = curl_init(); //$ data type curl resource
#set curl options
curl_setopt($curl, CURLOPT_URL, 'http://www.google.com');

#run curl (execute http request)
curl_exec($curl);

#close curl resource
curl_close($curl);
?>