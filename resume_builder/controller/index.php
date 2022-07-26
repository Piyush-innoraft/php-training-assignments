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
}
?>