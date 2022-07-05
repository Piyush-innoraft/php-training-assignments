<?php
ini_set("display_errors","1");
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

$email=$_POST['email'];


$mpdf= new \Mpdf\Mpdf();//instance of mpdf class

//create our pdf

$data="";

$data= "<h1>Your details</h1>";

$data= "<strong>First Name</strong>  = .$email ";

//write pdf

$mpdf->WriteHTML($data);


//output to browser

$mpdf->Output('myfile.pdf', 'D');





?>