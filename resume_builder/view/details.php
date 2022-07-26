<?php
    require("./fpdf/fpdf.php");
    $image1="fcd";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['submit'])){
            if(isset($_FILES['image'])){
                $file_name=$_FILES['image']['name'];
                $file_size=$_FILES['image']['size'];
                $file_tmp=$_FILES['image']['tmp_name'];
                $file_type=$_FILES['image']['type'];
                $value = move_uploaded_file($file_tmp, "./uploads/".$file_name);
                $image=$file_name; /* Displaying Image*/
                $img="./uploads/"."$image";
                $GLOBALS['image1']=$img;
            }
            $sname= $_COOKIE['sname'];
            $cname= $_COOKIE['cname'];
            $pname= $_COOKIE['pname'];
         
       
            $pdf= new FPDF();
            $pdf->AddPage();
            $pdf->SetFont("Arial","",12);
            $pdf->Image($image1,140,0,"70","50");
            $pdf->Cell(50,10,"Name",0,0,"L");
            $pdf->Cell(60,10,$_POST['fullname'],0,1,"L");//width,height,text,border,nextline,center
            $pdf->Cell(50,10,"DOB",0,0,"L");
            $pdf->Cell(60,10,$_POST['dob'],0,1,"L");
            $pdf->Cell(50,10,"EMAIL",0,0,"L");
            $pdf->Cell(60,10,$_POST['email'],0,1,"L");
            $pdf->Cell(50,10,"LINKEDIN PROFILE URL",0,0,"L");
            $pdf->Cell(60,10,$_POST['linkedin'],0,1,"L");
            if($sname>0)
            {
                $pdf->Cell(0,10,"SCHOOL DETAILS",0,1,"C");
                $pdf->Cell(50,10,"NAME",1,0,"L");
                $pdf->Cell(50,10,"STREAM",1,0,"L");
                $pdf->Cell(50,10,"PASSING YEAR",1,0,"L");
                $pdf->Cell(50,10,"MARKS",1,1,"L");
            }
            for($i=1;$i<=$sname;$i++){
          
                $pdf->Cell(50,10,$_POST['name'. $i],1,0,"L");
                $pdf->Cell(50,10,$_POST['stream'. $i],1,0,"L");
                $pdf->Cell(50,10,$_POST['pass'. $i],1,0,"L");
                $pdf->Cell(50,10,$_POST['marks'. $i],1,1,"L");
                }
                if($cname>0)
                {
                    $pdf->Cell(0,10,"COLLEGE DETAILS",0,1,"C");
                    $pdf->Cell(50,10,"NAME",1,0,"L");
                    $pdf->Cell(50,10,"STREAM",1,0,"L");
                    $pdf->Cell(50,10,"PASSING YEAR",1,0,"L");
                    $pdf->Cell(50,10,"MARKS",1,1,"L");
                }
                for($i=1;$i<=$sname;$i++){
                  
                    $pdf->Cell(50,10,$_POST['cname'. $i],1,0,"L");
                    $pdf->Cell(50,10,$_POST['cstream'. $i],1,0,"L");
                    $pdf->Cell(50,10,$_POST['cpass'. $i],1,0,"L");
                    $pdf->Cell(50,10,$_POST['cmarks'. $i],1,1,"L");
                    }
                    if($pname>0)
                    {
                        $pdf->Cell(0,10,"PROJECT DETAILS",0,1,"C");
                        $pdf->Cell(50,10,"NAME",1,0,"L");
                        $pdf->Cell(50,10,"DESCRIPTION",1,0,"L");
                        $pdf->Cell(50,10,"COMPLETION YEAR",1,1,"L");
                    }
                    for($i=1;$i<=$sname;$i++){
                    
                        $pdf->Cell(50,10,$_POST['pname'. $i],1,0,"L");
                        $pdf->Cell(50,10,$_POST['pdes'. $i],1,0,"L");
                        $pdf->Cell(50,10,$_POST['pcomp'. $i],1,1,"L");
                        }

           
            $file = time(). '.pdf';
            $pdf->output($file,'D');    
    }
}
?>
<html>
    <head>
        <style>
            .lbl{
                width:20vw;
            }
            .content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 500px;
                height: 200px;
                text-align: center;
                background-color: #e8eae6;
                box-sizing: border-box;
                padding: 10px;
                z-index: 100;
                display: none;
                /*to hide popup initially*/
            }
          
            .close-btn 
            {
                position: absolute;
                right: 20px;
                top: 15px;
                background-color: black;
                color: white;
                border-radius: 50%;
                padding: 4px;
            }

            .popup .popuptext 
            {
                visibility: hidden;
                width: 800px;
                height:470px;
                background-color: #555;
                color: #fff;
                text-align: center;
                position: absolute;
                z-index: 1;
                top: 0;
                left: 0;
                opacity: 0.8; 
            }
            .popup .show {
            visibility: visible;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <div class="container-fluid text-center bg-danger">
            <h1> Enter your details below </h1>
        </div>
        <div class="container-fluid bg-success">
            <form method="post" action="/resume_builder/view/details.php"enctype="multipart/form-data"><label class="lbl">Enter your name:</label>
                <input type="text" name="fullname"class="mt-3"placeholder="Enter your name"><br>
                <label class="lbl">Enter your DOB:</label>
                <input type="text" class="mt-3"placeholder="dd-mm-yyyy"name="dob"><br>
                <label class="lbl">Enter your User image:</label>
                <input type="file" class="mt-3"name="image"placeholder="Enter your User image"pattern=^[a-zA-Z]*$><br>
                <label class="lbl">Enter your Email:</label>
                <input type="text" name="email" class="mt-3"placeholder="Enter your Email"><br>
                <label class="lbl">Enter your linkedin prifile link:</label>
                <input type="text"name="linkedin" class="mt-3"placeholder="Enter your linkedin profile link"><br>
                <input type="button" id="add-field" value="Add school fields">
                <input type="button" id="add-fields" value="Add College Fields">
                <input type="button" id="add-fieldss" value="Add Project Fields">
                <div id="some_div">
                </div>
                <input type="submit" value="submit" name="submit">
            </form> 
        </div>
        <script type='text/javascript'>      
            $(document).ready(function() {
                $("#add-field").click(function() {
                    $("#some_div").append('<div class="input-block"><h1>Enter School details</h1><label class="lbl">Enter your School name</label><input type="text" class="nam"><input type="button" class="remove-field"name="" value="-"></div>');
                    $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Stream</label><input type="text" class="stream"><input type="button" class="remove-field" value="-"></div>');
                    $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Passing year</label><input type="text" class="pass"><input type="button" class="remove-field" value="-"></div>');
                    $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Marks</label><input type="text" class="marks"><input type="button" class="remove-field" value="-"><input type="submit" value="save" name="school"></div>');
                    var name=0;
                    $(".nam").each(function(){
                        name=name+1;
                        document.cookie = "sname =" + name;
                        $(this).attr("name", "name" + name)
                    });
                    var stream=0;
                    $(".stream").each(function(){
                        stream=stream+1;
                        document.cookie = "sstream =" + stream;
                        $(this).attr("name", "stream" + stream)
                    });
                    var pass=0;
                    $(".pass").each(function(){
                        pass=pass+1;
                        console.log(pass);
                        document.cookie = "spass =" + pass;
                        $(this).attr("name", "pass" + pass)
                    });
                    var marks=0;
                    $(".marks").each(function(){
                        marks=marks+1;
                        document.cookie = "smarks =" + marks;
                        $(this).attr("name", "marks" + marks)});
                    });
                    $("#add-fields").click(function() {
                        $("#some_div").append('<div class="input-block"><h1>Enter College details</h1><label class="lbl">Enter your College name</label><input type="text"class="cname"><input type="button" class="remove-field" value="-"></div>');
                    $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Stream</label><input type="text" class="cstream"><input type="button" class="remove-field" value="-"></div>');
                    $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Passing year</label><input type="text" class="cpass"><input type="button" class="remove-field" value="-"></div>');
                    $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Marks</label><input type="text"class="cmarks"><input type="button" class="remove-field" value="-"><input type="submit" value="save" name="college"></div>');
                    var cname=0;
                    $(".cname").each(function(){
                        cname=cname+1;
                        document.cookie = "cname =" + cname;
                        $(this).attr("name", "cname" + cname)
                    });
                    var cstream=0;
                    $(".cstream").each(function(){
                        cstream=cstream+1;
                        document.cookie = "cstream =" + cstream;
                        $(this).attr("name", "cstream" + cstream)
                    });
                    var cpass=0;
                    $(".cpass").each(function(){
                        cpass=cpass+1;
                        document.cookie = "cpass =" + cpass;
                        $(this).attr("name", "cpass" + cpass)
                    });
                    var cmarks=0;
                        $(".cmarks").each(function(){
                        cmarks=cmarks+1;
                        document.cookie = "cmarks =" + cmarks;
                        $(this).attr("name", "cmarks" + cmarks)});
                    });
                    $("#add-fieldss").click(function() {
                        $("#some_div").append('<div class="input-block"><h1>Enter Project details</h1><label class="lbl">Enter your Project name</label><input type="text"class="pname"><input type="button" class="remove-field" value="-"></div>');
                        $("#some_div").append('<div class="input-block"><label class="lbl">Enter your description</label><input type="text" class="pdes"><input type="button" class="remove-field" value="-"></div>');
                        $("#some_div").append('<div class="input-block"><label class="lbl">Enter your Completion year</label><input type="text" class="pcomp"><input type="button" class="remove-field" value="-"><input type="submit" value="save" name="project"></div>');
                        var pname=0;
                        $(".pname").each(function(){
                        pname=pname+1;
                        document.cookie = "pname =" + pname;
                        $(this).attr("name", "pname" + pname)
                    });
                    var pdes=0;
                    $(".pdes").each(function(){
                        pdes=pdes+1;
                        document.cookie = "pdes =" + pdes;
                        $(this).attr("name", "pdes" + pdes)
                    });
                    var pcomp=0;
                    $(".pcomp").each(function(){
                        pcomp=pcomp+1;
                        document.cookie = "pcomp =" + pcomp;
                        $(this).attr("name", "pcomp" + pcomp)
                    });
                });
                $(document).on("click", ".remove-field", function() {
                    $(this).closest(".input-block").remove();
                });
            });
        </script>
    </body>
</html>