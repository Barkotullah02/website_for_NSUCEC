<?php
include "validate.php";
include "db_connection.php";

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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Admin panel template by Barkotullah</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/cec-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="img/ceclogo.png">
    <script src="js/script.js" type="text/javascript"></script>


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">NSU CEC ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
           
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $full_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="height: 100%;">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="message.php"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>
                    <li>
                        <a href="new_admin.php"><i class="fa fa-fw fa-plus"></i> Add new admin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Forms</a>
                    </li>
                    <li>
                        <a href="post_action.php"><i class="fa fa-edit"></i> Take action to a post</a>
                    </li>
                    <li>
                        <a href="add_post.php"><i class="fa fa-fw fa-desktop"></i> ADD post</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Update a page <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="edit_home.php">Edit Homepage</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="background:#e1e0e0ba;">
            fvf
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
