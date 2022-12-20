<?php
$db_name = 'goodwillwomens_CropProtection';
 $db_user = 'goodwillwomens_Admin';
 $db_pass = 'jesus@lord1';
 $db_host = 'localhost';
	
    $connect_db = new mysqli( $db_host, $db_user, $db_pass, $db_name );
		
		if ( $connect_db->connect_error) 
        {
            die("Connection failed: " . $connect_db->connect_error);
		} 

?>