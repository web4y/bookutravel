
<?php
sesion_start();
$past = time() - 100;

//това унищожава бисквитката

setcookie(ID_my_site, gone, $past);

setcookie(Key_my_site, gone, $past);

header("Location: logout.html");

?><!doctype html>

<html lang="en">
<head>
	<title>Login</title>
	</head>
	<body>


<?php
if($_SERVER['REQUEST_METOD']=='POST')


{
	$_SESSION
}
?>
	
