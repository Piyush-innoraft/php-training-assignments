<?php
session_start();
   $servername = "piyush.com";
   $usernme = "root";
   $passwrd = "Piyush@555";
   $dbname="resume";
   $username=$_SESSION['username'];
   $passward=$_SESSION['passward'];
  
  //var_dump($_SESSION['username']);
// // Create connection
 $conn = new mysqli($servername, $usernme, $passwrd, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$_SESSION['user']=$_SESSION['username'];


$sql = "SELECT username, passward FROM login WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     //$row["passward"]
     if($passward==$row["passward"]){
        echo "success login";
     }
     else{
        echo "<br>";
        echo "Invalid credentials";
         }

  }
} else {
  echo "Invalid credentials";
}
$conn->close();





?>