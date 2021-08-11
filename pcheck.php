<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'id17217756_uday', 'RV8pAl2WJBb05=no', 'id17217756_superwheels');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

    if (password_verify($password, $row['password'])) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['firstname'];
        $_SESSION['lname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        echo 'true';
    }
    else {
        echo 'false';
    }

} else {
    echo 'false';
}

?>