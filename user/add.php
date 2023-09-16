<?php
include 'conixion.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $des = $_POST['des'];
    $link=$_POST['link'];
    $price = $_POST['price'];

    // Check if the 'image' file is uploaded and there are no errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image = $_FILES['image'];
        $filename = $image['name'];
        $filepath = $image['tmp_name'];
        $fileerror = $image['error'];
        if ($fileerror == 0) {
            $desfile = 'download/' . $filename;
            move_uploaded_file($filepath, $desfile);

            // Use prepared statement with placeholders
            $sql = "INSERT INTO courses (`name`, `des`,`link`,`Price`, `image`) VALUES ('$name','$des','$link','$price','$desfile')";
            $stmt = mysqli_prepare($con, $sql);

            // Check if the prepare was successful before proceeding
            if ($stmt) {
                // Bind the parameters to the statement
                //mysqli_stmt_bind_param($stmt, "ssss", $name, $des, $price, $desfile);
                
                // Execute the statement
                mysqli_stmt_execute($stmt);

                // Close the prepared statement after execution
                mysqli_stmt_close($stmt);
            } else {
                // Handle the case when the prepare fails
                die('Prepare failed: ' . mysqli_error($con));
            }
        } else {
            // Handle file upload error if needed
        }
    } else {
        // Handle file not uploaded error if needed
    }
}
?>
