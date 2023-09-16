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

        <title>Hack-Learning</title>


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

        <link href="css/responsive.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

    </head>

    <body>

        <div class="hero_area">
            <?php include_once 'header.php'?>
            <section class="slider_section ">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 mx-auto">
                            <div class="detail-box">
                                <h1>
                                    Explore Our Interactive Learning Platform
                                </h1>
                                <p>
                                    The internet could be the most powerful tool for individual and collective learning
                                    and progress we've ever known.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="find_container ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <form>
                                        <div class="form-row ">
                                            <div class="form-group col-lg-10">
                                                <input type="text" class="form-control" id="inputPatientName"
                                                    placeholder="Search or type a URL">
                                            </div>
                                            <div class="form-group col-lg-2">
                                                <div class="btn-box">
                                                    <button type="submit" class="btn ">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="detail-box">
                                <p>Technology will never replace great teachers, but technology in the hands of great
                                    teachers can be transformational.<br>Digital learning is not the future; it is the
                                    present...</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- end slider section -->
        </div>
        <!-- category section -->
        <section class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    About Us
                                </h2>
                            </div>
                            <p>
                                Our mission is to make learning accessible, engaging, and effective for everyone. We
                                strive to create a global community of learners, empowering individuals to acquire new
                                skills, broaden their horizons, and achieve personal and professional growth.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="images/wp.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end about section -->

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
                                    $sql = "SELECT * FROM courses";
                                   $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                                   if(mysqli_num_rows($result) > 0) 
	                                 {
                                  ?>
                    <?php while($row = mysqli_fetch_array($result))
		                               {?>
                    <div class="col-lg-4">
                        <div class="box" style="background-color:#C4D7B2; box-shadow: 5px 5px 5px 5px #888888;height:250px;width:400px;">
                            <div class="job_content-box">
                                <div class="img-box"
                                    style="height:140px;width:140px; border-radius:50%">
                                    <img src="user/<?php echo $row['image'];?>" alt="finee"
                                        style="height:140px;width:140px;border-radius:50%">
                                </div>
                                <div class="detail-boxs" style="margin-left:5px">
                                    <h1>
                                        <span><?php echo $row['name']?></span>
                                    </h1>
                                    <h6>
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                        <span>
                                            <?php echo $row['Price']?>
                                        </span>
                                    </h6>
                                    <div class="detail-info">
                                        <h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>
                                                india
                                                 </span>
                                        </h6>
                                        <h6>
                                            <span>
                                               <marquee behavior="" direction=""> <?php echo $row['des']?></marquee>
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

        <!-- expert section -->

        <section class="expert_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        LOOKING FOR EXPERTS LEARNER?
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed
                        quam nulla mauris
                        iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="box" style="background-color:#43505d">
                            <div class="img-box">
                                <img src="images/e1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Martin Anderson
                                </a>
                                <h6 class="expert_position">
                                    <span>
                                        Web Anaylzer
                                    </span>
                                    <span>
                                        41 Jobs Done
                                    </span>
                                </h6>
                                <span class="expert_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <p>
                                    Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse
                                    vel, sed quam
                                    nulla
                                    mauris iaculis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="box" style="background-color:#43505d">
                            <div class="img-box" style="background-color:#43505d">
                                <img src="images/e2.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Semanta Klores
                                </a>
                                <h6 class="expert_position">
                                    <span>
                                        Graphic Designer
                                    </span>
                                    <span>
                                        32 Jobs Done
                                    </span>
                                </h6>
                                <span class="expert_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <p>
                                    Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse
                                    vel, sed quam
                                    nulla
                                    mauris iaculis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <div class="box" style="background-color:#43505d">
                            <div class="img-box">
                                <img src="images/e3.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <a href="">
                                    Ryan Martines
                                </a>
                                <h6 class="expert_position">
                                    <span>
                                        SEO Expert
                                    </span>
                                    <span>
                                        27 Jobs Done
                                    </span>
                                </h6>
                                <span class="expert_rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                                <p>
                                    Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse
                                    vel, sed quam
                                    nulla
                                    mauris iaculis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="btn-box">
        <a href="">
          View All Freelancers
        </a>
      </div> -->
            </div>
        </section>

        <!-- end expert section -->
        <?php include_once 'footer.php'?>
        <!-- info section
  
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