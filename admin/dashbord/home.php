<?php
include 'conn.php';
session_start();
$u_name = $_SESSION['admin_name'];

$result1 = mysqli_query($conn, "SELECT count(*) as total FROM tbl_blood");
$data1 = mysqli_fetch_assoc($result1);
// 
$result2 = mysqli_query($conn, "SELECT count(*) as total FROM tbl_contact");
$data2 = mysqli_fetch_assoc($result2);
// 
$result3 = mysqli_query($conn, "SELECT count(*) as total FROM tbl_chkup");
$data3 = mysqli_fetch_assoc($result3);
// 
$result4 = mysqli_query($conn, "SELECT count(*) as total FROM tbl_appoirment");
$data4 = mysqli_fetch_assoc($result4);
// 
$result5 = mysqli_query($conn, "SELECT count(*) as total FROM tbl_comment");
$data5 = mysqli_fetch_assoc($result5);
// 
$result6 = mysqli_query($conn, "SELECT count(*) as total FROM tbl_touch");
$data6 = mysqli_fetch_assoc($result6);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Health Portal</title>
  <link rel="icon" href="../../img/medical-logo.jpeg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/home.css">
</head>

<body>
  <section class="head-value">
    <div class="container">
      <div class="row">
        <div class="col col-sm-8">
          <h1>Welcome to Indian Health Portal dashbord</h1>
        </div>
        <div class="col col-sm-3">
          <a href="../logout.php"><button class="btn btn-danger">Log_Out</button></a>
        </div>
      </div>
    </div>
  </section>
  <section class="maincontent">
    <h2>Admin-Name: <?php echo $u_name ?> (current-session)</h2>
    <div class="flexvalue">
      <div class="box">
        <h2>total blood request</h2>
        <h2><?php echo $data1['total']; ?></h2>
      </div>
      <div class="box">
        <h2>total contact request</h2>
        <h2><?php echo $data2['total']; ?></h2>
      </div>
      <div class="box">
        <h2>total checkup request</h2>
        <h2><?php echo $data3['total']; ?></h2>
      </div>
      <div class="box">
        <h2>total appoinment request</h2>
        <h2><?php echo $data4['total']; ?></h2>
      </div>
      <div class="box">
        <h2>total comment request</h2>
        <h2><?php echo $data5['total']; ?></h2>
      </div>
      <div class="box">
        <h2>total colab(mitting) request</h2>
        <h2><?php echo $data6['total']; ?></h2>
      </div>
    </div>
    <h5>admin still in development <br>
      thank you for visiting</h5>
  </section>
  <section class="foot">
    <h3>Indian health Portal (Admin)</h3>
  </section>

</body>

</html>