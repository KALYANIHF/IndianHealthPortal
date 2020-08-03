<?php
session_start();
$p_name = $_SESSION['p_name'];
$con_number = $_SESSION['con_number'];
$doctor_name = $_SESSION['doctor_name'];
$checkup = $_SESSION['checkup'];
$p_address = $_SESSION['p_address'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Health Portal</title>
    <link rel="stylesheet" href="css/getinsucc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <section class="brand">
        <h1>Indian Health Portal</h1>
    </section>
    <div class="showmsg">
        <h3>Successfull!</h3>
        <h5><?php echo $p_name; ?> your check-up request is in process</h5>
        <h5>your details</h5>
        <h5>Contact No: <?php echo $con_number ?></h5>
        <h5>Doctor Name: <?php echo $doctor_name ?></h5>
        <h5>Check up type: <?php echo $checkup ?></h5>
        <h5>Your address: <?php echo $p_address ?></h5>
        <a href="specialist.php"><button class="btn btn-success">back</button></a>
        <a href="index.php"><button class="btn btn-danger">Exit</button></a>
    </div>
</body>

</html>