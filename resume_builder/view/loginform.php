<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>


form {
  border: 3px solid #f1f1f1;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


.button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


.button:hover {
  opacity: 0.8;
}








.container {
  padding: 16px;
}


span.psw {
  float: right;
  padding-top: 16px;
}


        </style>
</head>
<body>
<form action="" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

    <label for="passsward"><b>Password</b></label>
    <input type="password" placeholder="Enter Passward" name="passward" >

    <input type="submit" name="login" class="button" value="login">
    <br><br>
    <input type="text"  value="IF YOU DON'T HAVE ACCCOUNT, PLEASE CLICK ON REGISTER BUTTON" disabled>
    <input type="submit" name="registe" class="button" value="Register">
    <input type="submit" name="linkedin" class="button" value="Login in with linkedin">
  </div>

  
  </div>
</form>
<?php
session_start();
if(isset($_SESSION['user'])){
  header("Location: /resume_builder/view/details.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['login'])){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['passward']=$_POST['passward'];
    header("Location: /resume_builder/model/logincheck.php");
    }
    if(isset($_POST['registe'])){
      header("Location: /resume_builder/view/register.php");
    }
    if(isset($_POST['linkedin'])){
      header('Location: https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=77x887vm17xn2e&redirect_uri=http://piyush.com/test.php&state=foobar&scope=r_liteprofile%20r_emailaddress');
    }


// if(isset($_POST['registe'])){
//     header("Location: /resume_builder/view/register.php");
// }
}
?>

</body>
</html>