<?php
session_start();
unset($_SESSION['admin_name']);
session_destroy();
session_write_close();
header('Location: index.php');
die;
