<?php
require_once "Mobile_Detect.php";
$detector = new Mobile_Detect();

$dispositivo = ($detector->isMobile()?($detector->is_tablet()? "Tablet" : "Celular") : "Computadora");

if($dispositivo == "Celular")
	  header( 'Location: movil/index2.php' ) ;
else
	  header( 'Location: index1.php' ) ;

?>
