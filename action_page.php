<?php
session_start();
$_SESSION['uname']='null';
$_SESSION['psw']='null';

if(isset($_POST['login'])){

    $uname=$_POST['uname'];
    $psw=$_POST['psw'];
    if($uname=='admin'&& $psw=='admin'){
        $_SESSION['uname']='admin';
        $_SESSION['psw']='admin';
        echo "welcome";
    }
    else{
        echo "please enter correct username and password";;
    }

}
?>