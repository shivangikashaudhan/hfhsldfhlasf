<!DOCTYPE html>
<html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Hack learning\about</title>


        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

        <!-- font awesome style -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <!-- nice select -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
            integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />

    </head>

    <body class="sub_page">

        <?php include_once 'header.php'?>

        <!-- job section -->
        <section class="job_section layout_padding" style="background-color:#A0C49D;color:black">
            <div class="container-fluid">
                <div class="heading_container heading_center">
                    <h2>
                        RECENT LEARNING WEBSITES
                    </h2>
                </div>
                <div class="job_container">
                    <h4 class="job_heading">
                        For Future Jobs
                    </h4>
                </div>

                <div class="row">

                    <?php
                                    include 'config.php';
                                    $sql = "SELECT * FROM finee";
                                   $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                                   if(mysqli_num_rows($result) > 0) 
	                                 {
                                  ?>
                    <?php while($row = mysqli_fetch_array($result))
		                               {?>
                    <div class="col-lg-4">
                        <div class="box" style="background-color:#C4D7B2; box-shadow: 5px 5px 5px 5px #888888;">
                            <div class="job_content-box">
                                <div class="img-box"
                                    style="height:140px;width:140px; margin-left:10px;border-radius:50%">
                                    <img src="form/<?php echo $row['image'];?>" alt="finee"
                                        style="height:140px;width:140px;border-radius:50%">
                                </div>
                                <div class="detail-boxs" style="margin-left:5px">
                                    <h5>
                                        W3 Schools
                                    </h5>
                                    <h6>
                                        Name:
                                        <span><?php echo $row['name']?></span>
                                    </h6>
                                    <h6>
                                        Eamil:
                                        <span><?php echo $row['email']?></span>
                                    </h6>
                                    <h6>
                                        moblie:
                                        <span><?php echo $row['mobile']?></span>
                                    </h6>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                india
                                                box </span>
                                        </h6>

                                        <h6>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>
                                                $1,465.00 USD
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="option-box">
                                <button class="fav-btn">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button onclick="window.open()">
                                <a href="<?php echo $row['link']?>" class="apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div> <br>
                    </div>
                    <?php } ?>
                    <?php }
                                    else
                                   {
                                   echo "<h2>No Record Found</h2>";
                                   }
                                   mysqli_close($conn);
                               ?>

                </div>
                <div>
                    <div>
        </section>
        <!-- end job section -->

        <?php include_once 'footer.php'?>

        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- nice select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
            integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>

    </body>

</html>