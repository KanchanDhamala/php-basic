<?php

  $password= "bacchu123";
  $hash= password_hash($password, PASSWORD_DEFAULT );

  echo "{$hash} . <br>" ;

   if (password_verify("kanchan123", $hash)) {
   	   echo "You are loggedin";
   } else {
   	  echo"Please enter the correct password" ;
   }
   

?>