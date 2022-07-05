<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $no_of_subjects = str_word_count($_POST["txt"]);
        echo $no_of_subjects;
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

                    if (!preg_match("/^[+0-9 ]*$/",$arr[3])) {
                        echo "Only numbers allowed in marks";
                        echo "<br>";
                      }


                   if($arr3[1]>100){

                    echo "please enter valid marks $arr3[1] ";
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
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $no_of_subjects = str_word_count($_POST["txt"]);
        echo $no_of_subjects;
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
        

       
        
    

        
       



    }





    ?>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $no_of_subjects = str_word_count($_POST["txt"]);
        echo $no_of_subjects;
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
        

       
        
    

        
       



    }





    ?>
