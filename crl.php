<html>
    <head>
</head>
<body>


<?php


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
 // Decode JSON response:
 $validationResult = json_decode($response, true);

 
 
if($validationResult['smtp_check']=='true'){
  echo $validationResult['email'];
  echo " " ;
  echo "is valid email";
}
else{
  echo $validationResult['email'];
  echo " ";
  echo "is not valid email id";
}
?>

 


// // set API Access Key
// // set API Access Key
// $access_key = '2JRMbOUDExLkQwebYBeHGT36oeN9xyfW';

// // set email address


// // Initialize CURL:
// $url='https://api.apilayer.com/email_verification/piyushc9r36@gmil.com';
// $ch = curl_init(); 
// curl_setopt($ch, CURLOPT_URL, $url);

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



// curl_setopt($ch, CURLINFO_HEADER_OUT, true);

// curl_setopt($ch, CURLOPT_HTTPHEADER,array(
//     'apikey:JRMbOUDExLkQwebYBeHGT36oeN9xyfW'
// ));






//  // Store the data:
//  $result = curl_exec($ch);
  
//  curl_close($ch);

//  // Decode JSON response:
//  $validationResult = json_decode($result, true);
//  print_r($validationResult);
//  print_r(validationResult['smtp_check']);
 
//   if($validationResult['smtp_check']==true)
//         echo "valid";


//  // Access and use your preferred validation result objects
//  $validationResult['format_valid'];
//   $validationResult['smtp_check'];
//  $validationResult['score'];







 


</body>
</html>