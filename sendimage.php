<?php
//https://localhost/PruebasTelegram/sendMensaje/sendimage.php

 
$file = "/Captura.JPG";
$token = "1039242221:AAHqzyXt8Y-Nwfd35u0H-eNpKfVzxx9CB7k";
$id = "@oamdchannel";
$caption = "Texto o hashtag en el mensaje de la imagen";
$url = "https://api.telegram.org/bot{$token}/sendPhoto";
$post = array( 'chat_id' => $id, 'photo' => '@'. $file,'caption' => $caption );

if (file_exists($file)) :
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close($ch);
endif;
?>