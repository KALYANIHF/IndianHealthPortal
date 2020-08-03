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

<link rel="stylesheet" href="./css/style17.css">
</head>

<body>
    <section class="bigbox1">
        <div class="square">
            <h1> We Belive Health is Wealth</h1>
        </div>
    </section>

    <div id="flag">
        <h2>
            Stay Safe Be Healthy
        </h2>
        <div class="rec">
            <a style="text-decoration: none;" href="#new">
                <h3> Contact Us</h3>
            </a>
        </div>
    </div>
    <section class="smallbox">
        <h1> Get A Perfect Body</h1>
    </section>
    <section class="smallbox1">
        <div class="container">
            <h4>
                Sticking to a single diet plan is one of the major problems faced by a dieter. Switching from one diet program to other is the normal tendency observed among the dieters. Even if you stick to one weight loss program you sometimes need additional support to make your diet plan successful.
            </h4>
        </div>
    </section>
    <div class="flexbox1">
        <div class="fbox">
            <div class="smb">
                <i class="fas fa-dumbbell" style="color: red; font-size:80px;"></i>
            </div>
            <h3 style="text-transform: uppercase; font-weight: bolder;"> hitting the gym and do exersice.</h3>
        </div>
        <div class="fbox">
            <div class="smb">
                <i class="far fa-lemon" style="color: red; font-size:80px;"></i>
            </div>
            <h3 style="text-transform: uppercase; font-weight: bolder;"> eat healthy food and varitables </h3>
        </div>
        <div class="fbox">
            <div class="smb">
                <i class="fas fa-walking" style="color: red; font-size:80px;"></i>
            </div>
            <h3 style="text-transform: uppercase; font-weight: bolder;"> walking or running everyday for 30 min </h3>
        </div>
    </div>
    <section class="imagebanner">
        <h1>
            Keep Trying And You Will Get Succsess
        </h1>
    </section>
    <section class="fitbox">
        <h1> Our Workout Tips</h1>
    </section>
    <div class="flexbox2">
        <div class="container">
            <div class="s1">
                <div class="ss1">
                    <div class="ib1"></div>
                    <div class="one">
                        <h2># Sit Up</h2>
                    </div>
                </div>
                <div class="ss1">
                    <div class="ib2"></div>
                    <div class="one">
                        <h2># Pushups</h2>
                    </div>
                </div>
            </div>
            <div class="s1">
                <div class="ss1">
                    <div class="ib3"></div>
                    <div class="one">
                        <h2># Lunges</h2>
                    </div>
                </div>
                <div class="ss1">
                    <div class="ib4"></div>
                    <div class="one">
                        <h2># Dumb-bell</h2>
                    </div>
                </div>
            </div>
            <div class="s1">
                <div class="ss1">
                    <div class="ib5"></div>
                    <div class="one">
                        <h2># Squats</h2>
                    </div>
                </div>
                <div class="ss1">
                    <div class="ib6"></div>
                    <div class="one">
                        <h2># single-deadlift</h2>
                    </div>
                </div>
            </div>
            <div class="s1">
                <div class="ss1">
                    <div class="ib7"></div>
                    <div class="one">
                        <h2># Burpees</h2>
                    </div>
                </div>
                <div class="ss1">
                    <div class="ib8"></div>
                    <div class="one">
                        <h2># Dumbell-press</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="imgban">
        <h1>
            Eat Good Food Be Healthy
        </h1>
    </div>
    <div class="sbbx">
        <h2>
            Our Specialist
        </h2>
    </div>
    <div class="container">
        <div class="flexbox3">
            <div class="susu1"></div>
            <div class="susu2"></div>
            <div class="susu3"></div>
            <div class="susu4"></div>
        </div>
    </div>
    <div id="new" class="cbox">
        <h6>
            Contact Us
        </h6>
    </div>

    <div class="conton">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col-75">
                    <input type="text" id="y_name" name="p_name" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="text" id="conno" name="con_number" placeholder="Your Contact Number..">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="text" id="email" name="p_email" placeholder="Your Email Address..">
                </div>
            </div>

            <div class="row">

                <div class="col-75">
                    <textarea id="subject" name="comment" placeholder="Write something.."></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Send Message us">
            </div>
        </form>
    </div>
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