<?php
include "db_connection.php";

// SQL query to count the number of rows in the members table
$sql = "SELECT COUNT(*) as total FROM members";

// Execute the query
$result = mysqli_query($connection, $sql);

// Fetch the result
$row = mysqli_fetch_assoc($result);

// Get the count from the fetched row
$totalMembers = $row['total'];




if (isset($_POST['fc_update'])) {
    $description11 = $_POST['fc_details'];
    $image11 = $_FILES['fc_image']['name'];
    $tmp_image11 = $_FILES['fc_image']['tmp_name'];

    $description11 = mysqli_real_escape_string($connection, $description11);
    $image11 = mysqli_real_escape_string($connection, $image11);

    $u_query1 = "UPDATE startings SET ";
    $u_query1 .= "description = '$description11' ";
    $u_query1 .= "WHERE serial = 1";
    $update1 = mysqli_query($connection, $u_query1);

     if (!empty($image11)) {

        $img_query1 = "UPDATE startings SET ";
        $img_query1 .= "image = '$image11' WHERE serial = 1";

        $img_update = mysqli_query($connection, $img_query1);

        move_uploaded_file($tmp_image11, "img/pic/$image11");

    }
    elseif (empty($image11)) {
    }

}

if (isset($_POST['c1_update'])) {
    $u_c1headline = $_POST['c1_headline'];
    $u_c1details = $_POST['c1_details'];
    $u_imagec1 = $_FILES['c1_image']['name'];
    $tmp_imagec1 = $_FILES['c1_image']['tmp_name'];

    $u_c1details = mysqli_real_escape_string($connection, $u_c1details);
    $u_imagec1 = mysqli_real_escape_string($connection, $u_imagec1);

    $u_queryc1 = "UPDATE startings SET ";
    $u_queryc1 .= "headline = '$u_c1headline', ";
    $u_queryc1 .= "description = '$u_c1details' ";
    $u_queryc1 .= "WHERE serial = 2";
    $updatec1 = mysqli_query($connection, $u_queryc1);

     if (!empty($u_imagec1)) {

        $img_queryc1 = "UPDATE startings SET ";
        $img_queryc1 .= "image = '$u_imagec1' WHERE serial = 2";

        $img_updatec1 = mysqli_query($connection, $img_queryc1);

        move_uploaded_file($tmp_imagec1, "img/pic/$u_imagec1");

    }
    elseif (empty($u_imagec1)) {
    }

}

if (isset($_POST['c2_update'])) {
    $u_c2headline = $_POST['c2_headline'];
    $u_c2details = $_POST['c2_details'];
    $u_imagec2 = $_FILES['c2_image']['name'];
    $tmp_imagec2 = $_FILES['c2_image']['tmp_name'];

    $u_c2details = mysqli_real_escape_string($connection, $u_c2details);
    $u_imagec2 = mysqli_real_escape_string($connection, $u_imagec2);

    $u_queryc2 = "UPDATE startings SET ";
    $u_queryc2 .= "headline = '$u_c2headline', ";
    $u_queryc2 .= "description = '$u_c2details' ";
    $u_queryc2 .= "WHERE serial = 3";
    $updatec2 = mysqli_query($connection, $u_queryc2);

     if (!empty($u_imagec2)) {

        $img_queryc2 = "UPDATE startings SET ";
        $img_queryc2 .= "image = '$u_imagec2' WHERE serial = 3";

        $img_updatec2 = mysqli_query($connection, $img_queryc2);

        move_uploaded_file($tmp_imagec2, "img/pic/$u_imagec2");

    }
    elseif (empty($u_imagec2)) {
    }

}

if (isset($_POST['c3_update'])) {
    $u_c3headline = $_POST['c3_headline'];
    $u_c3details = $_POST['c3_details'];
    $u_imagec3 = $_FILES['c3_image']['name'];
    $tmp_imagec3 = $_FILES['c3_image']['tmp_name'];

    $u_c2details = mysqli_real_escape_string($connection, $u_c3details);
    $u_imagec2 = mysqli_real_escape_string($connection, $u_imagec3);

    $u_queryc3 = "UPDATE startings SET ";
    $u_queryc3 .= "headline = '$u_c3headline', ";
    $u_queryc3 .= "description = '$u_c3details' ";
    $u_queryc3 .= "WHERE serial = 4";
    $updatec3 = mysqli_query($connection, $u_queryc3);

     if (!empty($u_imagec3)) {

        $img_queryc3 = "UPDATE startings SET ";
        $img_queryc3 .= "image = '$u_imagec3' WHERE serial = 4";

        $img_updatec3 = mysqli_query($connection, $img_queryc3);

        move_uploaded_file($tmp_imagec3, "img/pic/$u_imagec3");

    }
    elseif (empty($u_imagec3)) {
    }

}

$query1 = "SELECT * FROM startings where serial = 1 ";

$data1 = mysqli_query($connection, $query1);

while ($row1 = mysqli_fetch_assoc($data1)) {
    $headline1 =  $row1['headline'];
    $description1 = $row1['description'];
    $image1 = $row1['image'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">

    <title>NSUCEC !!Under Construction!!</title>
    <link rel="icon" type="image/x-icon" href="img/ceclogo.png">
    <script src="js/script.js" type="text/javascript"></script>
</head>

<body>
    <!-- Banner -->
    <section></section>

    <!-- Navigation -->
    <?php include "nav.php"; ?>
    <!-- About Us -->
    <section class="first-container" onclick="openFcForm()" style="cursor: pointer;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <?php echo "$headline1"; ?>
                    <hr><br>
                    <p><?php echo "$description1"; ?></p>
                </div>
                <div class="col-5">
                    <img src="img/pic/<?php echo $image1; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-1">
                    <img src="img/section/ABOUT US.png" class="img-fluid my-auto" alt="">
                </div>
            </div>
        </div>
        </section>

        <div class="social-ref">
            <a class="social-link" href="#"><li class="fa fa-facebook scec"></li></a> 
            <a class="social-link" href="#"><li class="fa fa-instagram scec"></li></a>
            <a class="social-link" href="#"><li class="fa fa-twitter scec"></li></a>
        </div>
    </section>

    <!-- Number Box -->
    <section class="num-box">
        <div class="subNum">
            <div class="num3"><b class="counter-item">2015</b><p class="est">EST. SINCE</p></div>
            <div class="num1"><b class="counter-item-slow">11</b>K<p class="est">EVENTS</p></div>
            <div class="num2"><b class="counter-item-slow"><?php echo $totalMembers; ?></b>K<p class="est">MEMBERS</p></div>
        </div>
    </section>

    <!-- Why join CEC -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img src="img/section/WHY JOIN CEC_.png" alt="" class="">
                </div>

                <div class="col-11">
                    <section>
                    <div class="row" onclick="openC1Form()" style="cursor: pointer;">
                        <?php

                        $c1_query = "SELECT * from startings where serial = 2";
                        $c1_data = mysqli_query($connection, $c1_query);
                        while($c1_row = mysqli_fetch_assoc($c1_data)){

                            $c1headline =  $c1_row['headline'];
                            $c1description = $c1_row['description'];
                            $c1image = $c1_row['image'];

                        }

                        ?>
                        <div class="col-6">
                            <img src="img/pic/<?php echo "$c1image"; ?>" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6">
                            <h2><?php echo "$c1headline"; ?></h2>
                            <p><?php echo "$c1description"; ?></p>
                        </div>
                        </div>
    </section>
                        
                <section>
                    <div class="row" onclick="openC2Form()" style="cursor: pointer;">

                        <?php

                        $c2_query = "SELECT * from startings where serial = 3";
                        $c2_data = mysqli_query($connection, $c2_query);
                        while($c2_row = mysqli_fetch_assoc($c2_data)){

                            $c2headline =  $c2_row['headline'];
                            $c2description = $c2_row['description'];
                            $c2image = $c2_row['image'];

                        }

                        ?>


                        <div class="col-6">
                            <h2><?php echo "$c2headline"; ?></h2>
                            <p><?php echo "$c2description"; ?></p>
                        </div>
                        <div class="col-6">
                            <img src="img/pic/<?php echo "$c2image"; ?>" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row" onclick="openC3Form()" style="cursor: pointer;">
                        <?php

                        $c3_query = "SELECT * from startings where serial = 4";
                        $c3_data = mysqli_query($connection, $c3_query);
                        while($c3_row = mysqli_fetch_assoc($c3_data)){

                            $c3headline =  $c3_row['headline'];
                            $c3description = $c3_row['description'];
                            $c3image = $c3_row['image'];

                        }

                        ?>
                        <div class="col-6">
                            <img src="img/pic/<?php echo "$c3image"; ?>" alt=""
                                class="img-fluid">
                        </div>
                        <div class="col-6">
                            <h2><?php echo "$c3headline"; ?></h2>
                            <p><?php echo "$c3description"; ?></p>
                        </div>
                        </div>
                </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Events -->
    <section class="slide1" style="background-color: #1CBBC3">
        <div class="our-event">
            <img class="event-img" src="img/event_target.png">
            <img class="event-txt" src="img/our_events.png">
        </div>
        <div class="container">
         <div class="mySlidesAlign">
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img class="img-thumbnail" src="img/img_woods_wide.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img class="img-thumbnail" src="img/img_5terre_wide.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img class="img-thumbnail" src="img/img_mountains_wide.jpg" style="width:100%">
          </div>
            
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img class="img-thumbnail" src="img/img_lights_wide.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img class="img-thumbnail" src="img/img_nature_wide.jpg" style="width:100%">
          </div>
            
          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img class="img-thumbnail" src="img/img_snow_wide.jpg" style="width:100%">
          </div>

          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor img-thumbnail" src="img/img_woods.jpg" style="width:100%" onclick="pressSlide(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo cursor img-thumbnail" src="img/img_5terre.jpg" style="width:100%" onclick="pressSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo cursor img-thumbnail" src="img/img_mountains.jpg" style="width:100%" onclick="pressSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo cursor img-thumbnail" src="img/img_lights.jpg" style="width:100%" onclick="pressSlide(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo cursor img-thumbnail" src="img/img_nature.jpg" style="width:100%" onclick="pressSlide(5)" alt="Nature and sunrise">
            </div>    
            <div class="column">
              <img class="demo cursor img-thumbnail" src="img/img_snow.jpg" style="width:100%" onclick="pressSlide(6)" alt="Snowy Mountains">
            </div>
          </div>
        </div>
      </div>
     </div>
    </section>

    <!-- Eb Pannel -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <img src="img/section/MEET OUR EB PANEL.png" alt="" class="img-fluid">
                </div>
                <div class="col-11">
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 ">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0"><img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg"
                                        alt="" class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0">Mark Rockwell</h5>
                                        <p class="small text-muted">CEO - Consultant</p>
                                        <ul class="social mb-0 list-inline mt-3">
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0"><img src="https://bootstrapious.com/i/snippets/sn-cards/profile-3_ybnq8v.jpg"
                                        alt="" class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0">Mark Rockwell</h5>
                                        <p class="small text-muted">CEO - Consultant</p>
                                        <ul class="social mb-0 list-inline mt-3">
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0"><img src="https://bootstrapious.com/i/snippets/sn-cards/profile-2_ujssbj.jpg"
                                        alt="" class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0">Mark Rockwell</h5>
                                        <p class="small text-muted">CEO - Consultant</p>
                                        <ul class="social mb-0 list-inline mt-3">
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0"><img
                                        src="https://res.cloudinary.com/mhmd/image/upload/v1570799922/profile-2_ujssbj.jpg" alt=""
                                        class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0">Mark Rockwell</h5>
                                        <p class="small text-muted">CEO - Consultant</p>
                                        <ul class="social mb-0 list-inline mt-3">
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0"><img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg"
                                        alt="" class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0">Mark Rockwell</h5>
                                        <p class="small text-muted">CEO - Consultant</p>
                                        <ul class="social mb-0 list-inline mt-3">
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i
                                                        class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <!-- Card-->
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0"><img src="https://bootstrapious.com/i/snippets/sn-cards/profile-3_ybnq8v.jpg"
                                        alt="" class="w-100 card-img-top">
                                    <div class="p-4">
                                        <h5 class="mb-0">Mark Rockwell</h5>
                                        <p class="small text-muted">CEO - Consultant</p>
                                        <ul class="social mb-0 list-inline mt-3">
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Our Teams -->
<section class="our-team" style="background-color: #1CBBC3">
  <div class="team-slide">
    <div class="simg1">
      <img class="slide-1 img-thumbnail" src="img/img1.jpeg" alt="Image 1">
    </div>
    <div class="simg2">
      <img class="slide-2 img-thumbnail" src="img/img2.jpeg" alt="Image 2">
    </div>
    <div class="simg3">
      <img class="slide-3 img-thumbnail" src="img/image3.jpeg" alt="Image 3">
    </div>
</div>
  <!-- 2nd slides for our team ends here -->
  <div class="team-txt">
    <img src="img/team_txt.png" height="100%">
  </div>
</section>

    <!-- Member of the month -->
    <section class="best-member">
        <div class="best-member-img">
            <div class="card">
                <div class="card-img">
                    <img src="img/ceclogo.png" class="card-img-top1">
                </div>
                <div class="card-body">
                    <b class="card-title">Member of the month</b>
                </div>
            </div>
        </div>
        <div class="best-member-txt">
            <div class="bm-txt">
            <b class="bm-name"><h2>MD Hossain</h2>R & D Team</b>
            <p class="bm-txt-details">
                We are thrilled to shine the spotlight on MD HOSSAIN, our distinguished Member of the Month. This recognition is a testament to their outstanding contributions and unwavering dedication to our community.
            </p>
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <section class="our-partners">
        <img src="img/pr_partners.png" width="60%">
        <div class="pr-partner-img">
            <div class="pr-partner-img-align">
                <div class="prp-img">
                    <img src="img/fe.png" height="50px">
                </div>
                <div class="prp-img">
                    <img src="img/ittefaque.png" height="50px">
                </div>
                <div class="prp-img">
                    <img src="img/peoples_radio.png" height="50px">
                </div>
                <div class="prp-img">
                    <img src="img/dipto.png" height="50px">
                </div>
                <div class="prp-img">
                    <img src="img/fun.png" height="50px">
                </div>
                <div class="prp-img">
                    <img src="img/jago_news_24.png" width="100%">
                </div>
                <div class="prp-img">
                    <img src="img/mlbb.png" width="100%">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include "footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- custom js -->
    <script src="js/slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>

</html>