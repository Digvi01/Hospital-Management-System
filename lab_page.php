<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: lablog.php");
    exit;
}
?>



<?php


$conn = mysqli_connect('localhost', 'root' ,'', 'HMS');
    
            $query = "select * from lab_logins";           
            $run = mysqli_query($conn,$query);
            $num = mysqli_num_rows($run);

            $query1 = "select * from lab_reports";
            $run1 = mysqli_query($conn,$query1);
            $num1 = mysqli_num_rows($run1);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab's Page</title>
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

            <h4><b>Lab Records</b></h4>

        </div>

    </nav>

<center>
    <div class="mid-sec">
        <h2 style="margin-bottom:2%;"><b>Upload Lab Reports</b></h2>
        <div class="line_"></div>
        
        <?php
            include 'insertLab_rep.php';
        ?> 
        
        </div>

        </center>

    <!-- main  -->

    
    











        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>