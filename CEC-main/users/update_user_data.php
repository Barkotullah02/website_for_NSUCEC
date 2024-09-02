<?php
  include 'db_connection.php';
  include 'validate.php';

  $query = "SELECT * from users where nsu_id = $db_nsuid";

  $data = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($data)){
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



  if (isset($_POST['update'])) {




    if (!empty($_POST['u_name'])) {

      $u_name = $_POST['u_name'];

      $n_query = "UPDATE users set name = '$u_name' where nsu_id = $db_nsuid";

      $u_nquery = mysqli_query($connection, $n_query);

        
    }
    if (!empty($_POST['u_contact'])) {

      $u_contact = $_POST['u_contact'];

      $c_query = "UPDATE users set contact = $u_contact where nsu_id = $db_nsuid";

      $c_nquery = mysqli_query($connection, $c_query);
        
    }
    if (!empty($_POST['u_position'])) {

      $u_position = $_POST['u_position'];

    }
    if (!empty($_POST['u_pass'])) {

      $u_password = $_POST['u_pass'];
    $u_re_password = $_POST['u_re_pass'];
        
    }
    if (!empty($_POST['u_email'])) {
    $u_email = $_POST['u_email'];
        
    }
    if (!empty($_POST['u_description'])) {
        
      $u_description = $_POST['u_description'];

    }
    if (!empty($_FILES['profile_img'])) {

      $image = $_FILES['profile_img']['name'];
      $tmp_image = $_FILES['profile_img']['tmp_name'];
        
    }
    if (!empty($_POST['u_achievements'])) {
        
      $u_achievements = $_POST['u_achievements'];

    }


    $u_skill = " ";

    if (isset($_POST['skill1'])) {

      $u_skill = $_POST['skill1'] . ", ";

    }
    if (isset($_POST['skill2'])) {

      $u_skill .= $_POST['skill2'] . ", ";

    }
    if (isset($_POST['skill3'])) {

      $u_skill .= $_POST['skill3'] . ", ";

    }
    if (isset($_POST['skill4'])) {

      $u_skill .= $_POST['skill4'] . ", ";

    }
    if (isset($_POST['skill5'])) {

      $u_skill .= $_POST['skill5'] . ", ";

    }
    if (isset($_POST['skill6'])) {

      $u_skill .= $_POST['skill6'] . ", ";

    }
    if (isset($_POST['skill7'])) {

      $u_skill .= $_POST['skill7'] . ", ";

    }
    if (isset($_POST['skill8'])) {

      $u_skill .= $_POST['skill8'] . ", ";

    }
    if (isset($_POST['skill9'])) {

      $u_skill .= $_POST['skill9'] . ", ";

    }
    if (isset($_POST['skill10'])) {

      $u_skill .= $_POST['skill10'] . ", ";

    }
    if (isset($_POST['skill11'])) {

      $u_skill .= $_POST['skill11'] . ", ";

    }
    if (isset($_POST['new_skill'])) {

      $u_skill .= $_POST['new_skill'] . ", ";

    }

    


  }


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
    *{
      font-family: monospace;
      font-size: 102%;
    }
		@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #a1c4fd;

/* Chrome 10-25, Safari 5.1-6 */
background: #1ebcc5;

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: #1ebcc5;
}

.bg-indigo {
background-color: #003955;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}

.card{
  background: #9cf8ff !important;
}
	</style>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<title>Update data</title>
</head>
<body>


	<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div data-mdb-input-init class="form-outline">
                        <form action="update_user_data.php" method="post" enctype="multipart/form-data">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="u_name" value="<?php echo $db_name; ?>">
                        <label class="form-label" for="form3Examplev2">Name</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="u_contact" value="<?php echo $db_contact; ?>">
                        <label class="form-label" for="form3Examplev2">Contact</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" name="u_email" value="<?php echo $db_email; ?>">
                        <label class="form-label" for="form3Examplev3">Email address</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <select data-mdb-select-init name="u_position" style="background: #9cf8ff !important;" >
                      <option value="<?php echo $db_member_type; ?>" ><?php echo $db_member_type; ?></option>
                      <option value="probationary member">probationary member</option>
                      <option value="general member">general member</option>
                      <option value="in charge">in charge</option>
                      <option value="sub executive body">sub executive body</option>
                      <option value="executive body">executive body</option>
                    </select>
                  </div>

                  <div class="mb-4 pb-2">
                    <div data-mdb-input-init class="form-outline">
                      <input type="file" id="form3Examplev4" class="form-control form-control-lg" name="profile_img" />
                      <label class="form-label" for="form3Examplev4">Upload your image</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                        <p>Select skills that suits you the most</p>

                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5" name="skill1" value="skill1">
                        <label class="form-label" for="form3Examplev5">skill1</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5" name="skill2" value="skill2">
                        <label class="form-label" for="form3Examplev5">skill2</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5" name="skill3" value="skill3">
                        <label class="form-label" for="form3Examplev5">skill3</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5" name="skill4" value="skill4">
                        <label class="form-label" for="form3Examplev5">skill4</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5" name="skill5" value="skill5">
                        <label class="form-label" for="form3Examplev5">skill5</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5" name="skill6" value="skill6">
                        <label class="form-label" for="form3Examplev5">skill6</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5"  name="skill7" value="skill7">
                        <label class="form-label" for="form3Examplev5">skill7</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5"  name="skill8" value="skill8">
                        <label class="form-label" for="form3Examplev5">skill8</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5"  name="skill9" value="skill9">
                        <label class="form-label" for="form3Examplev5">skill9</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5"  name="skill10" value="skill10">
                        <label class="form-label" for="form3Examplev5">skill10</label>
                      </div>
                      <div data-mdb-input-init class="form-outline">
                        <input type="checkbox" id="form3Examplev5"  name="skill11" value="skill11">
                        <label class="form-label" for="form3Examplev5">skill11</label>
                      </div>
                      <div data-mdb-input-init class="form-outline" id="newSkillSection">
                        <button id="newSkillBtn" class="btn btn-outline-primary" type="submit" onclick="newSkillInput()" >ADD NEW SKILL</button>
                      </div>
                      <script type="text/javascript">
                        $(document).ready(function () {
                          $('#newSkillBtn').click(function (evt) {
                            evt.preventDefault();
                          });
                        });
                      </script>
                        <div data-mdb-input-init class="form-outline" id="newSkillForm" style="display: none;">
                          <input type="text" id="form3Examplev4" class="form-control form-control-lg" placeholder="add new skill" name="new_skill" />
                          <label class="form-label" for="form3Examplev4">Add a new skill</label>
                          <script type="text/javascript">

                            function newSkillInput() {
                              document.getElementById('newSkillSection').style.display = 'none';
                              document.getElementById('newSkillForm').style.display = 'inline-block';
                            }
                          </script>
                        </div>

                    </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Details Information</h3>

                  <div class="mb-4 pb-2">
                    <div data-mdb-input-init class="form-outline form-white">
                      <textarea type="text" id="form3Examplea2" class="form-control form-control-lg" name="u_desription" placeholder="a short bio of you"><?php echo $db_description; ?></textarea>
                      <label class="form-label" for="form3Examplea2">Description</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div data-mdb-input-init class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" name="u_achievements" value="<?php echo $db_achievements; ?>" placeholder='your achievements here'/>
                      <label class="form-label" for="form3Examplea3">Achievements</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                    </div>
                  </div>
                  <div class="mb-4">
                    <div data-mdb-input-init class="form-outline form-white">
                        <input type="password" id="form3Examplea4" class="form-control form-control-lg" name="u_pass" placeholder="enter your new password" />
                        <label class="form-label" for="form3Examplea4">Change password</label>
                    </div>
                  </div>
                  <div class="mb-4">
                    <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" id="form3Examplea5" class="form-control form-control-lg" name="u_re_pass" placeholder="re-enter your new password" />
                        <label class="form-label" for="form3Examplea5">Re-enter new password</label>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div data-mdb-input-init class="form-outline form-white">
                      <input type="password" id="form3Examplea9" class="form-control form-control-lg" name="password" placeholder="enter your old password" />
                      <label class="form-label" for="form3Examplea9">Enter your password to save changes</label>
                    </div>
                  </div>

                  <input  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-warning btn-lg"
                    data-mdb-ripple-color="dark" value="UPDATE DATA" name="update">

                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>