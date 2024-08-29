<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'nsu_cec';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
	echo "Not connected";
	// code...
}
?>