<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: desklog.php");
    exit;
}
?>



<?php


$conn = mysqli_connect('localhost', 'root' ,'', 'HMS');
    
            $query = "select * from appointed_patients as a , doctors as b
                    where a.doc = b.doc_name;           
            ";
            $run = mysqli_query($conn,$query);
            $num = mysqli_num_rows($run);

            $query1 = "select * from lab_reports";
            $run1 = mysqli_query($conn,$query1);
            $num1 = mysqli_num_rows($run1);

require 'connect.php';

if(isset($_POST["submit0"]))
{  

    $query0 = 'truncate table appointed_patients';
    $run=mysqli_query($conn,$query0);

    header('location:index.php');


    if($run)
    {
    echo
    "
    <script> alert('Day Done'); </script>
    ";
    }
}

if(isset($_POST["submit1"]))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $doc = $_POST["doc"];
    $type = $_POST["type"];
    $gender = $_POST["gender"];
    $submiting= $_POST["added"];
   

    $query = "INSERT INTO patients VALUES('', '$name', '$age', '$doc', '$type' , '$gender', '$submiting')";
  $run =mysqli_query($conn,$query);

  $query2 = "INSERT INTO appointed_patients VALUES('', '$name', '$age', '$doc', '$type' , '$gender', '$submiting')";
  $run=mysqli_query($conn,$query2);

  header('location:desk_page.php');
if($run)
{
  "
  <script> alert('Appoiontment Successfull .'); </script>
  ";
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="doc_page.css">

    
</head>

<body>
    <nav>
        <center>
            <div class="head1">
                <h1><b>Hospital Management System</b></h1>
            </div>
        </center>

        <div class="head2">

            <h4><b>Welcome , <snap class="user" style="padding-bottom:6px;"> <?php echo $_SESSION['doc_name']?></snap></b></h4>

        </div>

    </nav>

    <!-- main  -->

    <center >
    <div class="main">
        <div class="list">
           
                <h2><b>Patients Have To Treat Today</b></h2>
                <form class="" action="" method="post" autocomplete="off" style="font-weight: bolder;">
                <button type="submit"  style="width:12vw; height:5vh; color:blue;  border-radius:10px; margin-bottom:20px; font-weight: bolder;"
                ><h5><b>Logout</b></h5></button>
                <button type="submit" name="submit0"  style="width:12vw; height:5vh; color:blue;  border-radius:10px; margin-bottom:20px; font-weight: bolder;"
                ><h5><b>Lab Reports</b></h5></button>
                </form>
           

            

            <table class="table" class="table-primary">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">AGE</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">PRESCRIPTION</th>
                    </tr>
                </thead>
                
                <?php
                    if($num>0)
                    {
                        while($data=mysqli_fetch_assoc($run))
                        {
                            echo"
                                <tr>
                                <td><b>".$data['pat_id']."</b></td>
                                <td><b>".$data['name']."</b></td>
                                <td><b>".$data['age']."</b></td>
                                <td><b>".$data['type']."</b></td>
                                <td><a href='prescribe.php' style='text-decoration:none;'>PRESCRIPTION</a></td>
                                </tr>
                            ";
                        };
                    }
                ?>
            </table>

        </div>

        <div class="lab_list">
        <h2><b>Lab Reports</b></h2>



        <table class="table" class="table-primary">
                <thead>
                    <tr class="table-primary">
                    <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">OPEN FILE</th>
                    </tr>
                </thead>
                
                <?php
                    if($num1>0)
                    {
                        while($data1=mysqli_fetch_assoc($run1))
                        {
                            echo"
                                <tr>
                                <td><b>".$data1['rep_id']."</b></td>
                                <td><b>".$data1['name']."</b></td>
                                <td><a href='$data1[filename]' style='text-decoration:none;'>OPEN</a></td>
                                </tr>
                            ";
                        };
                    }
                ?>
            </table>
        </div>

       

    </div>

    </center>











        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>