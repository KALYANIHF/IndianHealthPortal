<?php
include 'conn.php';

$type = $_GET['type'];
$_SESSION['type'] = $type;
if ($type == 'A') {
    $title = "DR. Rajsekhar Dutaa";
} else if ($type == 'B') {
    $title = "DR. Nilima Tudu";
} else if ($type == 'C') {
    $title = "DR. Suddarshil Gangully";
} else if ($type == 'D') {
    $title = "DR. Aparna Thakur";
} else if ($type == 'E') {
    $title = "DR. Rajasree Mallick";
} else if ($type == 'F') {
    $title = "DR. Sibashis Dutaa";
} else if ($type == 'G') {
    $title = "DR. Arjun Kundu";
} else if ($type == 'H') {
    $title = "DR. Raj Das";
} else if ($type == 'I') {
    $title = "DR. Mohammod";
} else if ($type == 'J') {
    $title = " DR. Juveria";
} else if ($type == 'K') {
    $title = "DR. M L Swarankar";
} else if ($type == 'L') {
    $title = "DR. Aparna Thakur";
} else if ($type == 'M') {
    $title = "DR. Murali Krishna";
} else if ($type == 'N') {
    $title = "DR. LANKA RAMESH";
} else if ($type == 'O') {
    $title = "DR. Dagde Gangadha";
} else if ($type == 'P') {
    $title = "DR. MD DANISH";
} else if ($type == 'Q') {
    $title = "DR. B. C. SAHA";
} else if ($type == 'R') {
    $title = "DR. G. D. MONDAL";
} else if ($type == 'S') {
    $title = "DR. A. SEN";
} else if ($type == 'T') {
    $title = "DR. (MRS.) S. DAS";
} else if ($type == 'U') {
    $title = "DR. A. K. DAS";
} else if ($type == 'V') {
    $title = "DR. R. K. ROY";
} else if ($type == 'W') {
    $title = "DR. P. K. BASU";
} else if ($type == 'X') {
    $title = "DR. I. CHATTERJEE";
} else if ($type == '1') {
    $title = "DR. R. KUMAR";
} else if ($type == '2') {
    $title = "DR.(MRS) S. KUNDU";
} else if ($type == '3') {
    $title = "DR.S.CHATTOPADHYAY";
} else if ($type == '4') {
    $title = "DR. SONALI";
} else if ($type == '5') {
    $title = "DR.SUDIPTA BISWAS";
} else if ($type == '6') {
    $title = "DR. A. CHATTERJEE";
} else if ($type == '7') {
    $title = "DR. SUKHEN GARAI";
} else if ($type == '8') {
    $title = "DR. UJJWAL BISWAS";
} else if ($type == '9') {
    $title = "Dr. S Bhattacharyya";
} else if ($type == '10') {
    $title = "DR. Nilima Tudu";
} else if ($type == '11') {
    $title = "Dr. Arindam Seth";
} else if ($type == '12') {
    $title = "DR. Aparna Thakur";
} else if ($type == '13') {
    $title = "DR. Rajasree Mallick";
} else if ($type == '14') {
    $title = "Dr. Amitabha Sen";
} else if ($type == '15') {
    $title = "Dr. Soumik Saha";
} else if ($type == '16') {
    $title = "Dr. Gautam Saha";
} else if ($type == '17') {
    $title = "Dr. Akash Mondal";
} else if ($type == '18') {
    $title = "DR. N Saha";
} else if ($type == '19') {
    $title = "Dr. Subhadeep Roy";
} else if ($type == '20') {
    $title = "DR. A. Mondol";
} else if ($type == '21') {
    $title = "DR. R Mallick";
} else if ($type == '22') {
    $title = "Dr. Dipak Roy";
} else if ($type == '23') {
    $title = "Dr. Javed Aqutar Bappa";
} else if ($type == '24') {
    $title = "Dr. Ujjal Mohanta";
} else if ($type == '25') {
    $title = " Dr. Susovan Halder";
} else if ($type == '26') {
    $title = " DR. Nilima Tudu";
} else if ($type == '27') {
    $title = "Dr. Debjyoti Dutta";
} else if ($type == '28') {
    $title = " DR. Aparna Kundu";
} else if ($type == '29') {
    $title = "DR. R Mallick";
} else if ($type == '30') {
    $title = "Dr. Abhishek Ghosh";
} else if ($type == '31') {
    $title = "DR. Arjun Kundu";
} else if ($type == '32') {
    $title = " S. B. Nagori";
} else if ($type == '33') {
    $title = " Dr. Vijay Singh Baid";
} else if ($type == '34') {
    $title = " Dr. Monisha De";
} else if ($type == '35') {
    $title = "DR. Suddarshil Gangully";
} else if ($type == '36') {
    $title = " Dr. Saakshi Bhartia";
} else if ($type == '37') {
    $title = "Dr. Ayusmati Thakur";
} else if ($type == '38') {
    $title = "Dr. S A Mallick";
} else if ($type == '39') {
    $title = "Dr. Avijit Guha";
} else if ($type == '40') {
    $title = "Dr. Arabinda De";
} else {
    $title = "none";
}

if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $doctor_name = $_POST['doctor_name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $con_no = $_POST['con_no'];
    $p_address = $_POST['p_address'];
    session_start();
    $_SESSION["p_name"] = $p_name;
    $_SESSION["doctor_name"] = $doctor_name;
    $_SESSION["sex"] = $sex;
    $_SESSION["age"] = $age;
    $_SESSION["con_no"] = $con_no;
    $_SESSION["p_address"] = $p_address;

    if ($conn) {
        $query = "INSERT INTO tbl_appoirment (p_name,doctor_name,sex,age,con_no,p_address) VALUES ('$p_name','$doctor_name','$sex','$age','$con_no','$p_address')";
        mysqli_query($conn, $query);
        header("Location: appoinmentsuccess.php");
    } else {
        header("Location: appoinmentfail.php");
    }
}
mysqli_close($conn);
?>
<?php
include 'header&footer/header.php';
?>

<link rel="stylesheet" href="./css/style12.css" class="rel">
</head>

<body>
    <section class="banner">
        <div class="boxa1">
            <h1>
                APPOINTMENT FORM
            </h1>
        </div>
        <div class="con">
            <div class="container">

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">Patient Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="patientname" name="p_name" placeholder=" patient name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="country">Doctor's Name</label>
                        </div>
                        <div class="col-75">
                            <select id="doctorname" name="doctor_name">
                                <option value="<?php echo "$title" ?>
"><?php echo "$title" ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="country">Sex</label>
                        </div>
                        <div class="col-75">
                            <select id="sex" name="sex">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Age</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="bednumber" name="age" placeholder="Your Age..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Phone Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="phonenumber" name="con_no" placeholder="Your Phone Number..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Address</label>
                        </div>
                        <div class="col-75">
                            <textarea id="address" name="p_address" placeholder="Your Address.."></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
</body>

</html>