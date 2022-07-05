<?php
if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];


    $value = move_uploaded_file($file_tmp, "uploads/".$file_name);
    

    $image=$_FILES['image']['name']; /* Displaying Image*/
      $img="uploads/".$image;
      echo'<img src="'.$img.'">';
}
?>
<html>
<body>



<
</form>

</body>
</html>