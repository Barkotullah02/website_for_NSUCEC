<?php
	include 'validate.php';
	include 'db_connection.php';

	if (isset($_POST['reset'])) {

		$password = $_POST['pass'];
		$re_pass = $_POST['re_pass'];

		if ($password == $re_pass) {

			if (strlen($password) < 6) {
				echo "<b style='color: lightcoral;'>password must be at least 6 characters</b>";
			}
			else{
				$query = "UPDATE users set password = '$password' where nsu_id = $db_nsuid";
				$reset = mysqli_query($connection, $query);
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<title>Reset password</title>
</head>
<body>

	<!-- Password Reset 13 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
                <img src="img/nsucec-logo.png" alt="NSUCEC Logo" width="100" height="100">
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Welcome <?php echo $db_name; ?> please reset to a new password to continue</h2>
            <form  action="reset_password.php" method="post">
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
	                  <div class="form-floating">
	                    <input type="password" class="form-control" name="pass" placeholder="enter a new password" required>
	                    <label for="pass" class="form-label">New password</label>
	                  </div>
	                  <div class="form-floating" style="margin-top: 10px;">
	                    <input type="password" class="form-control" name="re_pass" placeholder="enter a new password" required>
	                    <label for="re_pass" class="form-label">Re-type new password</label>
	                  </div>
		                </div>
		                <div class="col-12">
		                  <div class="d-grid my-3">
		                    <input type="submit" class="btn btn-primary btn-lg"  name="reset" value="Reset Password">
		                  </div>
		                </div>
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between text-center">
                    <a href="user_login.php" class="link-primary text-decoration-none text-center">Log In</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>