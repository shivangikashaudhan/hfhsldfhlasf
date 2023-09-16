<?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

        // Check if the 'image' file is uploaded and there are no errors
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $image = $_FILES['image'];
            $filename = $image['name'];
            $filepath = $image['tmp_name'];
            $fileerror = $image['error'];
            if ($fileerror == 0) {
                $desfile = 'download/' . $filename;
                move_uploaded_file($filepath, $desfile);
            } 
        } 

        if ($password === $confirm_password) {
            $sql = "INSERT INTO finee (`name`, `email`,`mobile`,`link`,`password`,`image`) VALUES ('$name', '$email','$mobile','$link','$password','$desfile')";
            $result = mysqli_query($conn, $sql);
            exit();
        } else {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
        }
    }

   
?>


<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Login Form - Brave Coder</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Login Form" />
        <!-- //Meta tag Keywords -->

        <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

        <!--/Style-CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <!--//Style-CSS -->

        <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- form section start -->
        <section class="w3l-mockup-form">
            <div class="container">
                <!-- /form -->
                <div class="workinghny-form-grid">
                    <div class="main-mockup">
                        <div class="alert-close">
                            <span class="fa fa-close"></span>
                        </div>
                        <div class="w3l_form align-self">
                            <div class="left_grid_info">
                                <img src="images/image2.svg" alt="">
                            </div>
                        </div>
                        <div class="content-wthree">
                            <h2>Register Now</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="text" class="name" name="name" placeholder="Enter Your Name"
                                    value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required>
                                <input type="email" class="email" name="email" placeholder="Enter Your Email"
                                    value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                                <input type="number" class="mobile" name="mobile" placeholder="Enter Your mobile number"
                                    value="<?php if (isset($_POST['submit'])) { echo $mobile; } ?>" required>
                                <input type="text" class="link" name="link" placeholder="Enter Your link"
                                    value="<?php if (isset($_POST['submit'])) { echo $link; } ?>" required>
                                <input type="password" class="password" name="password"
                                    placeholder="Enter Your Password" required>
                                <input type="password" class="confirm-password" name="confirm-password"
                                    placeholder="Enter Your Confirm Password" required>
                                <input type="file" class="form-control" name="image" placeholder="Enter Your image"
                                    required>
                                <button name="submit" class="btn" type="submit" >Register</button>
                            </form>
                            <div class="social-icons">
                                <p>Have an account! <a href="index.php">Login</a>.</p>
                                <p>Have an account! .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //form -->
            </div>
        </section>
        <!-- //form section start -->
        <script src="js/jquery.min.js"></script>
        <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.main-mockup').fadeOut('slow', function(c) {
                    $('.main-mockup').remove();
                });
            });
        });
        </script>

    </body>

</html>