<?php
$url="https://api.telegram.org/bot1001742824:AAFwgnQ0rFXCNGtSBojwzv72WpCvRnHLLtI/";
$con = curl_init(); 
$wh=$url."setWebhook?url=https://Shadow085.github.io";
curl_setopt($con, CURLOPT_URL, $wh); 
curl_setopt($con, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($con, CURLOPT_HEADER, 0); 
$output = curl_exec($con);
curl_close($con);
?>