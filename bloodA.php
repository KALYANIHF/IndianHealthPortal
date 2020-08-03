<?php
include 'conn.php';
$type = $_GET['type'];
session_start();
$_SESSION['type'] = $type;
if ($type == 'A') {
    $title = "A+";
} else if ($type == 'AB') {
    $title = "AB+";
} else if ($type == 'C') {
    $title = "A-";
} else if ($type == 'D') {
    $title = "B+";
} else if ($type == 'E') {
    $title = "B-";
} else if ($type == 'O') {
    $title = "O+";
} else if ($type == 'F') {
    $title = "AB-";
} else if ($type == 'G') {
    $title = "O-";
} else {
    $title = "none";
}

if (isset($_POST['submit'])) {
    $patient_name = $_POST['patient_name'];
    $doctor_name = $_POST['doctor_name'];
    $sex = $_POST['sex'];
    $bed_number = $_POST['bed_number'];
    $ph_number = $_POST['ph_number'];
    $hospital_name = $_POST['hospital_name'];
    $blood_grp = $_POST['blood_grp'];
    session_start();
    $_SESSION['patient_name'] = $patient_name;
    $_SESSION['doctor_name'] = $doctor_name;
    $_SESSION['sex'] = $sex;
    $_SESSION['bed_number'] = $bed_number;
    $_SESSION['ph_number'] = $ph_number;
    $_SESSION['hospital_name'] = $hospital_name;
    $_SESSION['blood_grp'] = $blood_grp;

    if ($conn) {
        //echo"<h2>New record created successfully</h2>";
        $query = "INSERT INTO tbl_blood (patient_name,doctor_name,sex,bed_number,ph_number,hospital_name,blood_grp) VALUES ('$patient_name','$doctor_name','$sex','$bed_number','$ph_number','$hospital_name','$blood_grp')";
        mysqli_query($conn, $query);
        header('location:bloodsucess.php');
    } else {
        echo "ERROR:" . mysqli_connect_error();
    }
}
$conn->close();
?>

<?php
include 'header&footer/header.php';
?>

<link rel="stylesheet" href="css/style10.css">
</head>

<body>
    <section class="one">
        <div class="msg">
            <h2>Bloodbank Service For <?php echo $title; ?>
                Blood Group</h2>
            <h3>we always give our best to you.</h3>
            <h4>EMERGENCY CONTACT: 96666 55656</h4>
        </div>
    </section>

    <!-- form group -->

    <section class="formval">
        <h3>Fill the form bellow</h3>
        <div class="container1">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Patient Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="patientname" name="patient_name" placeholder=" patient name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Doctor Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="doctorname" name="doctor_name" placeholder="Your doctor's name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Sex</label>
                    </div>
                    <div class="col-75">
                        <select id="sex" name="sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Blood Group</label>
                    </div>
                    <div class="col-75">
                        <select id="bloodgroup" name="blood_grp">
                            <option value="<?php echo "$title" ?>
"><?php echo "$title" ?></option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Bed Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="bednumber" name="bed_number" placeholder="Your Bed Number..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Phone Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="phonenumber" name="ph_number" placeholder="Your Phone Number..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Hospital Name</label>
                    </div>
                    <div class="col-75">
                        <select id="hospitalname" name="hospital_name">
                            <option value="jnm hospital">JNM HOSPITAL</option>
                            <option value="gandhi hospital">GANDHI HOSPITAL</option>
                            <option value="esi hospital">ESI HOSPITAL</option>
                            <option value="kanchrapara railway hospital">KANCHRAPARA RAILWAY HOSPITAL</option>
                            <option value="naihati matrisodonr">NAIHATI MATRISODON</option>
                            <option value="golghar hospital">GOLGHAR HOSPITAL</option>
                            <option value="barrackpore city hospital">BARRACKPORE CITY HOSPITAL</option>

                        </select>
                    </div>
                </div>

                <div class="row">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
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