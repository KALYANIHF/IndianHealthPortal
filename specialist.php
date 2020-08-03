<?php
include 'conn.php';

?>
<?php
if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $con_number = $_POST['con_number'];
    $doctor_name = $_POST['doctor_name'];
    $checkup = $_POST['checkup'];
    $p_address = $_POST['p_address'];
    session_start();
    $_SESSION['p_name'] = $p_name;
    $_SESSION['con_number'] = $con_number;
    $_SESSION['doctor_name'] = $doctor_name;
    $_SESSION['checkup'] = $checkup;
    $_SESSION['p_address'] = $p_address;

    if ($conn) {
        $squery = "INSERT INTO tbl_chkup (p_name,con_number,doctor_name,checkup,p_address) VALUES ('$p_name','$con_number','$doctor_name','$checkup','$p_address')";
        mysqli_query($conn, $squery);
        header("Location: checkupsucc.php");
    } else {
        echo "ERROR:" . $sql . "<br>" . mysqli_connect_error();
    }
}
mysqli_close($conn);
?>
<?php
include "header&footer/header.php";
?>
<link rel="stylesheet" href="css/style14.css">
</head>

<body>
    <section class="v-header container">
        <div class="fullscreen-video-wrap">
            <video src="videos/covid19.mp4" autoplay="autoplay" loop="loop" muted="muted">
            </video>
        </div>
    </section>
    <!-- video done -->
    <section class="two">
        <h1>Our Deparments</h1>
    </section>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <section class="bigbox">
            <div class="one1">
                <div class="part">
                    <i class="fas fa-x-ray"></i>
                    <h3>CARDIOLOGY</h3>
                    <h5>
                        Provides medical care to patients who have problems with their heart or circulation.Central Sterile Services Department (CSSD): (Sterile Processing Department (SPD) - Sterile Processing - Central Supply Department (CSD)
                    </h5>
                </div>
                <div class="part">
                    <i class="fas fa-user-nurse"></i>
                    <h3> NEUROLOGY</h3>
                    <h5>
                        A medical specialty dealing with disorders of the nervous system. Specifically, it deals with the diagnosis and treatment of all categories of disease involving the central, peripheral, and autonomic nervous systems.
                    </h5>
                </div>
            </div>
            <div class="one1">
                <div class="part">
                    <i class="fas fa-syringe"></i>
                    <h3>GYNECOLOGY</h3>
                    <h5>
                        Investigates and treats problems relating to the female urinary tract and reproductive organs, such as Endometriosis, infertility and incontinence.
                    </h5>
                </div>
                <div class="part">
                    <i class="fas fa-stethoscope"></i>
                    <h3> ORTHOPAEDICS</h3>
                    <h5>
                        Treats conditions related to the musculoskeletal system, including joints, ligaments, bones, muscles, tendons and nerves.Otolaryngology (Ear, Nose, and Throat): The ENT Department provide comprehensive and specialized care.
                    </h5>
                </div>
            </div>
        </section>
    </div>
    <section class="rectangle">
        <h1> Our Home Checkup Service Available Here </h1>
    </section>
    <div class="boxavalue">
        <div id="flex1"></div>
        <div id="flex2">
            <div class="container">
                <form method="post" action="specialist.php">
                    <div class="row">
                        <div class="col-75">
                            <input type="text" id="pname" name="p_name" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <input type="text" id="contactnumber" name="con_number" placeholder="Your Contact Number..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <input type="text" id="doctorname" name="doctor_name" placeholder="Your Doctor Name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <select id="checkup" name="checkup">
                                <option value="Blood prasure">Blood Pressure</option>
                                <option value="Blood Test">Blood Test</option>
                                <option value="Sugar Test">Sugar Test</option>
                                <option value="Urin Test">Urin Test</option>
                                <option value="Physiotherapy">Physiotherapy</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-75">
                            <textarea id="address" name="p_address" placeholder="Your Address.." style="height:150px"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="sq1">
        <h1>
            Select Your Hospital And doctors :
        </h1>
    </section>
    <div class="bigguy">
        <div class="guy">
            <div class="hoschild">
                <a href="jnm.php">
                    <i class="far fa-hospital"></i>
                    <h1>
                        Kalyani JNM
                    </h1>
                </a>
            </div>
            <div class="hoschild">
                <a href="gandhi.php">
                    <i class="far fa-hospital"></i>
                    <h1> Kalyani GANDHI</h1>
                </a>
            </div>
            <div class="hoschild">
                <a href="krs.php">
                    <i class="far fa-hospital"></i>
                    <h1> Kanchrapara Railway Hospital</h1>
                </a>
            </div>
            <div class="hoschild">
                <a href="esi.php">
                    <i class="far fa-hospital"></i>
                    <h1> Kalyani ESI Hospital</h1>
                </a>
            </div>
        </div>
        <div class="guy">
            <div class="hoschild">
                <a href="matri.php">
                    <i class="far fa-hospital"></i>
                    <h1> Naihati MARTISADAN </h1>
                </a>
            </div>
            <div class="hoschild">
                <a href="golghar.php">
                    <i class="far fa-hospital"></i>
                    <h1> GOLGHAR Hospital</h1>
                </a>
            </div>
            <div class="hoschild">
                <a href="bmrc.php">
                    <i class="far fa-hospital"></i>
                    <h1> Barrackpore BMRC</h1>
                </a>
            </div>
            <div class="hoschild">
                <a href="city.php">
                    <i class="far fa-hospital"></i>
                    <h1> Barrackpore CITY Hospital </h1>
                </a>
            </div>
        </div>
    </div>
    <section class="foot">
        <h1>Indian Health Portal</h1>
    </section>
</body>

</html>