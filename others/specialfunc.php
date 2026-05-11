<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="specialfunc.php" method="post">
	<label>username:</label><br>
	<input type="text" name="username"><br>
	<label>password:</label><br>
	<input type="password" name="password"><br>
	<input type="submit" name="login" value="login">
</form>


</body>
</html>
<?php
 
    if(isset($_POST["login"])){

	$username= $_POST["username"];
	$password= $_POST["password"];

	if(empty($username)){
	    echo"Username is missing";
    }
    esleif(empty($password)){
        echo"Password is missing";
    }
    else{
     	echo "Hello {$username}, Welcome to this site.<br>" ;
    }

    }

    foreach($_POST as $key => $value){
		echo "{$key} = {value} ";
	}


?>