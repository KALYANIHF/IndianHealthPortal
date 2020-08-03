<?php
session_start();
$p_name = $_SESSION["p_name"];
$doctor_name = $_SESSION["doctor_name"];
$sex = $_SESSION["sex"];
$age = $_SESSION["age"];
$con_no = $_SESSION["con_no"];
$p_address = $_SESSION["p_address"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Health Portal</title>
    <link rel="stylesheet" href="./css/style1.css" />
    <link rel="stylesheet" href="css/bootstrap1.min.css">
</head>

<body>
    <div style="margin-top: 4rem;" class="container">
        <div>
            <h2><?php echo $p_name; ?> Your Appoinment is Successfull</h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">Your Appoinment details</div>
                    <div class="card-body">
                        <p class="card-text">Your Name: <?php echo $p_name; ?></p>
                        <p class="card-text">Your Name: <?php echo $doctor_name; ?></p>
                        <p class="card-text">Your Name: <?php echo $sex; ?></p>
                        <p class="card-text">Your Name: <?php echo $age; ?></p>
                        <p class="card-text">Your Name: <?php echo $con_no; ?></p>
                        <p class="card-text">Your Name: <?php echo $p_address; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <a href="specialist.php"><button class="btn btn-primary">back</button></a>
                <a href="index.php"><button class="btn btn-danger">exit</button></a>
            </div>
        </div>
    </div>
</body>

</html>