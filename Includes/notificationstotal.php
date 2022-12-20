<?php
require_once('connect.php');
$dates1=date("Y");
$sales ="SELECT COUNT(notificationid) as notification FROM `notifications`";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmales=$row['notification'];
echo $totalmales;

?>