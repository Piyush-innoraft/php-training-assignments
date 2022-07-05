

<?php
if ($_GET['q']==1){
  header("Location: basic.php");
}
if ($_GET['q']==2){
  header("Location: file.php");
}
if ($_GET['q']==3){
  header("Location: new.php");
}
if ($_GET['q']==4){
  header("Location: upload.php");
}
if ($_GET['q']==5){
  header("Location: email.php");
}
if ($_GET['q']==6){
  header("Location: phpbasic.php");
}
if($_GET['q']!=1 && $_GET['q']!=2 && $_GET['q']!=3 && $_GET['q']!=4 && $_GET['q']!=5 && $_GET['q']!=6){
  header("Location: phploginform.php");
}

?>
