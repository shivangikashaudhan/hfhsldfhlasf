<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM finee WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
        echo "<img src='$row[image]'style='height:100px; width:100px; border-radius:50%';> ";
        header('Location:../user/course.php');
        
        
    }
?>
