<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: desklog.php");
    exit;
}
?>



<?php
           
?>



<?php


$conn = mysqli_connect('localhost', 'root' ,'', 'HMS');
    
            $query = "select * from appointed_patients";
            $run = mysqli_query($conn,$query);
            $num = mysqli_num_rows($run);

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
   

    $query = "INSERT INTO patients VALUES( '$name', '$age', '$doc', '$type' , '$gender', '$submiting')";
  $run =mysqli_query($conn,$query);

  $query2 = "INSERT INTO appointed_patients VALUES( '$name', '$age', '$doc', '$type' , '$gender', '$submiting')";
  $run=mysqli_query($conn,$query2);

  header('location:desk_page.php');
if($run)
{
  "
  <script> alert('Appoiontment Successfull .'); </script>
  ";
}

}
if(isset($_POST["submit2"]))
{
    $doc_name =  $_POST["doc_name"];
    $doc_age =  $_POST["doc_age"];
    $doc_special =  $_POST["doc_special"];
    $doc_gender =  $_POST["doc_gender"];
    $doc_submiting =  $_POST["doc_submiting"];

    $query3 = "INSERT INTO doctors VALUES('', '$doc_name', '$doc_age', '$doc_special', '$doc_gender', '$doc_submiting')";
    $run=mysqli_query($conn,$query3);
    header('location:desk_page.php');

    if($run)
    {

    echo
       "Doctor Added Successfully";
    }
}

if(isset($_POST["submit3"]))
{  
     $em_name =  $_POST["em_name"];
    $em_type =  $_POST["em_type"];
    $em_gender =  $_POST["em_gender"];
    $em_submiting =  $_POST["em_submiting"];

    $query4 = "INSERT INTO employee VALUES('', '$em_name','$em_type' , '$em_gender', '$em_submiting')";
    $run=mysqli_query($conn,$query4);
    header('location:desk_page.php');
    if($run)
    {
    echo
    "
    <script> alert('Employee Added Successfully'); </script>
    ";
    }
}

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desk's Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="desk_page.css">
</head>

<body>
    <nav>
        <center>
            <div class="head1">
                <h1><b>Hospital Management System</b></h1>
            </div>
        </center>

        <div class="head2">

            <h4><b>Welcome At Main Desk's Portel  <snap class="user" style="margin-left:100px; padding-bottom:6px;">Logged-IN : <?php echo $_SESSION['name']?></snap></b></h4>

        </div>

    </nav>

    <!-- main  -->

    <div class="main">
        <div class="list">
            <center >
                <h2><b>Appointment & Scheduling</b></h2>
                <form class="" action="" method="post" autocomplete="off" style="font-weight: bolder;">
                <button type="submit" name="submit0"  style="width:12vw; height:5vh; color:blue;  border-radius:10px; margin-bottom:20px; font-weight: bolder;"
            ><h5><b>Delete & Logout </b></h5></button>
</form>
            </center>

            

            <table class="table" class="table-primary">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">TREATED BY</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">CHECKED-IN</th>
                    </tr>
                </thead>
                
                <?php
                    if($num>0)
                    {
                        while($data=mysqli_fetch_assoc($run))
                        {
                            echo"
                                <tr>
                                <td><b>"./*$data['pat_id'].*/"</b></td>
                                <td><b>".$data['name']."</b></td>
                                <td><b>".$data['doc']."</b></td>
                                <td><b>".$data['type']."</b></td>
                                <td><a href=''>DELETE</a></td>
                                </tr>
                            ";
                        };
                    }
                ?>
            </table>

        </div>

        <center>
            <div class="add">


                <section class="add_pat">

                    <h3>Enroll The Patient :</h3>

                    <form class="" action="" method="post" autocomplete="off" style="font-weight: bolder;">

                        <label for="">Name :</label>
                        <input type="text" name="name" required value="" style="font-weight: bolder;">
                        <br>

                        <label for="">Age :</label>
                        <input type="number" name="age" required value="" style="margin-left: 15px;font-weight:bolder;">
                        <br>

                        <label for="">Will Treated By : </label>
                        <select class="" name="doc" required style="font-weight: bolder;">
                            <option value="" selected hidden>Select Doctor</option>
                            <option value="Dr. Raj" style="font-weight: bolder;">Dr. Raj</option>
                            <option value="Dr. Vikas" style="font-weight: bolder;">Dr. Vikas</option>
                            <option value="Dr. Jyoti" style="font-weight: bolder;">Dr. Jyoti</option>
                        </select>
                        <br>

                        <label for="">Type : </label>
                        <select class="" name="type" required style="font-weight: bolder;">
                            <option value="" selected hidden>Select Type</option>
                            <option value="Inpatient" style="font-weight: bolder;">Inpatient</option>
                            <option value="Outpatient" style="font-weight: bolder;">Outpatient</option>
                            <option value="None" style="font-weight: bolder;">None</option>
                        </select>
                        <br>



                        <label for="">Gender : </label>
                        <input type="radio" name="gender" value="Male" required style="font-weight: bolder;"> Male
                        <input type="radio" name="gender" value="Female" style="font-weight: bolder;"> Female
                        <br>

                        <label for="">Valid ID : </label>
                        <input type="radio" name="added" value="Submitted" style="font-weight: bolder;" required>
                        Submitted
                        <input type="radio" name="added" value="Not Submitted" style="font-weight: bolder;"> Not
                        Submitted

                        <br>

                        <button type="submit" name="submit1"
                            style="margin-top: 10px; width: 8vw; border-radius: 10px; border: 2px solid rgb(168, 168, 255);color: black; background-color: rgb(168, 168, 255); font-weight: bolder;">ADD</button>
                    </form>
                </section>


            </div>
        </center>

    </div>
   

    <hr>


<div class="mid">

    <center>
    <div class="add">


        <section class="add_pat">

            <h3>Add New Doctor</h3>

            <form class="" action="" method="post" autocomplete="off" style="font-weight: bolder;">

                <label for="">Name :</label>
                <input type="text" name="doc_name" required value="" style="font-weight: bolder;">
                <br>

                <label for="">Age :</label>
                <input type="number" name="doc_age" required value="" style="margin-left: 15px;font-weight:bolder;">
                <br>

                <label for="">Specialization </label>
                <select class="" name="doc_special" required style="font-weight: bolder;">
                    <option value="" selected hidden>Select</option>
                    <option value="Surgeon" style="font-weight: bolder;">Surgeon</option>
                    <option value="OPD" style="font-weight: bolder;">OPD</option>
                    <option value="xyz" style="font-weight: bolder;">xyz</option>
                </select>
                <br>
              

                <label for="">Gender : </label>
                <input type="radio" name="doc_gender" value="Male" required style="font-weight: bolder;"> Male
                <input type="radio" name="doc_gender" value="Female" style="font-weight: bolder;"> Female
                <br>

                <label for="">Valid ID : </label>
                <input type="radio" name="doc_submiting" value="Submitted" style="font-weight: bolder;" required>
                Submitted
                <input type="radio" name="doc_submiting" value="Not Submitted" style="font-weight: bolder;"> Not
                Submitted

                <br>

                <button type="submit" name="submit2"
                    style="margin-top: 10px; width: 8vw; border-radius: 10px; border: 2px solid rgb(168, 168, 255);color: black; background-color: rgb(168, 168, 255); font-weight: bolder;">ADD</button>
            </form>
        </section>


    </div>
</center>

<center>

    <div class="add">

        <div class="row1">
            <section class="add_pat">

                <h3>Workers / Employee</h3>

                <form class="" action="" method="post" autocomplete="off" style="font-weight: bolder;">

                    <label for="">Name :</label>
                    <input type="text" name="em_name" required value="" style="font-weight: bolder;">
                    <br>



                    <label for="">Work Type : </label>
                    <select class="" name="em_type" required style="font-weight: bolder;">
                        <option value="" selected hidden>Select Type</option>
                        <option value="Nurse" style="font-weight: bolder;">Nurse</option>
                        <option value="Sweeper" style="font-weight: bolder;">Sweeper</option>
                        <option value="Guard" style="font-weight: bolder;">Guard</option>
                        <option value="Goods Manager style="font-weight: bolder;">Goods Manager</option>
                        <option value="Waste Manager" style="font-weight: bolder;">Waste Manager</option>
                    </select>
                    <br>
                  


                    <label for="">Gender : </label>
                    <input type="radio" name="em_gender" value="Male" required style="font-weight: bolder;"> Male
                    <input type="radio" name="em_gender" value="Female" style="font-weight: bolder;"> Female
                    <br>

                    <label for="">Valid ID : </label>
                    <input type="radio" name="em_submiting" value="Submitted" style="font-weight: bolder;" required>
                    Submitted
                    <input type="radio" name="em_submiting" value="Not Submitted" style="font-weight: bolder;"> Not
                    Submitted

                    <br>

                    <button type="submit" name="submit3"
                        style="margin-top: 10px; width: 8vw; border-radius: 10px; border: 2px solid rgb(168, 168, 255);color: black; background-color: rgb(168, 168, 255); font-weight: bolder;">ADD</button>
                </form>
            </section>


        </div>
    </center>


    </div>














        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>

</html>