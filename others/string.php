<?php
  
  // $username = "Kanchan Dhamala";
   $username= array("Kanchan", "The", "Coder");
   $phone = "98-022-000";

   // $username = strtolower($username);
   // $username = strtoupper($username);
   // $username = trim($username);
   // $phone = str_replace("-", "", $phone);
   // $username = strrev($username);
   // $username = str_shuffle($username);
   // $index =strpos($phone, "-");
   // $fullname = explode(" ", $username);
    $fullname = implode("-", $username);








   echo $fullname;
   // echo $index;

?>