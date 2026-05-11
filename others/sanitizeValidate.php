<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="sanitizeValidate.php" method="post">
		username:<br>
		<input type="text" name="username"><br>
		age:<br>
		<input type="text" name="age"><br>
		email:<br>
		<input type="text" name="email"><br>
		<input type="submit" name="login" value="login"><br>


		
			
	</form>

</body>
</html>
<?php 

    if (isset($_POST["login"])) {

    	// $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    	// $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    	// $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    	// echo $username;
    	// echo "Your age is {$age}.";
    	// echo "Your email is {$email}.";

    	$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    	if(empty($age)){
    		echo "Your age is not valid.";
    	}
    	else{
    		echo"Your age is {$age}.";
    	}

    }


?>