<?php
include 'conn.php';
if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $con_number = $_POST['con_number'];
    $p_email = $_POST['p_email'];
    $comment = $_POST['comment'];
    session_start();
    $_SESSION['p_name'] = $p_name;
    $_SESSION['con_number'] = $con_number;
    $_SESSION['p_email'] = $p_email;
    $_SESSION['comment'] = $comment;
    $query = "INSERT INTO `tbl_contact`(`id`, `p_name`, `con_number`, `p_email`, `comment`) VALUES ('null','$p_name','$con_number','$p_email','$comment')";
    if (($p_email && $p_name && $con_number) != null) {
        mysqli_query($conn, $query);
        header("Location: contactsucc.php");
    } else {
        header("Location: contactfail.php");
    }
}
mysqli_close($conn);
?>
<?php
include 'header&footer/header.php';
?>

<link rel="stylesheet" href="css/style15.css">
</head>

<body>
    <section class="section1">
        <div class="container">
            <h1>Have <span style="color:#f00">a</span> question</h1>
            <h4>Contact us</h4>
        </div>
    </section>
    <div class="mass">
        <h2>Fill the contact form</h2>
    </div>
    <!-- <div class="container"> -->
    <section class="section2">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="container">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="p_name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="contact">Contact_No</label>
                    <input type="text" name="con_number" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="email">Email_Id</label>
                    <input type="email" name="p_email" class="form-control" id="">
                </div>
                <div class="form-group">
                    <textarea style="width: 100%;height: 18vh;" name="comment" placeholder="Write something.." id=""></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
    <!-- </div> -->
    <section class="section3">

    </section>
    <section class="bfoo">
        <div class="container">
            <div style="padding-top: 1rem;" class="row">
                <div class="col col-sm-6">
                    <h3>Indian health Portal</h3>
                    <h5>Our chairman: John doe</h5>
                    <h5>Our vice chairman: Asim saha</h5>
                    <h5>Our contact_No: (033) 2563562</h5>
                    <h5>Our email_id: indianhealportal@outlook.com</h5>
                </div>
                <div class="col col-sm-6">
                    <h3>all the important links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blood.php">Blood</a></li>
                        <li><a href="specialist.php">specialist</a></li>
                        <li><a href="give&honour.php">give and honerable</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="noticebord.php">recent notice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>