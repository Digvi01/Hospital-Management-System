
 
<?php 
include 'connect.php';
 
$query = "select * from lab_logins";           
            $run = mysqli_query($conn,$query);
            $num = mysqli_num_rows($run);
            
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'C:\xampp\htdocs\DBMS\Lab_reports';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into lab_reports VALUES('','$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body >
    <center>
 
<form method="post" enctype="multipart/form-data" style="display:block;">
    <label style="margin-bottom:2%;margin-top:3%;">Name ( With Age ) :</label>
    <input type="text" name="title">
    <br>
    
    <input type="File" name="file" style="margin-left:10%; margin-top:2%; margin-bottom:2%;">
    <br>
    <input type="submit" name="submit" style="margin-top:2%; border:2px solid black; border-radius:10px; padding:5px;">
 
 
</form>
</center>
 
</body>
</html>
