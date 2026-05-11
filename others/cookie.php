<?php

  setcookie("fav_food", "pizza", time()+ (86400 * 3) ,"/");
   setcookie("fav_drink", "coffee", time()+ (86400 * 3) ,"/");
   setcookie("fav_desert", "gajar_ko_haluwa", time()+ (86400 * 3) ,"/");


   foreach($_COOKIE as $key => $value){
   	  echo "{$key} = {$value} <br> " ;
   }




?>
