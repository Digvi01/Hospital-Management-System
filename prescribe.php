
<?php
include 'connect.php';



if(isset($_POST["submit6"]))
{
    $name = $_POST["name"];
    $prescription= $_POST["prescription"];
   

    $query = "INSERT INTO prescribe_files VALUES('', '$name', '$prescription')";
  $run =mysqli_query($conn,$query);


  
if($run)
{
  echo "Success";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription's Page</title>
</head>
<body>
    
    <center>
    <h1>Medicines And Their Doses.</h1>
    <form method="post">

        <input type="text" name="name" id="name" style="width: 70%; height:5vh; font-size: x-large; font-weight:bolder; margin-bottom:10px;" placeholder="Enter Patient Name ">
        <br>

        <textarea name="prescription" id="prescription" cols="80" rows="20" style="font-size: x-large; font-weight:bolder;" placeholder="Enter Here"></textarea> <br>

        <button type="submit" name="submit6" style="font-size: x-large; font-weight:bolder;">Submit</button>
    </form>
    </center>
</body>
</html>


