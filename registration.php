<?php
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
	
if(isset($_POST['uname'])){	

// getting inputs from the form		
	$password = $_POST['pword'];
	$encryptedpassword = md5($password);
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$lastname = $_POST['lname'];
	$firstname = $_POST['fname'];
	$names= $lastname." ".$firstname;
	$phone = $_POST['phone'];
	$day = $_POST['dd'];
	$month = $_POST['mm'];
	$year = $_POST['yyyy'];
	$dob=$day."-".$month."-".$year;
	$location = $_POST['address'];
	$token=md5(uniqid(rand(), true));
    $timeregistered=date("Y-m-d H:i:s");
	require_once('Connection/connect.php');
	
	//checking if user is already registered
			$count ="SELECT COUNT('Email') AS Counter FROM `registration` WHERE `Email` = '".$email."'";
			$result=mysqli_query($link,$count);
			$row=mysqli_fetch_assoc($result);
		if($row['Counter'] == 0){
			$query = "INSERT INTO `registration` (unique_id,FullNames,Password,Email,Telephone,Address,created_at,DOB) VALUES('$token','$names','$encryptedpassword','$email','$phone','$location','$timeregistered','$dob')";
			$results=mysqli_query($link,$query);
			if($results){
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Account Has Been Created, Wait for Approval to begin Using it");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be created");';
				echo'window.location.href="home.html";';
				echo '</script>';
			}
			}else{
			//Wrong username or password message
				echo '<script type="application/javascript">';
				echo'alert("Account with same Username Already Exists");';
				echo'window.location.href="index.php";';
				echo '</script>';
	}
	}else{
			echo '<script type="application/javascript">';
				echo'alert("Failed, wrong inputs.");';
				echo'window.location.href="index.php";';
				echo '</script>';
			die;
		}
?>