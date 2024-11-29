


<?php 
include 'connect.php';
 
$query = "select * from cash_log";           
            $run = mysqli_query($conn,$query);
            $num = mysqli_num_rows($run);
            
if (isset($_POST["submit9"]))
 {
     #retrieve file title
        $title = $_POST["title"];
        $amt = $_POST["amt"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'C:\xampp\htdocs\DBMS\Bill_Receipt';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into bill_sec VALUES('','$title','$pname','$amt')";
 
    if(mysqli_query($conn,$sql)){
 
        echo "
        <script>'File Sucessfully uploaded'</script> 
     ";
    
    

    }
    else{
        echo "Error";
    }
}
 
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier's Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="doc_page.css">
    <link rel="stylesheet" href="lab_page.css">

    
</head>

<body>
    <nav>
        <center>
            <div class="head1">
                <h1><b>Hospital Management System</b></h1>
            </div>
        </center>

        <div class="head2">

            <h4><b>Keep The Finances Well_Maintained</b></h4>

        </div>

    </nav>

    <center>
    <div class="mid-sec">
        <h2 style="margin-bottom:2%;"><b>Bill Here</b></h2>
        <div class="line_"></div>
        
    
<form method="post" enctype="multipart/form-data" style="display:block;">
    <label style="margin-bottom:2%;margin-top:3%;">Name ( With Age ) :</label>
    <input type="text" name="title">
    <br>

    <input type="File" name="file" style="margin-left:10%; margin-top:2%; margin-bottom:2%;">
    <br>

    <label style="margin-bottom:2%;margin-top:3%;">Amount ( in Rs/- ) :</label>
    <input type="number" name="amt">
    <br>
    
    <input type="submit" name="submit9" style="margin-top:2%; border:2px solid black; border-radius:10px; padding:5px;">
 
 
</form>

        
        </div>

        </center>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>