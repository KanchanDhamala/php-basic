<?php 

$foods= array("momo", "pizza" ,"Chowmin", "Chicken Nuggets");
array_push($foods, "Mustang Aloo","Chatpate");
// $foods[0]= "Salad";
// array_pop($foods);
// array_shift($foods);


echo count($foods);

foreach($foods as $food){
	echo $food . "<br>";

}


$reversed_foods = array_reverse($foods);

foreach($reversed_foods as $food){
	echo $food . "<br>";

}

?>