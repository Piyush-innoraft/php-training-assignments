<html>
    <head>
    <style>
.error {color: #FF0000;}
</style>
    </head>
<body>


<form method="post" action="submit.php" enctype="multipart/form-data"> 
First name: <input type="text" name="fname" pattern="^[a-zA-Z]*$" title="enter valid first name">
  <span class="error">* <?php echo $fErr;?></span><br>
    Last name: <input type="text" name="lname" title="enter valid first name" pattern="^[a-zA-z]*$">
    <span class="error">* <?php echo $lerr;?></span><br>
    Full name: <input type="text" name="fullname" value="<?php echo $_POST['fname']." " .$_POST['lname'] ?>"
     disabled > <br>
     
     Select image to upload:
  <input type="file" name='image'>
  <input type="submit">

</form>

  
   

</body>
</html>