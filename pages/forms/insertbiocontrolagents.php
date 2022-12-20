<?php
session_start();
if(isset($_SESSION['user'])){
	}
	else{
		
		}
try{
	
if(isset($_REQUEST['biocontrolagentupload'])){	
// getting inputs from the form	
   $biocontrolname = $_POST['biocontrolname'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename = $biocontrolname. '.' . end($temp);
	
	$target = "BioAgentsAttachments/";	
	$fileTarget = $target.$newfilename;     
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget);
	$biocontroldetails = $_POST['biocontroldetails'];
	$biocontrolpostedby = $_POST['biocontrolpostedby'];
	$imageurl="http://goodwillwomenspulse.org/AndroidFiles/";
	$finalimageurl=$imageurl.$fileTarget;
	
	require_once('../../connection/connect.php');
	
	$query = "INSERT INTO `biocontrolagents` (BioAgent,Details,PostedBy,Attachment) VALUES(' $biocontrolname','$biocontroldetails','$biocontrolpostedby','$finalimageurl')";
			$result=mysqli_query($link,$query);
			if($result){
				echo '<script type="application/javascript">';
				echo'alert("Bio Control Agent successfully registered");';
				echo'window.location.href="BioControlAgents.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Bio Control Agent registration Failed");';
				echo'window.location.href="BioControlAgents.php";';
				echo '</script>';
			}
			
	}else{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="BioControlAgents.php";';
				echo '</script>';
			die;
		}
		throw new Exception();
}Catch(Exception $ex){
	echo $ex;
}
?>