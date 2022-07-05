<?php
$nameErr="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      echo "First Name is required";
    } else {
      $fname = $_POST["fname"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
        echo "Only letters and white space allowed";
      }else{
        print_r($fname);
      }
      
    }
  }
  ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lname"])) {
    echo "Last Name is required";
  } else {
    $lname = $_POST["lname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      echo "Only letters and white space allowed";
    }
    else{
        print_r($lname);
    }
    
  }
}
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];


    $value = move_uploaded_file($file_tmp, "uploads/".$file_name);
    var_dump($value);
    

    $image=$_FILES['image']['name']; /* Displaying Image*/
      $img="uploads/".$image;
      echo'<img src="'.$img.'">';
}
}
