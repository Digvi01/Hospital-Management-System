<?php
            
            include("connect.php");

    if(isset($_POST["submit"]))
    {
       $name = $_POST["name"];
       $query = "select * FROM patients JOIN lab_reports ON patients.name =lab_reports.name JOIN bill_sec ON patients.name =bill_sec.name WHERE patients.name = '$name' ORDER BY patients.name";
       $run = mysqli_query($conn,$query);
         $num = mysqli_num_rows($run);

    }


           
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Report Page</title>

    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="final_rep.css">
</head>

<body>
<div style="margin-bottom:40px;">
<form class="" action="final_rep.php" method="post" autocomplete="off" style="font-weight: bolder;">
  <center>

  <div class="final" style="margin-top:40px; font-weight:bolder; font-size:larger;">
    <label for="name"><b>File Report : </b></label>
   <input type="text" name="name" id=""  style=" font-weight:bolder; font-size:larger;" placeholder="Enter Valid Name">
  <button type="submit" name="submit" style="border-radius:10px; padding:3px;"><b>Generate</b></button>
  </div>

  </center>
</form>
</div>
    <center>
    
    <div class="middle">

    <h1 style=" border-radius:10px;">Patient File</h1>
    <div class="line__"></div>
    <div class="img" style="margin-top:20px;margin-bottom:20px; border-radius:10px;"><img src="img/contri.png" alt="" width="90vw" height="90vh"></div>
    <div class="line__"></div>
        
    
    <br>

    <?php
    
  
                    if($num>0)
                    {
                        while($data=mysqli_fetch_assoc($run))
                        {
                            
                            echo "                      
                                 <h3>Name : $data[name] </h3>
                                 <br>
                                 <h3>Age : $data[age]</h3>
                                 <br>
                                 <h3>Treated By : $data[doc]</h3>
                                 <br>
                                 <h3>Lab Reports : $data[filename]</h3>
                                 <br>
                                 <h3>Bill Receipt : $data[receipt]</h3>
                                 <br>
                                 <h3>Total Paid Amount : $data[amt] Rs/-</h3>
                                 <br>

                                 ";
     
    };
}

?>
     <input type="checkbox" name="" id="">
     <label><b>I Have Read All The Policies & Terms.</b></label>

    </div>
    <div class="sub-bts">
        <button onclick="window.print()" style="margin-top:20px;margin-bottom:20px;border-radius:10px; font-weight:bold;" type="submit">PRINT</button>
    </div>

    </center>


</body>

</html>

