<?php
$servername = "piyush.com";
$usernme = "root";
$passwrd = "Piyush@555";
$dbname="resume";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $passward=$_POST['passward'];



// // Create connection
 $conn = new mysqli($servername, $usernme, $passwrd, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

$sql = "SELECT username, passward FROM login WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     //$row["passward"]
     if($passward==$row["passward"]){
        echo "success login";
        echo $row["passward"];
     }
     else{
        echo "failed";
        echo $row["passward"];
        echo $username;
        echo $passward;
         }

  }
} else {
  echo "0 results";
}
$conn->close();

}
}

?>