<?php
session_start();
$patient_name = $_SESSION['patient_name'];
$p_address = $_SESSION['p_address'];
$contact_no = $_SESSION['contact_no'];
$sex = $_SESSION['sex'];
$hospital_name = $_SESSION['hospital_name'];
$blood_grp = $_SESSION['blood_grp'];
$age = $_SESSION['age'];
$p_weight = $_SESSION['p_weight'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Indian health portal</title>
  <link rel="icon" href="./img/medical-logo.jpeg" />
  <link rel="stylesheet" href="css/bootstrap1.min.css" />
</head>

<body>
  <div style="margin-top: 2rem;" class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert"></button>
          <strong>
            <h1>Well done!</h1>
          </strong>Your bed <a href="#" class="alert-link">is <span style="color: orangered;">booked</span> Successfully</a>.
        </div>
        <br>
        <div class="alert alert-dismissible alert-primary">
          <button type="button" class="close" data-dismiss="alert"></button>
          <h4 class="alert-heading">Success</h4>
          <p class="mb-0"> for the paticent <a href="#" class="alert-link">detailes</a>.</p>
        </div>
        <hr>
        <div style="display: inline-block; margin-left: 20%;" class="card text-dark bg-success mb-3" style="max-width: 20rem;">
          <div class="card-header">
            <h3>Patient Name: <?php echo $patient_name; ?></h3>
          </div>
          <div class="card-body">
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Address: <?php echo $p_address; ?></h5>
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Contact_No:<?php echo $contact_no ?></h5>
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Sex:<?php echo $sex ?></h5>
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Hospital_Name:<?php echo $hospital_name ?></h5>
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Blood_Grp:<?php echo $blood_grp ?></h5>
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Age:<?php echo $age ?></h5>
            <h5 style="text-transform: capitalize; font-style: italic;" class="card-title">Patient Weight:<?php echo $p_weight ?></h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="list-group">
          <h5 style="font-style:italic">You will get a conformation massage with a <span style="text-transform: capitalize; color: orangered">token-number</span> in your registered mobile number,that you have to use at the admit time of your Patient</h5>
          <a style="display:inline-block; margin-left: 8rem;" onclick="<?php session_destroy(); ?>" href="hospitallist.php"><button type="button" class="btn btn-primary">back to hospital page</button></a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>