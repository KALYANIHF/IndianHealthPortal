<?php
session_start();
$p_name = $_SESSION['p_name'];
$con_number = $_SESSION['con_number'];
$p_email = $_SESSION['p_email'];
$comment = $_SESSION['comment'];
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
        <h3>Thank You!</h3>
        <h5><?php echo $p_name; ?></h5>
        <h5>we get your email : <?php echo $p_email; ?></h5>
        <h5>ph-No: <?php echo $con_number; ?></h5>
        <h5>we contact you ass soon as possible have a great day!</h5>
        <a href="contact.php"><button class="btn btn-success">back</button></a>
        <a href="index.php"><button class="btn btn-danger">Exit</button></a>
    </div>
</body>

</html>