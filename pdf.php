<?php





if(!empty($_POST['submit'])){
$name=$_POST['name'];



require("fpdf/fpdf.php");

$pdf= new FPDF();

$pdf->AddPage();

$pdf->SetFont("Arial","",12);
$pdf->Cell(0,10,"Registration details",1,1,"C");//width,height,text,border,nextline,center
$pdf->Cell(45,10,$name,1,0);


$file=time(). '.pdf';



$pdf->output($file,'D');
}

?>