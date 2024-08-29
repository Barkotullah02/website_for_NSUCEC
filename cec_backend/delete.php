<?php
include "db_connection.php";
include "validate.php";

if (isset($_GET['sl'])) {
	$serial = $_GET['sl'];
}
if (isset($_POST['delete'])) {
	$password = $_POST['password'];

	$password = mysqli_real_escape_string($connection, $password);

	if ($password == $db_password) {
		$sl = $_POST['serial'];

		$query = "DELETE FROM new_post WHERE sl = $sl";

		$data = mysqli_query($connection, $query);

		// code...
	}
	else if ($password != $db_password) {
		echo "Failed to delete";
		// code...
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<title>Delete a post</title>
	<style type="text/css">
	body{
			background: #adacac;
			font-family: monospace;
		}
		.col-sm-6{
			margin-top: 10rem;
			width: 50%;
			margin-left: 25%;
			box-shadow: 1px 1px 1px 1px gray;
			padding: 15px;
			background: #a0a8a9;
		}
		@media only screen and (max-width: 720px) {
		.col-sm-6 {
		    margin-top: 10rem;
			width: 70%;
			margin-left: 15%;
			box-shadow: 1px 1px 1px 1px gray;
			padding: 15px;
			background: #a0a8a9;
		  }
		</style>
</head>
<body>
	<div class="col-sm-6">
		<form class="form-group" action="delete.php" method="post">
			<input style="display: none;" value="<?php if(!empty($serial)) echo $serial; else echo " "; ?>" type="number" name="serial"><br>
			<label for="password">Enter your password to delete the post</label>
			<input class="form-control" type="password" name="password"><br>
			<input class="btn btn-danger" type="submit" name="delete" value="DELETE">
		</form>

	</div>
</body>
</html>