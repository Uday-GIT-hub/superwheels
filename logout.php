<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);

header("location:login.php?logout=true");
?>
