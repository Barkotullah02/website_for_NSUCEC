<?php
session_start();
include "db_connection.php";

if (!isset($_SESSION['member_type'])) {

	header("Location: user_login.php");
}

else if (isset($_SESSION['member_type'])) {

	$db_member_type = $_SESSION['member_type'];
	$db_name = $_SESSION['name'];
	$db_nsuid = $_SESSION['nsu_id'];
	$db_contact = $_SESSION['contact'];
	$db_email = $_SESSION['email'];
	$db_recruitment_batch = $_SESSION['recruitment_batch'];
	$db_skills = $_SESSION['skills'];
	$db_description = $_SESSION['description'];
	$db_image = $_SESSION['image'];
	$db_achievements = $_SESSION['achievements'];
	$db_password = $_SESSION['password'];
}

?>