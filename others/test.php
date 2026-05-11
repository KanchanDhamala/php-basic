<?php

echo"I love pizza <br>";

$name = "Kanchan Dhamala";
$food = "pizza";
$quantity = 4;
$price = 599.56;
$total =null;

echo "Hello {$name}, Do you like {$food}? <br> ";
echo"I would like to buy {$quantity}  {$food}. <br>";

$total = $quantity * $price;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	

	<button>order pizza </button>
	<p>Your total price is: Rs.<?php echo $total; ?></p>

</body>
</html>