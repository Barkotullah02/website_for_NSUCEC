<?php
include 'nav.php';
$m_id = $_GET['m_id'];

$sql = "SELECT * FROM members WHERE Member_Id = $m_id";
$m_num = mysqli_query($connection, $sql);
while ($m_row = mysqli_fetch_assoc($m_num)) {
    $m_name = $m_row['Member_Name'];
    $m_id = $m_row['Member_Id'];
    $m_image = $m_row['Member_Image'];
    $m_description = $m_row['Member_Description'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Member Details</title>
    <style>
        .content-div {
            margin-left: 15%;
            margin-right: 15%;
            margin-top: 2%;
        }
        .card-body {
            height: 300px; /* Set the height */
            width: 500px; /* Set the width */
        }
        .list-unstyled li {
            margin-bottom: 5px; /* Add space between list items */
        }
    </style>
</head>
<body>
    <div class="content-div">
        <!-- Picture and name -->
        <div class="d-flex align-items-center mb-3"> 
            <div class="border rounded-circle border-primary overflow-hidden" style="width: 300px; height: 300px;">
                <img src="./<?php echo $m_image; ?>" alt="Image" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="ms-4"> <!-- Added ms-4 for margin between image and name -->
                <h1><?php echo $m_name; ?></h1> 
                <h4><?php echo "Probationary member"; ?></h4> 
                <h6><?php echo "Phone"; ?></h6> 
                <h6><?php echo "Email"; ?></h6> 
                <h6><?php echo "Linkedin:"; ?></h6> 
                <h6><?php echo "Facebook"; ?></h6> 
            </div> 
        </div>

       <div class="mt-6" style="margin-left:300px">
           <?php echo $m_description; ?>
        </div> 

       <!-- Dynamic content display section -->
       <div class="d-flex justify-content-left mt-4 gap-3">
            <button class="btn btn-primary" type="button" id="showSkills">
                Skills
            </button>
            <button class="btn btn-primary" type="button" id="showAchievements">
                Achievements
            </button>
        </div>

        <div class="mt-4 style">
            <!-- Section where content will be displayed -->
            <div id="contentSection" class="card card-body mb-3">
                <!-- Content will be injected here by JavaScript -->
                <h1>Skills</h1>
                <ul class="list-unstyled">
                    <li>- Skill 1</li>
                    <li>- Skill 2</li>
                    <li>- Skill 3</li>
                </ul>  
            </div>
        </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('showSkills').addEventListener('click', function() {
            document.getElementById('contentSection').innerHTML = `
                <h1>Skills</h1>
                <ul class="list-unstyled">
                    <li>- Skill 1</li>
                    <li>- Skill 2</li>
                    <li>- Skill 3</li>
                </ul>
            `;
        });

        document.getElementById('showAchievements').addEventListener('click', function() {
            document.getElementById('contentSection').innerHTML = `
                <h1>Achievements</h1>
                <ul class="list-unstyled">
                    <li>- Achievement 1</li>
                    <li>- Achievement 2</li>
                    <li>- Achievement 3</li>
                </ul>
            `;
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php  include 'footer.php';?>
</body>
</html>
