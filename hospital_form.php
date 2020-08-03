<?php
include "conn.php";
$type = $_GET['type'];
$_SESSION['type'] = $type;
if ($type == 'A') {
    $title = "kalyani Jnm Hospital ";
} else if ($type == 'B') {
    $title = "Kalyani Gandhi Memorial Hospital";
} else if ($type == 'C') {
    $title = "Kalyani Esi Hospital";
} else if ($type == 'D') {
    $title = "Kanchrapara Railway Hospital";
} else if ($type == 'E') {
    $title = "kolkata BR.SING hospital";
} else if ($type == 'F') {
    $title = "kolkata NRS hospital";
} else if ($type == 'G') {
    $title = "kolkata sskm hospital";
} else if ($type == 'H') {
    $title = "barrakpore bmrc hospital";
}

if (isset($_POST['submit'])) {
    $patient_name = $_POST['patient_name'];
    $p_address = $_POST['p_address'];
    $contact_no = $_POST['contact_no'];
    $sex = $_POST['sex'];
    $hospital_name = $_POST['hospital_name'];
    $blood_grp = $_POST['blood_grp'];
    $age = $_POST['age'];
    $p_weight = $_POST['weight'];
    session_start();
    $_SESSION['patient_name'] = $patient_name;
    $_SESSION['p_address'] = $p_address;
    $_SESSION['contact_no'] = $contact_no;
    $_SESSION['sex'] = $sex;
    $_SESSION['hospital_name'] = $hospital_name;
    $_SESSION['blood_grp'] = $blood_grp;
    $_SESSION['age'] = $age;
    $_SESSION['p_weight'] = $p_weight;


    if ($conn) {
        $query = "INSERT INTO tbl_adm (patient_name,p_address,contact_no,sex,hospital_name,blood_grp,age,p_weight) VALUES ('$patient_name','$p_address','$contact_no','$sex','$hospital_name','$blood_grp','$age','$p_weight')";
        header("Location: bedbooksucess.php");
        mysqli_query($conn, $query);
    } else {
        header("Location: bedbookfail.html");
    }
}
mysqli_close($conn);
?>
<?php
include "header&footer/header.php";
?>
<link rel="stylesheet" href="./css/style16.css">
</head>

<body>
    <section class="hospital-name">
        <h1> <?php echo $title ?> </h1>
    </section>
    <section class="form-detail">
        <div class="form-value">
            <h1>fill all the details</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-item">
                    <label style="display: block" for="name">Name</label>
                    <input type="text" name="patient_name" id="name">
                </div>
                <div class="form-item">
                    <label style="display: block" for="address">Address</label>
                    <input type="text" name="p_address" id="address">
                </div>
                <div class="form-item">
                    <label style="display: block" for="contact_no">Contact_NO</label>
                    <input type="text" name="contact_no" id="number">
                </div>
                <div class="form-item">
                    <label style="display: block" for="sex">sex</label>
                    <select name="sex" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">other</option>
                    </select>
                </div>
                <div class="form-item">
                    <label style="display: block" for="hospital">Hospital</label>
                    <input type="text" name="hospital_name" value="<?php echo $title ?>" id="">
                </div>
                <div class="form-item">
                    <label style="display: block" for="blood-group">blood-group</label>
                    <select name="blood_grp" id="blood">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="form-item">
                    <label style="display: block" for="age">age</label>
                    <input type="number" name="age" id="age">
                </div>
                <div class="form-item">
                    <label style="display: block" for="weight">weight</label>
                    <input type="number" name="weight" id="weight">
                </div>
                <div class="form-item">
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </section>
    <div class="section6">
        <h1>Indian health portal all right reserved &copy; 2020</h1>
    </div>
</body>

</html>