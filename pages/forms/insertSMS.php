<?php
session_start();
if(isset($_SESSION['user'])){
	}
	else{
		
		}
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
	
if(isset($_REQUEST['smsupload'])){	
// getting inputs from the form	
	$messsage = $_POST['messsage'];
	$people = $_POST['people'];
	if($people=="All Farmers"){
		
		$telenumber ="All Farmers";
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT Telephone FROM `registration` where DOB is NULL and ApprovalStatus='Approved' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter=1; $numbers='';
				while($row5=mysqli_fetch_assoc($result5)){
					$number=$row5['Telephone'];
					if($counter==1){
						$numbers=$number;
					}else{
						$numbers .=','.$number;
					}
					$counter++;
				}
		header("Location:http://geniussmsgroup.com/api/http/messagesService/get?username=Denis16&password=jesus@lord1&senderid=Geniussms&message=".$messsage."&numbers=".$numbers."");
	}else if($people=="All Extension Workers"){
		
		$telenumber = "All Extension Workers";
		require_once('../../Connection/connect.php');
				$sales6 ="SELECT Telephone FROM `registration` where DOB is NOT NULL and ApprovalStatus='Approved' order by IDDesc Desc";
				$result5=mysqli_query($link,$sales6);
				$counter=1; $numbers='';
				while($row5=mysqli_fetch_assoc($result5)){
					$number=$row5['Telephone'];
					if($counter==1){
						$numbers=$number;
					}else{
						$numbers .=','.$number;
					}
					$counter++;
				}
		header("Location:http://geniussmsgroup.com/api/http/messagesService/get?username=Denis16&password=jesus@lord1&senderid=Geniussms&message=".$messsage."&numbers=".$numbers."");
		
	}else if($people=="Individuals"){
		$telenumber = $_POST['telenumber'];
		header("Location:http://geniussmsgroup.com/api/http/messagesService/get?username=Denis16&password=jesus@lord1&senderid=Geniussms&message=".$messsage."&numbers=".$telenumber."");
	}
	
	$postedby =$_SESSION['user'];
	$postedbyemail =$_SESSION['email'];
	require_once('../../connection/connect.php');
	
	$query = "INSERT INTO `message` (Message,Contact,Email,Name) VALUES('$messsage','$telenumber','$postedbyemail','$postedby')";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("SMS successfully Sent");';
				echo'window.location.href="SMS.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("SMS Sending Failed");';
				echo'window.location.href="SMS.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="SMS.php";';
				echo '</script>';
			die;
		}
?>