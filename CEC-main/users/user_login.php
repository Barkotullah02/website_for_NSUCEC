<?php
include 'db_connection.php';
session_start();
ob_start();

if (isset($_POST['login'])) {
	$nsu_id = $_POST['nsu_id'];
	$password = $_POST['password'];

	$query = "SELECT * from users where nsu_id = $nsu_id";

	$data = mysqli_query($connection, $query);


		$db_nsuid = 0;
		$db_password = '';

	while ($row = mysqli_fetch_assoc($data)) {
		$db_member_type = $row['member_type'];
		$db_name = $row['name'];
		$db_contact = $row['contact'];
		$db_password = $row['password'];
		$db_email = $row['email'];
		$db_nsuid = $row['nsu_id'];
		$db_recruitment_batch = $row['recruitment_batch'];
		$db_skills = $row['skills'];
		$db_description = $row['description'];
		$db_image = $row['image'];
		$db_achievements = $row['achievements'];
	}
	if($db_password == $password){

		$_SESSION['member_type'] = $db_member_type;
		$_SESSION['name'] = $db_name;
		$_SESSION['nsu_id'] = $db_nsuid;
		$_SESSION['contact'] = $db_contact;
		$_SESSION['email'] = $db_email;
		$_SESSION['recruitment_batch'] = $db_recruitment_batch;
		$_SESSION['skills'] = $db_skills;
		$_SESSION['description'] = $db_description;
		$_SESSION['image'] = $db_image;
		$_SESSION['achievements'] = $db_achievements;


		if($db_password == $nsu_id){
			header("Location: reset_password.php");
		}

		else{
			header("Location: index.php");
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/nsucec-logo.png">
	<title>NSUCEC member login form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/ceclogo.png">
    <script src="js/script.js" type="text/javascript"></script>
    <style type="text/css">
    	body{
    		background: #003955;
    	}
    	.card{border: none;height: 420px}
    	.forms-inputs{position: relative}
    	.forms-inputs span{position: absolute;top:-18px;left: 10px;background-color: #fff;padding: 5px 10px;font-size: 15px}
    	.forms-inputs input{height: 50px;border: 2px solid #eee}
    	.forms-inputs input:focus{box-shadow: none;outline: none;border: 2px solid #000}
    	.btn{height: 50px}
    	.success-data{display: flex;flex-direction: column}
    	.bxs-badge-check{font-size: 90px}
    </style>
</head>
<body>
	<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            <div class="card px-5 py-5" id="form1">
	        	<div class="text-center" style="margin-bottom: 28px;">
					<img src="img/nsucec-logo.png" height="80px" width="80px" >
				</div>
				<form action="user_login.php" method="post" enctype="multipart/form-data" style="font-family: monospace;">
	                <div class="form-data" v-if="!submitted">
	                    <div class="forms-inputs mb-4">
	                    	<span>NSU ID</span>
	                    	<input class="w-100" autocomplete="off" type="number" name="nsu_id" placeholder=" enter your nsu id" required>
	                    </div>
	                    </div>
	                    <div class="forms-inputs mb-3">
	                    	<span>Password</span>
	                    	<input class="w-100" autocomplete="off" type="password" name="password" placeholder=" enter password" required>
	                    </div>
	                    <div class="mb-3"> <button type="submit" style="background: #1ebcc5; color: lightcyan;" class="btn w-100" name="login">LOGIN</button> </div>
	                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>