<?php 
session_start();
if($_SESSION['iduser']=="")
{
	header("Location:index.php?iderror=2");
}
else{

?>
<html>
	<head>
	<title>SISTEMA DE ADMIN</title>
	</head>
	<frameset rows="50,*" frameborder="si" border="1" framespacing="0">
		<frame src="arriba.php" name="arriba" scrolling="No" noresize="noresize" id="topFrame"/>
		<frameset cols="140,*" frameborder="yes" border="0" framespacing="0">
			<frame src="menu.php" name="leftFrame" scrolling="auto" noresize="noresize" id="leftFrame"/>
			<frame src="bandeja.php" name="bandeja"  id="mainFrame"/>
		</frameset>
	</frameset>
	<noframes><body>
	</body></noframes>
</html>
<?php } ?>