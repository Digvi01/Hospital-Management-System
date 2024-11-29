<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home Page</title>
</head>

<body>

  <nav>
    <center>
      <div class="head1">
        <center>
          <h1 class="heading"><b>Hospital Management System</b></h1>
        </center>
      </div>
    </center>

    <div class="head2">

      <a href="">Home</a>
      <div class="item">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDarkDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Specialization
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="traditional_practices.php">Heart</a></li>
            <li><a class="dropdown-item" href="medicinal_plants.php">Skin</a></li>
            <li><a class="dropdown-item" href="Digital_mark.php">Eyes</a></li>
          </ul>
        </li>
      </div>

      <div class="item">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDarkDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Departments
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="traditional_practices.php">ICU</a></li>
            <li><a class="dropdown-item" href="medicinal_plants.php">General Wards</a></li>
            <li><a class="dropdown-item" href="Digital_mark.php">Pathology Labs</a></li>
            <li><a class="dropdown-item" href="Digital_mark.php">Medical Store</a></li>
            <li><a class="dropdown-item" href="Digital_mark.php">Medical Waste Management</a></li>
          </ul>
        </li>
      </div>

      <a href="">About</a>

    </div>

  </nav>

  <center>

  <div class="final" style="margin-top:40px; margin-bottom:40px; font-weight:bolder; font-size:larger;">
    <label for="name"><b>Patient File Report : </b></label>
  <button type="submit" name="submit" style="border-radius:10px; padding:3px;"><b><a href="final_rep.php" >Generate</a></b></button>
  </div>

  <div class="line3"></div>

  </center>







  <div class="bts">

    <button class="desk">
      <img src="img/contri.png" alt="" width="90vw" height="90vh">
      <h2><a href="desklog.php">Desk Login</h2>
    </button>
    <button class="doc">
      <img src="img/doctor.png" alt="" width="90vw" height="90vh">
      <h2><a href="doclog.php">Doctor Login</h2>
    </button>
    <button class="lab">
      <img src="img/test.png" alt="" width="90vw" height="90vh">
      <h2><a href="lablog.php">Lab Login</h2>
    </button>
    <button class="cash">
      <img src="img/cashier-machine.png" alt="" width="90vw" height="90vh">
      <h2><a href="cashlog.php">Cashier Login</h2>
    </button>

  </div>



  <center>
    <div class="line"></div>
  </center>
  <center>
    <div class="line2"></div>
  </center>
  <center>
    <div class="line3"></div>
  </center>


  <!-- 1st row  -->

  <div class="cards">
    <div class="lhs">

      <div class="card-head">
        <img src="img/contri.png" alt="" width="90vw" height="90vh">

        <h4><b>Patient Registration</b></h4>
      </div>

      <hr>

      <div class="card-info">

        <ul>
          <li>Unique patient ID for tracking visits</li>
          <li>Automatically verifies patient's benefits eligibility using secured electronic data interchange</li>
          <li>Sends updates through SMS text messages or emails to reduce no-shows.</li>
        </ul>

      </div>

    </div>

    <div class="lhs">

      <div class="card-head">
        <img src="img/contri.png" alt="" width="90vw" height="90vh">

        <h4><b>Appointment & Scheduling</b></h4>
      </div>

      <hr>

      <div class="card-info">

        <ul>
          <li>Quick and effective patient scheduling</li>
          <li>Online and offline appointment availability</li>
          <li>Patients and staff can check appointment status</li>
          <li>Sends updates through SMS text messages or emails to reduce no-shows.</li>
        </ul>

      </div>

    </div>
  </div>

  <!-- 2nd row  -->

  <div class="cards">
    <div class="lhs">

      <div class="card-head">
        <img src="img/contri.png" alt="" width="90vw" height="90vh">

        <h4><b>Inpatient Management</b></h4>
      </div>

      <hr>

      <div class="card-info">

        <ul>
          <li>Unique admissions number generated for each patient</li>
          <li>Easily manage admissions, discharges, and transfers</li>
          <li>Generates comprehensive discharge summary</li>
        </ul>

      </div>

    </div>

    <div class="lhs">

      <div class="card-head">
        <img src="img/contri.png" alt="" width="90vw" height="90vh">

        <h4><b>Outpatient Management</b></h4>
      </div>

      <hr>

      <div class="card-info">

        <ul>
          <li>Straightforward Patient Billing / Insurance Claims and Collection</li>

          <li>Manage invoice, payment due, and advance payment</li>
          <li>SMS for patient notification, payment, next vaccine dose</li>
        </ul>

      </div>

    </div>

  </div>

  <!-- 3rd row  -->

  <div class="cards">
    <div class="lhs">

      <div class="card-head">
        <img src="img/contri.png" alt="" width="90vw" height="90vh">

        <h4><b>Laboratory Management</b></h4>
      </div>

      <hr>

      <div class="card-info">

        <ul>
          <li>Effectively manages patient medical tests, exam reports and laboratory activities</li>
          <li>Generates billing for both inpatients and outpatients</li>
          <li>Finalized reports can be visualized on the screen sent to the ward</li>
        </ul>

      </div>

    </div>

    <div class="lhs">

      <div class="card-head">
        <img src="img/contri.png" alt="" width="90vw" height="90vh">

        <h4><b>Outpatient Management</b></h4>
      </div>

      <hr>

      <div class="card-info">

        <ul>
          <li>Straightforward Patient Billing / Insurance Claims and Collection</li>

          <li>Manage invoice, payment due, and advance payment</li>
          <li>SMS for patient notification, payment, next vaccine dose</li>
        </ul>

      </div>

    </div>

  </div>











  <div class="hosmap">
    <img src="img/map.jpg" alt="" width="98%" height="90%">
  </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>