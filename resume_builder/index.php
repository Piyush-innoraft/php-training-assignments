<!-- <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       

    </head>
    <body>
php
  // require '/var/www/abc~/vendor/autoload.php';
  // use GuzzleHttp\Client;
  // use GuzzleHttp\Psr7\Request;
  // require '/var/www/abc~/myclass.php';
  
  
  
  // header('Location: https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=77x887vm17xn2e&redirect_uri=http://piyush.com&state=foobar&scope=r_liteprofile%20r_emailaddress');
  
</body>
</html> -->

<?php 



require "/var/www/abc~/resume_builder/vendor/autoload.php";
use app\core\Application;
$app=new Application();
$app->router->get('/login', function(){
  header("Location: ./view/loginform.php");
});
$app->router->get('/home', function(){
  header("Location: ./view/home.php");
});
$app->router->get('/register', function(){
  header("Location: ./view/register.php");
});
$app->run();

?>