<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["number"])) {
      echo "Number is required";
      echo "<br>";
    } else {
      $number = $_POST["number"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[+0-9 ]*$/",$number)) {
        echo "Only numbers and   + allowed";
        echo "<br>";
      }
      else{
          echo " ";
          print_r($number);
      }
      
    }
  }

    ?>
