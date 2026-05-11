<?php
    
    $db_server = "localhost";
    $db_user= "root";
    $db_password= "";
    $db_name    = "firstdb";
    $db_connection="";

    try {
    	$db_connection = mysqli_connect($db_server,
                                   $db_user,
                                   $db_password,
                                   $db_name);

        // if($db_connection){
    	// echo "You are connected !";

        }
    	
     catch (Exception $e) {
    	    	echo "Could not connect";

    	
    }



?>