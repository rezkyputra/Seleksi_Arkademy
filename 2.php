<?php
     function checkUsername($username) {
          return preg_match("/^x+[A-Z]+x$/",$username) ;
     }
     if (checkUsername("xHALOx")) {
         echo "True" ;
     } else {
         echo "False" ;
     }
     
     function checkPassword($password) {
         return preg_match("/[a-z 0-9 !@#$%^&*(),.?-_][A-Z]{3}/",$password) ;
     }
     if (checkPassword("kick2XXX!")) {
         echo "True";
     } else{
         echo "False";
     }
?>
