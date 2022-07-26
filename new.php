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
  set_url("http://piyush.com?q=3");
?>

<html>
  <head>
  <style>
      .error {
          color: #FF0000;
      }

      .parent {
          display: flex;
      }

      .child {
          margin: 10px;
          padding: 10px;



      }

      a {
          text-decoration: none;
      }

      #ht {
        height: 100%;
          
      }

      #center {
          transform: translateY(-50%);
          position: relative;
          top: 50%;


      }

      
      tr,td {
          border: 1px solid black !important;
      }

     
   
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    
  </head>
  <body>
  <div class=""id="hy">
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $no_of_subjects = str_word_count($_POST["txt"]);
            $arr=(explode("\n",$_POST["txt"]));  
            echo "<table border='1' >";
            echo "<tr>";
            for ($i=0; $i<  $no_of_subjects;$i++) {
              $arr1=(explode("|",$arr[$i]));
              echo "<td>";
              if (!preg_match("/^[a-zA-Z ]*$/",$arr1[0])) {
                echo "Only alphabtes allowed in Subjects";
                echo "<br>";
              }
              echo $arr1[0];
              echo "</td>";
            }
            echo "</tr>";
            $arr2=(explode("\n",$_POST["txt"])); 
            echo "<tr>";
            for($i=0; $i<  $no_of_subjects;$i++) {
              $arr3=(explode("|",$arr2[$i]));
              if (!preg_match("/^[+0-9 ]*$/",$arr[3])) {
                echo "Only numbers allowed in marks";
                echo "<br>";
              }
              if($arr3[1]>100){
               echo "please enter valid marks $arr3[1]";
              }
              else{
                echo "<td>";
                echo $arr3[1];
                echo "</td>";
              }
            }
            echo "</tr>";
            echo "</table";
          }
        ?>
      </div>
    <div class="container-fluid bg-secondary" id="ht">
      <div class="container bg-light" id="center">
        <p>hu</p>
        <div class="row ">
          <div class="col-12 text-center">
            <form method="post" class="mt-3" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <textarea rows="4" cols="50" id="txt" placeholder="enter"name="txt" pattern="^[a-zA-Z]*$"></textarea>
              <button type="submit">Submit</button>
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
      </div>
  
    </div>
  </body>
</html>