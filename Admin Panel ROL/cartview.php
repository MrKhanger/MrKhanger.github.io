<?php
// include('dbconfig.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eylor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
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
  <title>Cart View </title>

  
  <?php
include 'allcss.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
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
            <h1 class="m-0">Cart View</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">cart </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            
         
         <?php
              $sql = "SELECT products.product_name, products.product_description ,products.product_price,products.product_pic_1 FROM products
INNER JOIN cart ON cart.p_id = products.product_id;";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                      
                  echo "<div class='card col-4' style='width: 2rem; margin-right:10px;'>
  <img class='card-img-top' src='{$row['product_pic_1']}' width='300px' height='200px' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'> {$row['product_name']} </h5>
    <p class='card-text'>
    {$row['product_description']}
    .</p>
    <a   class='btn btn-primary edit_data' id=' '> update </a>
    <a href='#' class='btn btn-primary'> Delete </a>
  </div>
</div>";
                }
              } else {
                echo "0 results";
              }   
         ?>
       
      </div>
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

<!-- jQuery -->
 
   
 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

<?php
include 'alljs.php';
?>
</body>
</html>
