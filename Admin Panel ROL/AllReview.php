<?php
include 'dbconfig.php';
// Check connection
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eylor Enlisting | Dashboard</title>

  <?php
include 'allcss.php';

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            <h1 class="m-0">All Reviews</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">All Reviews</li>
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
       $sql = "SELECT  * FROM review";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["product_id"]. " - Name: " . $row["product_name"]. " age :" . $row["product_age"]. "<br>";
    // echo "product price: ".$row["product_price"]."<br>product description  : " .$row['product_description']."<br>item city".$row['item_city']."<br>";

     echo "<div class='card col-4' style='margin-right:1em;'  >
  <img class='card-img-top' src='{$row['pic']}'   height='200px' alt='Review image cap'>
  <div class='card-body'>
    <h5 class='card-title'> {$row['name']} </h5>
    <p class='card-text'>
       Email:- {$row['email']}
       <br>Messages: {$row["msg"]}
      

    .</p>
    <span id='review_id' style='display: none;'> {$row['id']} </span>
    <button  class='btn btn-primary edit_data'> update </button>
    <button   class='btn btn-secondary delete_data'>delete </button>
  </div>
</div>";

  }
} else {
  echo "0 results";
}


mysqli_close($conn);
     
       ?>
          <!-- ###############################################################################33 -->
         <div id="editmodal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">
                    <h4 class="modal-title">Review update</h4>   
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Reviewer Name:</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                           
                            
                             
                          <label>Reviewer Email:</label>  
                          <input type="text" name="review_email" id="review_email" class="form-control" />  
                          <br />  
                          <label>Message :</label>  
                          <input type="text" name="msg" id="msg" class="form-control" />  
                          <br />  
                          <input type="hidden" name="review_id" id="review_id" />  
                          <input type="submit" name="insert" id="update" value="update" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <!-- ##################################################################################################### -->
  
         
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

<script type="text/javascript">
  $(document).ready(function(){
    
 $('.edit_data').on('click',function(){

    $('#editmodal').modal('show');
    
   });
  });
   $(document).on('click', '.edit_data', function() {
      console.log("Got It");
      //var id = $(this).val();
      var first = $('#review_id').text();
      console.log(first);
       $.ajax({
        url: "adminbackend.php",
        type: 'POST',
        data: {
          review_id: first,
           
        },
        success: function(Result) {
          console.log(Result);
          $('#editmodal').html(Result);
        }
      });  
            console.log(review_id);
    });

    $(document).on('click','#update',function(e){
  e.preventDefault();

  var name =$('#name').val();
  var review_email = $('#review_email').val();
  var msg = $('#msg').val();
  var review_id = $('#review_id').text();
  console.log("Review id:"+review_id);
 
  console.log(name+review_email+msg+review_id);
  console.log("update click");
   $.ajax({

        url: "adminbackend.php",
        type: 'POST',
        data: {
          update_review_id: review_id,
          name:name,
          review_email:review_email,
          msg:msg


        },
        success: function(Result) {
          $('.modal-title').text(Result);
          console.log(Result);
         // console.log(update_review_id)

           
        }
      });
 });


    $(document).on('click','.delete_data',function(){
  console.log("delete click");
//var id = $(this).val();
  var first = $('#review_id').text();
      console.log(first);
       $.ajax({
        url: "adminbackend.php",
        type: 'POST',
        data: {
          delete_review_id: first,
           
        },
        success: function(Result) {
          console.log(Result);
          location.reload();
          //$('#editmodal').html(Result);
        }
      });


 });
</script>
<?php
include 'alljs.php';
?>

</body>
</html>
