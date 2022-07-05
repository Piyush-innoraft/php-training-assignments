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
set_url("http://piyush.com?q=5");
?>
<htmL>
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
    <div class="text-center">


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    
    exit("invalid format");
    
}


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.apilayer.com/email_verification/check?email={$email}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/plain",
    "apikey: 2JRMbOUDExLkQwebYBeHGT36oeN9xyfW"
  ),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET"
));

$response = curl_exec($curl);

curl_close($curl);
 // Decode JSON response:
 $validationResult = json_decode($response, true);

 
 
if($validationResult['smtp_check']=='true'){
  echo $validationResult['email'];
  echo " " ;
  echo "is valid email";
}
else{
  echo $validationResult['email'];
  echo " ";
  echo "is not valid email id";
}
}
?>

</div>

  <div class="container bg-light "id ="center">
      <div class="row ">
        <div class="col-12 text-center">

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="email">Email:</label>
      <input type="email"  name="email"
      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> 


      <input type="submit" value="submit">
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
</div>
</div>
</div>
</div>
</div>
  </body>
</htmL>