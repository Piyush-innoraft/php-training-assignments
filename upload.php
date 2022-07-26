<?php
session_start();
if($_SESSION['uname']!='admin')
{
  exit("please log in");
}
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://piyush.com/home");;
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
.error {color: #FF0000;}

.parent{
  display: flex;
}
.child{
  margin:10px;
  padding:10px;



}
a{
  text-decoration: none;
}
#ht{
  height:100%;
  position:relative;
}
#center{
  transform: translateY(-50%);
  position: relative;
  top:50%;
}

</style>


    </head>

    <body>

    <div class="container-fluid bg-secondary" id ="ht">

    <div class="container bg-light "id ="center">
      <div class="text-center">
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
</div>

    <div class="row ">
        <div class="col-12 text-center">
      
      
        
        <form action="" method="post" class="pt-3">
        Enter your number:
    <input type="text" id="num" name="number" pattern="^[+]91[0-9]{10}">
    <input type="submit" name="submit">
</form>
</div>
</div>
<div class="row">
        <div class="col-12">
<div class="parent">
  <div class="child">
  <a href="basic.php">1</a>
  </div>
  <div class="child">
  <a href="file.php">2</a>
  </div>
  <div class="child">
  <a href="new.php">3</a>
  </div>
  <div class="child">
  <a href="upload.php">4</a>
  </div>
  <div class="child">
  <a href="email.php">5</a>
  </div>
  <div class="child">
  <a href="phpbasic.php">6</a>
  </div>
  <div class="child">
    <a href="phplogout.php">Logout</a>
  </div>
</div>
</div>
</div>
</div>
</div>

    </body>

