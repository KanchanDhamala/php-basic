<?php 

$hours = 50;
$rate = 15;
$weekly_pay = null;

if($hours <= 0){
	$weekly_pay= 0;

}

elseif($hours >= 42){
	$weekly_pay= $hours * ($rate * 1.2);
}

else{
	$weekly_pay= $hours*$rate;

}

echo "You made \${$weekly_pay} this week."


?>