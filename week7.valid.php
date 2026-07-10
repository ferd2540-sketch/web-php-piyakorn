<?php 
 $mail = "rqwrq954";
 $age = "EZ NOOB"; //หรือ5.59

 if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
     echo "อีเมลถูกต้อง". "<br>";
 } else {
     echo "อีเมลไม่ถูกต้อง". "<br>";
 }
  if (filter_var($age, FILTER_VALIDATE_INT)) {
     echo "อายุถูกต้อง". "<br>";
    } else {
     echo "อายุไม่ถูกต้อง". "<br>";
    }
?>