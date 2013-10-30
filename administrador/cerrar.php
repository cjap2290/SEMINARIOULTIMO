<?php
session_start();
$_SESSION['iduser']="";
$_SESSION['nombres']="";


session_destroy();

header("LOCATION:index.php");

?>