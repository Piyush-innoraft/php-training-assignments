<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            .titl{
                color:orange;

            }
            #para{
                color:blue !important;
                
            }
            ul {
              list-style-type: none;
              font-size: 20px;;
            
            }
            ul li::before {
  content: "\2022";
  color: orange;
  font-weight: bold;
  display: inline-block; 
  width: 1em;
  margin-left: -1em;
  font-size: 30px;;
            }
            .imag{   
              position: relative;
              left:50%;
              transform: translateX(-50%);
              width:100%;
            }
            .fir{
              float:right;
              border: 2px solid black;
            }
            .sec{
              float:left;
            }
            .butto{
              
              padding:10px 20px;
              border:1px solid orange;
            }
            a{
              text-decoration: none;
              color:black;
            }



        
           
        </style>

    </head>
    <body>
<?php
  require './vendor/autoload.php';
  use GuzzleHttp\Client;
  use GuzzleHttp\Psr7\Request;
  require '/var/www/abc~/myclass.php';
  
  $host='https://ir-dev-d9.innoraft-sites.com';
  for($i=0;$i<=1;$i++){
  $obj=new assign1();
  $res=$obj->apicall('GET','https://ir-dev-d9.innoraft-sites.com/jsonapi/node/services');
  $json_objekat = $obj->decode($res);
  $title=($json_objekat['data'][$i]['attributes']['title']); 
  $text=$json_objekat['data'][$i]['attributes']['field_services']['value'];
  trim($text);
  $btn=$json_objekat['data'][$i]['attributes']['path']['alias'];
  $btn = "$host" . "$btn";
  $t=(explode("<ul>",$text)); 
  $lii=explode("<li>",$t[1]); 
  trim($lii[$j]);
  $img_url=$json_objekat['data'][$i]['relationships']['field_image']['links']['related']['href'];
  $image = new assign1();
  $resimg = $image->apicall('GET',$img_url);
  $json_image_object = $image->decode($resimg);
  $url=( $json_image_object['data']['attributes']['uri']['url']);
  $url = "$host" . "$url";
  echo "<div class='container p-5'>";
    echo "<div class='row'>";
      if($i % 2==0){
        echo "<div class='col-6'>";
          $obj->printtext($title,$t,$lii,$btn);
        echo "</div>";
        echo "<div class='col-6'>";
          $image->printimage($url);
        echo "</div>";
      }   
      else{
        echo "<div class='col-6'>";
          $image->printimage($url);
        echo "</div>";
        echo "<div class='col-6'>";
          $obj->printtext($title,$t,$lii,$btn);
        echo "</div>";
      }
    echo "</div>";
  echo "</div>";
}
?>
</body>
</html>