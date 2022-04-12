<?php

include 'dbconfig.php';
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eylor Enlisting | All Subscriber</title>

   <?php
include 'allcss.php';
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  
  <!-- /.navbar -->
  <?php 
  include ('navbar.php');
?>
  <!-- Main Sidebar Container -->
    <?php
    include('sidebar.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Users</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">All Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
       <?php
       include 'dbconfig.php';
       $sql = "SELECT  * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["product_id"]. " - Name: " . $row["product_name"]. " age :" . $row["product_age"]. "<br>";
    // echo "product price: ".$row["product_price"]."<br>product description  : " .$row['product_description']."<br>item city".$row['item_city']."<br>";

     echo "<div class='card col-4' style='width:auto;margin-right:5px;' >
   
  <div class='card-body'>
    <h5 class='card-title'> Users Id : {$row['user_id']} </h5>
    <p class='card-text'>
       Email:- {$row['user_email']}
       <br>Full Name: {$row["user_fullname"]}

  <br>  Phone No: {$row['user_phone']}
  <br> user House NO :{$row['user_hno']}      

    .</p>
    <a href='#' class='btn btn-primary'> update </a>
    <a href='#' class='btn btn-secondary'> Account Delete </a>
  </div>
</div>";

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
     
       ?>
         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
         
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php
include 'alljs.php';
?>
</body>
</html>
