<?php
session_start();
if($_SESSION['uname']!='admin')
{
  echo "please log in first";
  header("Location: phploginform.php");
  exit("please log in");
}
function set_url( $url )
{
    echo("<script>history.replaceState({},'','$url');</script>");
}
set_url("http://piyush.com?q=2");
?>
<html>
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

  #ht{
  height:100%;
  position:relative;
}
#center{
  transform: translateY(-50%);
  position: relative;
  top:50%;
}


a{
  text-decoration: none;
}

</style>
    </head>

    <body>
    <div class="container-fluid bg-secondary" id ="ht">

    <div class="container bg-light "id ="center">
      <div class="text-center mb-4">
      <?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];


    $value = move_uploaded_file($file_tmp, "images/".$file_name);
    

    $image=$file_name; /* Displaying Image*/
      $img="images/".$image;
      echo'<img src="'.$img.'">';
}
?>
</div>
    <div class="row ">
        <div class="col-12 text-center">


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-3"  method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name='image'><br>
  <input type="submit" class="mt-3">
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
