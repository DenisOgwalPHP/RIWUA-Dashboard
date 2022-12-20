<?php
session_start();
require_once('Connection/connect.php');
$userin=$_SESSION['email'];
$logout ="UPDATE registration SET `Status` ='Offline' where Email='".$userin."'";
mysqli_query($link,$logout);
$_SESSION=array();
if(ini_get("session.use_cookies")){
	$params=session_get_cookie_params();
	setcookie(session_name(),'',time()-4200,$params["path"],$params["domain"],$params["secure"],$params["httponly"]);
	}
session_destroy();
	echo '<script type="application/javascript">';
				echo'alert("You Have Successfully Logged Out, Login to Start A nother Session");';
				echo'window.location.href="index.php";';
				echo '</script>';
				
	 ?>