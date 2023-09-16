<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>studens_list</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
    </head>

    <body class="bg-content">
        <main class="dashboard d-flex">
            <!-- start sidebar -->
            <?php 
            include "component/sidebar.php";
        ?>
            <!-- end sidebar -->

            <!-- start content page -->
            <div class="container-fluid px-4">
                <?php 
            include "component/header.php";
        ?>


                <!-- start student list table -->
                <div class="button-add-student">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">add Courses</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add courses</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="couseadd.php" enctype="multipart/form-data">
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Image:</label>
                                            <input type="file" class="form-control" id="recipient-name" name="Image">
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="Name">
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Description:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="Email">
                                        </div>
                                        <div class="">
                                            <label for="recipient-name" class="col-form-label">Prix:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="Phone">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">add
                                                Courses</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses">
                    <div class="container">
                        <?php include 'conixion.php'; 
                                $requete = "SELECT * FROM courses";
                                $result = $con -> query($requete);
                                foreach($result as $value):
                            ?>
                        <div class="row" style="display:flex">
                            <div class="col-4" >
                                <div class="card" style="border:2px solid black;border-radius:10px; margin:10px;padding:10px;display:flex">
                                    <h6>Image:<?php echo $value['image'] ?></h6>
                                    <h6>Name:<?php echo $value['Name'] ?></h6>
                                    <h6>Description:<?php echo $value['Description'] ?></h6>
                                    <h6>Price:<?php echo $value['Prix'] ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            </div>
            <!-- end content page -->
        </main>

        <script src="../js/script.js"></script>
        <script src="../js/bootstrap.bundle.js"></script>
    </body>

</html>