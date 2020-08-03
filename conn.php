<?php
$conn = mysqli_connect("localhost","root","souvikmondal", "health_portal");
if ($conn) {
} else {
    echo "failed" . mysqli_connect_error();
}
error_reporting(0);
