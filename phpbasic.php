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
set_url("http://piyush.com?q=6");
?>




<html>
    <head>
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
<body>
<div class="container-fluid bg-secondary" id ="ht">
  

  <div class="container bg-light "id ="center">

  <div class="row ">
        <div class="col-12 text-center">


<form method="post" action="phpsubmit.php" class="mt-3" enctype="multipart/form-data"> 
First name: <input type="text"class="txt mt-3" name="fname" pattern="^[a-zA-Z]*$" title="enter valid first name">
  <span class="error">* <?php echo $fErr;?></span><br>
    Last name: <input type="text" class="txt mt-3" name="lname" title="enter valid first name" pattern="^[a-zA-z]*$">
    <span class="error">* <?php echo $lerr;?></span><br>
    Full name: <input type="text" name="fullname" class="chng mt-3" onchange="fullname.value=fname.value+' ' +lname.value"
     disabled > <br>
     Select image to upload:
  <input type="file" name='image' class="mt-3 mb-3"><br>
  Enter Subject and marks<br>
   <textarea rows="4" cols="50" name="txt" class="mt-3"></textarea><br>
   Enter your number:
   <input type="text"  name="number" pattern="^[+]91[0-9]{10}" class="mt-3"><br>
   Enter your email:
   <input type="text" name='email' class="mt-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

    <br>
   <input type="submit" class="mt-3"name='submit'>
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

  
   

</body>
</html>