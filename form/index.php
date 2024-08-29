<?php
include "db_connection.php";

function escape($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

$app_name = '';
$app_email = '';
$app_id = '';

if (isset($_POST['apply'])) {

	$name = $_POST['name'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$department = $_POST['department'];
	$skill = $_POST['skill'];
	$describe = $_POST['describe'];
	$department1 = $_POST['club-dept-1'];
	$department2 = $_POST['club-dept-2'];
	$department3 = $_POST['club-dept-3'];
	$department4 = $_POST['club-dept-4'];

	$name = mysqli_real_escape_string($connection, $name);
	$contact = mysqli_real_escape_string($connection, $contact);
	$id = mysqli_real_escape_string($connection, $id);
	$email = mysqli_real_escape_string($connection, $email);
	$department = mysqli_real_escape_string($connection, $department);

	$name = escape($name);
	$id = escape($id);
	$email = escape($email);
	$contact = escape($contact);
	$department = escape($department);
	$skill = escape($skill);
	$describe = escape($describe);
	$department1 = escape($department1);
	$department2 = escape($department2);
	$department3 = escape($department3);
	$department4 = escape($department4);

	$club_dept = $department1 . $department2 . $department3 . $department4;

	$application_check = "SELECT * FROM pm_application WHERE nsu_id = '{$id}'";
	$check = mysqli_query($connection, $application_check);

	while ($row = mysqli_fetch_assoc($check)) {
		$app_name = $row['name'];
		$app_email = $row['email'];
		$app_id = $row['nsu_id'];
	}

	if ( ($app_email == $email) || ($app_id == $id) ){

		header("Location: applied.php");
	}
	else{

		$query = "INSERT INTO pm_application(name, email, contact, nsu_id, department) ";
		$query .= "VALUES('$name', '$email', '$contact', '$id', '$department')";

		$insert = mysqli_query($connection, $query);
	}


	
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/ceclogo.png">
	<title>Sign up this form to be a member of NSU-CEC</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body{
			background: #032347c2;
		}
		.banner-logo{
			width: 100%;
			margin-bottom: 15px;
			overflow: hidden;

		}
		.img-logo{
			width: 40%;
			float: left;
		}
		.club-text{
			width: 60%;
			float: right;
		}
		.logo{
			float: right;
			margin-top: 5px;
		}
		.club-name{
			display: inline-block;
			float: left;
			font-family: arial black;
			color: black;
			font-size: 1.7rem !important;
			margin-left: 10px;
			padding: 2rem;
			margin-top: 7px;
		}
		#form{
			width: 100%;
			overflow: hidden;
			font-size: 1.7rem;
			color: black;
			font-family: sans-serif;
		}
		.form-align{

			margin-left: 25%;
		}

		@media only screen and (max-width: 729px){

			.form-align{

			margin-left: 0%;
		}
		.banner-logo{
			width: 100%;
			margin-bottom: 15px;
			overflow: hidden;
			text-align: center;

		}
		.img-logo{
			width: 100%;
		}
		.club-text{
			width: 100%;

		}
		.logo{
			margin-right: 37%;
		}
		.club-name{
			display: inline-block;
			font-family: arial black;
			color: black;
			font-size: 1.7rem !important;
			margin-left: 10px;
			padding: 2rem;
			margin-top: 7px;
			margin-left: 10%;
		}

		}
		@media only screen and (max-width: 653px){

			.form-align{

			margin-left: 0%;
		}
		.banner-logo{
			width: 100%;
			margin-bottom: 15px;
			overflow: hidden;
			text-align: center;

		}
		.img-logo{
			width: 100%;
		}
		.club-text{
			width: 100%;

		}
		.logo{
			margin-right: 32%;
		}
		.club-name{
			display: inline-block;
			font-family: arial black;
			color: black;
			font-size: 1.7rem !important;
			margin-left: 10px;
			padding: 2rem;
			margin-top: 7px;
			margin-left: 5%;
		}

		}
		@media only screen and (max-width: 667px){

			.form-align{

			margin-left: 0%;
		}
		.banner-logo{
			width: 100%;
			margin-bottom: 15px;
			overflow: hidden;
			text-align: center;

		}
		.img-logo{
			width: 100%;
		}
		.club-text{
			width: 100%;

		}
		.logo{
			margin-right: 37%;
		}
		.club-name{
			display: inline-block;
			font-family: arial black;
			color: black;
			font-size: 1.7rem !important;
			margin-left: 10px;
			padding: 2rem;
			margin-top: 7px;
			margin-left: 7%;
		}

		}
		@media only screen and (max-width: 915px){

			.form-align{

			margin-left: 0%;
		}
		.banner-logo{
			width: 100%;
			margin-bottom: 15px;
			overflow: hidden;
			text-align: center;

		}
		.img-logo{
			width: 100%;
		}
		.club-text{
			width: 100%;

		}
		.logo{
			margin-right: 39%;
		}
		.club-name{
			display: inline-block;
			font-family: arial black;
			color: black;
			font-size: 1.7rem !important;
			margin-left: 10px;
			padding: 2rem;
			margin-top: 7px;
			margin-left: 10%;
		}

		}


	</style>
</head>
<body>

	<div class="banner-logo">
		<div class="img-logo"><img src="images/ceclogo.png" class="logo" height="100px" width="100px"></div>
		<div class="club-text"><b class="club-name">North South University<br>Computer & Engineering Club </b></div>
	</div>

<div id="form">
	<div class="form-align col-sm-6">
		<form class="form-group" action="index.php" method="post">
			<label for="name">Enter your name</label>
			<input class="form-control" type="text" name="name" placeholder="Your name according to NSU ID" required><br>
			<label for="name">ID</label>
			<input class="form-control" type="text" name="id" placeholder="NSU ID no." required><br>
			<label for="email">Enter email address</label>
			<input class="form-control" type="email" name="email" placeholder="Your NSU email address" required><br>
			<label for="contact">Enter your contact no.</label>
			<input class="form-control" type="text" name="contact" placeholder="Contact number" required><br>
			<label for="department">Department & Major</label>
			<input class="form-control" type="text" name="department" placeholder="Your department and major here" required><br>
			<label for="skills">What skills do you have?</label>
			<input class="form-control" type="text" name="skill" placeholder="Write down your skills here" required><br>
			<label for="describe">Describe yourself in 3 words</label>
			<input class="form-control" type="text" name="describe" placeholder="Write down three best words that suits you the most" ><br>
			<label for="cec-dept">In which departmet you want to work in future?</label><br>
			<input type="radio" name="club-dept-1" value="Department-1"><b> Department-1</b><br>
			<input type="radio" name="club-dept-2" value="Department-2"><b>	Department-2</b><br>
			<input type="radio" name="club-dept-3" value="Department-3"><b>	Department-3</b><br>
			<input type="radio" name="club-dept-4" value="Department-4"><b>	Department-4</b><br><br>
			<label for="riddle1">Answer this two riddles<br>Riddle-1:</label>
			<input class="form-control" type="text" name="riddle1" placeholder="Did you solve it?" required><br>
			<label for="riddle2">Riddle-2</label>
			<input class="form-control" type="text" name="riddle2" placeholder="Whoa! You are finding the 2nd riddle!!" required><br>
			<input class="btn btn-primary" type="submit" name="apply">
		</form>
	</div>
</div>

<div style="text-align: center;">
	<p>Developed and maintained by <b>Barkotullah Opu</b></p>
</div>

</body>
</html>