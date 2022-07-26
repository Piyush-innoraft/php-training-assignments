

 <?php
if(!empty($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname']; 
    $number=$_POST['number'];
    $email=$_POST['email'];
    $image1="uploads/yoga.jpg";
  require("fpdf/fpdf.php");
  $pdf= new FPDF();
  $pdf->AddPage();
  $pdf->SetFont("Arial","",12);
  $pdf->Cell(0,10,"Registration details",1,1,"C");//width,height,text,border,nextline,center
  $pdf->Cell(45,10,$fname,1,0);
  $pdf->Cell(45,10,$lname,1,0);  
  $pdf->Cell(45,10,$number,1,0);
  $pdf->Cell(0,10,$email,1,1); 
  $pdf->Cell(0,20,"",0,1,"C");
  $pdf->Cell(0,10,"Scorecard",0,1,"L");
  $no_of_subjects = str_word_count($_POST["txt"]);
  $arr=(explode("\n",$_POST["txt"]));  
  $pdf->Cell(40,10,"Subjects",1,0,"C");
  for($i=0; $i<  $no_of_subjects;$i++)
  {
    $arr1=(explode("|",$arr[$i]));
    $pdf->Cell(40,10,$arr1[0],1,0);
  }
                   $arr2=(explode("\n",$_POST["txt"])); 
                 

                   $pdf->Cell(0,10,"",0,1,"C");
                   $pdf->Cell(40,10,"Marks",1,0 ,"C");
                   for($i=0; $i<  $no_of_subjects;$i++)
                   {
                    $arr3=(explode("|",$arr2[$i]));

                   


                   if($arr3[1]>100){

                    
                   }
                   else{         
                
                  
                   
                   $pdf->Cell(40,10,$arr3[1],1,0);
                   
                  
                }
                  
                   }

            
                  
                   

           
           
               
                   
                   

                

            
                    

       
        
    

        
       



  
 


  //$pdf->Image($image1, 5, $pdf->GetY(), 33.78);
  $pdf->Cell(0,20,"",0,1,"C");

  $pdf->Cell(0,20,"UPLOADED IMAGE",1,1,"C");
  $pdf->Image($image1,0,120);




$file=time(). '.pdf';
$pdf->output($file,'D');
}

?> 



<body>

<div>
<?php
$nameErr="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      echo "First Name is required";
      echo "<br>";
    } else {
      $fname = $_POST["fname"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
        echo "Only letters and white space allowed";
        echo "<br>";
      }else{
        echo "hello";
        echo " ";
        print_r($fname);
      }
      
    }
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lname"])) {
    echo "Last Name is required";
    echo "<br>";
  } else {
    $lname = $_POST["lname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      echo "Only letters and white space allowed";
      echo "<br>";
    }
    else{
        echo " ";
        print_r($lname);
    }
    
  }
}
?>

</div>

<div>
<?php

if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    


    $value = move_uploaded_file($file_tmp, "images/".$file_name);
    
    

    $image=$_FILES['image']['name']; /* Displaying Image*/
      $img="uploads/".$image;
      // echo'<img src="'.$img.'">';
      // echo "<br>";
}

?>
</div>

<div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $no_of_subjects = str_word_count($_POST["txt"]);
        $arr=(explode("\n",$_POST["txt"]));  
        
        echo "<table border='1'>";
           
                
 
               
                 

                    echo "<tr>";
                   for($i=0; $i<  $no_of_subjects;$i++)
                   {
                    $arr1=(explode("|",$arr[$i]));


                   
                
                   echo "<td>";
                   
                   
                   echo $arr1[0];
                   echo "</td>";
                  
                   }

                   echo "</tr>";
                   
                   $arr2=(explode("\n",$_POST["txt"])); 
                 

                   echo "<tr>";
                   for($i=0; $i<  $no_of_subjects;$i++)
                   {
                    $arr3=(explode("|",$arr2[$i]));


                   
                
                   echo "<td>";
                   
                   
                   echo $arr3[1];
                   echo "</td>";
                  
                   }

                   echo "</tr>";
            echo "</table";
            echo "<br>";
    }
    ?>
    </div>
    <div>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["number"])) {
      echo "Number is required";
      echo "<br>";
    } else {
      $number = $_POST["number"];
      
      if (!preg_match("/^[+0-9 ]*$/",$number)) {
        echo "Only numbers and   + allowed";
        echo "<br>";
      }
      else{
          echo " ";
          print_r($number);
      }
      
    }
  }

    ?>


</div>

<div>
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
echo $response;
}
?>
</div>

