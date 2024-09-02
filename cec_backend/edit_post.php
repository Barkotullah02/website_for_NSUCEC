<?php
include "db_connection.php";
include "validate.php";
include "clear_text.php";

if (isset($_GET['sl'])) {
    $serial = $_GET['sl'];

    $query = "SELECT * FROM new_post WHERE sl = $serial ";

    $data = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($data)) {
        $headline = $row['headline'];
        $img_title = $row['image_title'];
        $details = $row['details'];
        $sl = $row['sl'];
    }
}


if (isset($_POST['update_post'])) {


    $u_sl = $_POST['serial'];
    $u_headline = $_POST['headline'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $u_img_title = $_POST['img_title'];
    $u_details = $_POST['details'];
    $u_headline = escape($u_headline);
    $u_img_title = escape($u_img_title);
    $u_details = escape($u_details);

    $u_headline = mysqli_real_escape_string($connection, $u_headline);
    $u_img_title = mysqli_real_escape_string($connection, $u_img_title);
    $u_details = mysqli_real_escape_string($connection, $u_details);
    $image = mysqli_real_escape_string($connection, $image);
    

    $u_query = "UPDATE new_post SET ";
    $u_query .= "headline = '$u_headline', ";
    $u_query .= "image_title = '$u_img_title', ";
    $u_query .= "details = '$u_details' ";
    $u_query .= "WHERE sl = $u_sl";

    $update_post = mysqli_query($connection, $u_query);

    if (!empty($image)) {

        $img_query = "UPDATE new_post SET ";
        $img_query .= "image = '$image' WHERE sl = $u_sl";

        $img_update = mysqli_query($connection, $img_query);

        move_uploaded_file($tmp_image, "images/$image");


        // code...
    }
    else if(empty($image)){
        echo "Image not uploaded";
    }


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

    <title>Admin panel template by Barkotullah</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/cec-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Messages</a>
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Other actions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="add_new_user.php">Add new user</a>
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

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-group" action="edit_post.php" method="post" enctype="multipart/form-data">
                            <input style="display: none;" value="<?php if(!empty($serial)){ echo $serial;} else echo ""; ?>" class="form-control" type="number" name="serial"><br>

                            <label for="headline" >Update post headline</label>
                            <input value="<?php if(!empty($headline)){ echo $headline;} else echo ""; ?>" class="form-control" type="text" name="headline"><br>

                            <label for="image" >Update image to your post</label>
                            <input class="form-control" type="file" name="image"><br>

                            <label for="head" >Update the title of your post image</label>
                            <input value="<?php if(!empty($img_title)){ echo $img_title;} else echo ""; ?>" class="form-control" type="text" name="img_title"><br>

                            <textarea placeholder="Describe your post" class="form-control" name="details"><?php if(!empty($details)){ echo $details;} else echo ""; ?></textarea><br>

                            <input value="UPDATE POST" type="submit" name="update_post" class="form-control btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

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
