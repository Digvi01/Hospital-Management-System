<?php
require 'connect.php';
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect.php';
    $doc_name = $_POST["doc_name"];
    $password = $_POST["doc_age"]; 
    
     
    $sql = "Select * from doctors where doc_name='$doc_name' AND doc_age='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['doc_name'] = $doc_name;
        header("location:doc_page.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
    <style>

    </style>
  </head>
  <body>

  <nav>
        <center>
            <div class="head1">
                <h1>Hospital Management System</h1>
            </div>
        </center>
</nav>
  


    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    
   

<!-- main  -->

    <div class="container my-4">
     <h1 class="text-center">Doctor's Login</h1>
     <form action="doclog.php" method="post">
        <div class="form-group">
            <label for="doc_name"><b>Name :</b></label>
            <input type="text" class="form-control" id="doc_name" name="doc_name" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="doc_age"><b>Password :</b></label>
            <input type="password" class="form-control" id="doc_age" name="doc_age">
        </div>

        <div class="mid">
                <h6><a href="">Forget Password ?</a></h6>
                <h6>If you are new ? Then <a href="signup.php">REGISTER HERE</a></h6>
            </div>
       
         
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
