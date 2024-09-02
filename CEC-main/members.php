<?php include "nav.php";
include "db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Members</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <h3 class="text-center">Our Members</h3>

   <!-- Flexbox container to align cards side by side -->
   <div class="d-flex flex-wrap justify-content-center">
   <?php
   $m_type=$_GET['m_type'];
   $sql = "SELECT * from members WHERE m_type=$m_type";
   $m_num = mysqli_query($connection, $sql);
   while($m_row = mysqli_fetch_assoc($m_num)){

       $m_name =  $m_row['Member_Name'];
       $m_id = $m_row['member_Id'];
       $m_image = $m_row['Member_Image'];

   ?>

   <div class="card m-2" style="width: 18rem;">
       <img class="card-img-top" src="./<?php echo $m_image; ?>" alt="Card image cap">
       <div class="card-body">
           <h5 class="card-title"><?php echo $m_name; ?></h5>
           <p class="card-text">A quick one to solve any problem.</p>
           <a href="membersinfo.php?m_id=<?php echo $m_id; ?>" class="btn btn-primary">Stalk </a>
       </div>
   </div>
   <?php
   }
   ?>
   </div>

   <!-- Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <?php  include 'footer.php';?>
</body>
</html>
