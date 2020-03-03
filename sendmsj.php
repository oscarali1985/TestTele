<?php
//header("Content-Type: application/json; charset=UTF-8");
// digitel 677779190
// movistar 643117404
//Jhorman 835119661
// http://localhost/PruebasTelegram/PHP/sendMensaje/sendmsj.php
//channel 686449807

function mandarmensaje(){
$token = "1039242221:AAHqzyXt8Y-Nwfd35u0H-eNpKfVzxx9CB7k";

$idu = "oscaralimd1985";
$idd = "677779190";
$idm = "643117404";
$idj = "835119661";
$idch = "@oamdchannel";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "no te olvides de probar lo del CRM jajaja. saludo";


 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$idm}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$hola = curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);

$server_output = curl_exec($ch);

//echo $server_output;

var_dump(json_decode($server_output));


?>
<br>
<br>
<br>
<?php

$resultado = json_decode($server_output);
$result =json_encode($resultado->result);


if( $resultado->ok == true){
    echo '<script language="javascript">alert(" Mensaje Enviado';
    //echo $resultado->ok;
    echo '");</script>';
}else {
    echo '<script language="javascript">alert(" El mensaje no se pudo enviar ';
    echo $resultado->error_code.' '.$resultado->description ;
    echo '");</script>';
}

//echo $resultado->ok;
//echo $result->message_id;

curl_close($ch);

};


mandarmensaje()

?>