<?php
session_start();
$patient_name = $_SESSION['patient_name'];
$doctor_name = $_SESSION['doctor_name'];
$sex = $_SESSION['sex'];
$bed_number = $_SESSION['bed_number'];
$ph_number = $_SESSION['ph_number'];
$hospital_name = $_SESSION['hospital_name'];
$blood_grp = $_SESSION['blood_grp'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Health Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card border-secondary mb-3" style="max-width: 40rem;">
            <div class="card-header display-4">Indian Health Portal</div>
            <div class="card-body">
                <h5 class="card-title">Your Blood request details</h5>
                <h6>patient_name : <?php echo $patient_name ?></h6>
                <h6>doctor_name : <?php echo $doctor_name ?></h6>
                <h6>sex : <?php echo $sex ?></h6>
                <h6>bed_number : <?php echo $bed_number ?></h6>
                <h6>ph_number : <?php echo $ph_number ?></h6>
                <h6>hospital_name : <?php echo $hospital_name ?></h6>
                <h6>blood_grp : <?php echo $blood_grp ?></h6>
            </div>
            <a href="blood.php"><button class="btn btn-primary">back to blood page</button></a>
            <a href="index.php"><button class="btn btn-danger">Exit</button></a>
        </div>
    </div>
</body>

</html>