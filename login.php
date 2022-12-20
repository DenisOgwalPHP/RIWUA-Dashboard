<?php
session_start();
/*if(!$_SESSION['user'] ){
	header('location:index.php');
	
	}
	else{	
	header('location:DashBoard2.php');		
	}*/
function siteURL() {
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'].'/';
		return $protocol;
	}

	define( 'SITE_URL', siteURL() );

	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) {
		$dir .= $parts[$i] . "/";
	}

	$url = SITE_URL.$dir;

$title = "";
$message = "";
function title($text){
		$title = $text;
		return $title;
	}

	//Message function: Returns a message to the user notifying them of their account status
	function message($text){
		$message = "<p>".$text."</p>";
		return $message;
	}
	// cURL Get Contents
	function curl_get_contents($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
if(isset($_REQUEST['submit'])){	
// getting inputs from the form		
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encryptedpassword = md5($password);
	require_once('Connection/connect.php');
			$newfetch ="SELECT Fullnames,Password,Email,Telephone FROM `registration` WHERE Email = '".$email."' and ApprovalStatus='Approved'";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)<=1){
				$staffnames= $row2[0];
				$fetchedpassword = $row2[1];
				$email=$row2[2];
				$tele=$row2[3];
			if( $fetchedpassword ==$encryptedpassword){
				$_SESSION['user']=$staffnames;
				$_SESSION['email']=$email;
				$_SESSION['Telephone']=$tele;
				header('Location: DashBoard.php');
				}else{	
				echo '<script type="application/javascript">';
				echo'alert("Password Does Not match Registered Password");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			}else{
				
				echo '<script type="application/javascript">';
				echo'alert("UserName Does Not exist");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			
	}else{
			header("location:index.php");
			die;
		}
?>