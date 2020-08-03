<?php
include "../conn.php";
include "header.php";

if (isset($_POST['u_name'])) {

    $u_name = $_POST['u_name'];
    $u_password = $_POST['u_password'];

    $sql = "SELECT * FROM tbl_signup WHERE u_name='" . $u_name . "'AND u_password='" . $u_password . "' ";
    //echo $sql; die();
    session_start();
    $_SESSION['admin_name'] = $u_name;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header("Location: loginfail.php");
    } else {
        header("location: ./dashbord/home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style2.css" class="rel">
</head>

<body>
    <section class="formsign">
        <div class="one1">
            <h1>Log-IN</h1>
        </div>
        <div class="one2">
            <div class="container">
                <form action="login.php" method="post">
                    <div class="col-1">
                        USERNAME
                    </div>
                    <input type="text" style="font-weight: bolder" id="name" onclick="document.getElementById('name').value = '' " placeholder="Enter Username" name="u_name" required>
                    <div class="col-1">
                        PASSWORD
                    </div>

                    <input type="password" style="font-weight: bolder" placeholder="Enter Password" name="u_password" required>
                    <div class="btn">
                        <div class="relbtn">
                            <a href="index.php"><button class="btn-default" type="button">cancel</button></a>
                        </div>
                        <div class="relbtn">
                            <button class="btn-default" type="submit">Log-in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>