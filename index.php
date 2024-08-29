<?php
include "cec_backend/db_connection.php";

$query = "SELECT * FROM new_post order by sl desc";

$posts = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cec_backend/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="cec_backend/css/bootstrap.min.css">
	<title>Posts from NSU-CEC</title>
</head>
<body>
	<a href="cec_backend/index.php">admin</a>
	<section class="container bg-success">
<?php

					while ($row = mysqli_fetch_assoc($posts)) {
						$headline = $row['headline'];
						$post_date = $row['post_date'];
						$post_by = $row['post_by'];
						$image = $row['image'];
						$image_title = $row['image_title'];
						$details = $row['details'];
					?>
	
			<div class="container" style="width: 60%; float: left; margin: 2rem;">
				<div class="container">
					
					<div class="h3"><?php echo "$headline"; ?></div>
					<div class="h5 date"><?php echo "$post_date"; ?></div>
					<blockquote class="blockquote">
						<footer class="blockquote-footer">This is posted by <?php echo "$post_by"; ?></footer>
					</blockquote>
					<div class="text-center" style="width:50%; float: left;">
						<img class="img img-thumbnail" width="100%" src="cec_backend/images/<?php echo "$image"; ?>"><br>
						<span class="" style="color: lightcoral; font-family: cursive;"><?php echo "$image_title"; ?></span>
					</div>
					<div style="text-align: justify; display: inline-block; width:60%; float:left;"><?php echo "$details"; ?></div>
				</div>
				
			</div>
		</div>
		<?php } ?>
	</section>
	

</body>
</html>