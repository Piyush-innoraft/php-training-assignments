<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="email">
      <input type="submit" value="submit" name="submit">
   </form>
   <?php
 
   $em="piyushc9r36@gmail.com";
   $pass="Piyush@123";

//   require("./vendor/phpmailer/phpmailer/src/PHPMailer.php");
//   require("./vendor/phpmailer/phpmailer/src/SMTP.php");
//   require("./vendor/phpmailer/phpmailer/src/Exception.php");
  require 'vendor/autoload.php';
   if(isset($_POST['submit'])){
     
     
      $mail = new PHPMailer(true);
  
try {
   //Server settings
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
   $mail->isSMTP();                                            //Send using SMTP
   $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
   $mail->Username   = 'piyushc9r36@gmail.com';                     //SMTP username
   $mail->Password   = 'loxhlkdauyqpewpb';  
   $mail->SMTPSecure = 'tls'  ;                           //SMTP password
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
   $mail->Port       = 587;     
                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                          
   //Recipients
   $mail->setFrom('piyushc9r36@gmail.com', 'Mailer');
   $mail->addAddress($_POST['email'], 'Joe User');     //Add a recipient
               //Name is optional
   
  //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
   ?>
</body>
</html>