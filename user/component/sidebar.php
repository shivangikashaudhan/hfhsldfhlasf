<?php  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #cover{
        background-color:#B8E7E1;
    }
    #we
    {
        font-family:cursive;
        font-size:30px;
    }
    #admin
    {
        font-family:cursive;
        color:black;
        font-weight:bold;
    }
</style>
<body>
<div class="bg-sidebar vh-100 w-50 position-fixed"id="cover">
            <div class="log d-flex justify-content-between">
                <h1 class="ms-3 ps-1 mt-3 h6 fw-bold" id="we">Hack-Learning</h1>
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
                <img class="rounded-circle" src="../assets/img/img-admin.jpeg" alt="img-admin" height="120" width="120">
            </div>
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
                <ul class="d-flex flex-column list-unstyled">
                    <li class="h4"><a class=" nav-link text-dark" href="course.php"><i
                                class="fal fa-bookmark me-2"></i> <span>Course</span></a></li>
                </ul>
                <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7"><a class="nav-link text-dark" href="../form/logout.php"><span>Logout</span><i
                                class="fal fa-sign-out-alt ms-2"></i></a></li>
                </ul>
            </div>

        </div>
</body>
</html>
