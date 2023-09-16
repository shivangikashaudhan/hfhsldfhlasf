<?php

$conn = mysqli_connect("localhost", "root", "", "fine");

if (!$conn) {
    echo "Connection Failed";
}