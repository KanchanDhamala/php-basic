<?php 

   include("database.php");

   $username = "Kanxu";
   $password = "coder123";
   $hash = password_hash($password, PASSWORD_DEFAULT);

   try {
   	$sql = "INSERT  INTO users (user, password)
           VALUES ($username, hash) ";

    echo "New user created. <br>";       

    mysqli_query($db_connection, $sql);
   	
   } catch (Exception $e) {
   	echo "Database couldnot connected";
   }

   



   mysqli_close($db_connection);

?>

