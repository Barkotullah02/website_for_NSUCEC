<?php
include "validate.php";
include "db_connection.php";
date_default_timezone_set('Asia/Dhaka');

function escape_data($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);


       return $data;

    }

if (isset($_POST['add'])) {

    $password = $_POST['password'];

    if ($password == $db_password) {

        $name = escape_data($_POST['name']);
        $nsu_id = $_POST['nsu_id'];
        $contact = $_POST['contact'];
        $email = escape_data($_POST['email']);
        $member_type = escape_data($_POST['member_type']);
        $recruitment_batch = $_POST['recruitment_batch'];
        $new_password = escape_data($_POST['nsu_id']);
        $date = date("Y-m-d h:i:sa");


        $query = "INSERT INTO users(name, member_type,	contact,	email,	password,	nsu_id,	recruitment_batch, added_by, time_date) VALUES ('$name', '$member_type' , $contact, '$email', '$new_password', $nsu_id, $recruitment_batch, '$full_name', '$date')";

        $insert = mysqli_query($connection, $query);




    }
    elseif ($password != $db_password) {

        header("Location: add_new_user.php?source=password_does_not_match");
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Other actions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="add_new_user.php">Add new user</a>
                            </li>
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

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="container col-xs-12">
                        <form action="add_new_user.php" method="post" enctype="multipart/form-data" class="form-group">

                            <label for="member_type" >Member type</label><br>
                            <input type="radio" name="member_type" value="probationary member"><span> Probationary member</span><br>
                            <input type="radio" name="member_type" value="general member"><span> General member</span><br>
                            <input type="radio" name="member_type" value="senior member"><span> Senior member</span><br>
                            <input type="radio" name="member_type" value="in-charge"><span> In charge</span><br>
                            <input type="radio" name="member_type" value="sub-eb"><span> Sub executive body</span><br>
                            <input type="radio" name="member_type" value="eb"><span> Executive body</span><br>
                            <label for="full_name" >Enter full name</label>
                            <input class="form-control" placeholder="Full name" type="text" name="name"><br>
                            <label for="nsu_id" >NSU ID</label>
                            <input class="form-control" placeholder="Enter NSU ID" type="number" name="nsu_id"><br>
                            <label for="full_name" >Contact number</label>
                            <input class="form-control" placeholder="Enter contact number" type="text" name="contact"><br>
                            <label for="email" >Email address</label>
                            <input class="form-control" placeholder="Enter email address" type="email" name="email"><br>
                            <label for="recruitment_batch" >Recruitment Batch</label>
                            <input class="form-control" placeholder="Enter recruitment batch" type="number" name="recruitment_batch"><br>
                            <label for="password" >Enter your password to add new user</label>
                            <input class="form-control" placeholder="password" type="password" name="password"><br>
                            <input class="form-control btn btn-primary" value="ADD NEW USER" type="submit" name="add">
                        </form>
                    </div>

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
