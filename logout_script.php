<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
session_destroy();
$m = '<script>alert("Logged Out")</script>';
header('location: index.php?m=' . $m);
