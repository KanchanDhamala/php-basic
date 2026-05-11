<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="associativeArray.php" method="post">
		<label>Enter a country:</label><br>
		<input type="text" name="country">
		<input type="submit">

	</form>

</body>
</html>


<?php 

$capitals= array(
                "USA" => "Washington D.C.",
                "India" => "New Dehli",
                "Nepal" => "Kathmandu",
                "Japan" => "Tokyo"  ,
                "South Korea" => "Seoul" );

$capital = $capitals[$_POST["country"]];

echo "The capital is {$capital}";

?>