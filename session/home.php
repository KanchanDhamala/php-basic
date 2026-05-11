<?php

    session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>This is the Home page. </h2><br>

	<form action="home.php" method="post">
		<input type="submit" name="logout" value="logout">
	</form>


</body>
</html>

<?php

    echo"Welcome {$_SESSION["username"]} !!! .<br>" ;


    if(isset($_POST["logout"])){
    	session_destroy();
    	header("Location: index.php");
    }

?>