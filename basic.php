<?php
session_start();

if($_SESSION['uname']!='admin'&&$_SESSION['psw']!='admin')
{
  echo "please log in first";
  header("Location: phploginform.php");
  
}
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://piyush.com?q=1");

?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
.error {color: #FF0000;}

.parent{
  display: flex;
  color:black;
}
a{
  color:black;
}
.child{
  margin:10px;
  padding:5px 10px;
  
  background-color:red;
  color:black;



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
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script>
$(document).ready(function(){
  $(".txt").mouseleave(function(){
    $(".chng").change();
  });
  
});
</script>

    </head>

<body>





  <div class="container-fluid bg-secondary" id ="ht">
  <div class="text-center text-light">

<?php



$nameErr="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      echo "Name is required";
    } else {
      $fname = $_POST["fname"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
       echo  "Only letters and white space allowed";
      }
      else
      {
        echo "hello $fname";
      }
      
    }
  }
  ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lname"])) {
    echo "Name is required";
  } else {
    $lname = $_POST["lname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      echo "Only letters and white space allowed";
    }
    else{
      echo " ";
      echo $lname;
    }
    
  }
}
?>
</div>
    <div class="container bg-light "id ="center">
      <div class="row ">
        <div class="col-12 text-center">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"> 
            First name: <input type="text"class="txt-black mt-3 mb-3" name="fname" pattern="^[a-zA-Z]*$" title="enter valid first name">
            <span class="error">* <?php echo $fErr;?></span><br>
            Last name: <input type="text" class="txt mb-3" name="lname" title="enter valid first name" pattern="^[a-zA-z]*$">
            <span class="error">* <?php echo $lerr;?></span><br>
            Full name: <input type="text" name="fullname" class="chng mb-3" onchange="fullname.value=fname.value+' ' +lname.value" disabled > <br>
            <div class="text-center">
              <input type="submit" value="submit" class="bg-success">
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="parent text-centers">
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
</html>