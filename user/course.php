
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid ">
        <?php 
            include "component/header.php";
        ?>
        <style>
          table{
     border: 1px solid black;
  border-collapse: collapse;
} </style>
      <!-- start student list table -->
            <div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add Courses</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add courses</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form  method="post" action="add.php" enctype="multipart/form-data">
                                <div class="">
                                    <label for="recipient-name" class="col-form-label">Image:</label>
                                    <input type="file" class="form-control" id="recipient-name" name="image">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Description:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="des">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Link:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="link">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Price:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="price">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">add Courses</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                <div class="courses">
                    <table class="table table-responsive" border=2px>
                        <thead>
                            <th>Image</th>
                            <th>Courses</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>prix</th>
                        </thead>
                        <tbody> 
                        <?php include 'conixion.php'; 
                                $requete = "SELECT * FROM courses";
                                $result = $con -> query($requete);

                                foreach($result as $value):
                            ?>

                            <tr> 
                            <td><img src="<?php echo $value['image'] ?>" alt="img" height="50" with="50"></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['des'] ?></td>
                                <td><?php echo $value['link'] ?></td>
                                <td><?php echo $value['Price'] ?></td>
                            </tr>
                            
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            
            </div>
               
        </div>
        <!-- end content page -->
    </main>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>