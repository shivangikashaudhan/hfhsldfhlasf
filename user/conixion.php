<?php
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with the actual connection details
$con = mysqli_connect("localhost", "root", "", "fine");

if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>