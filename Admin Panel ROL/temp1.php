
       <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eylor Enlisting | Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eylor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

 $sql = "SELECT  * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $counter=1;
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["product_id"]. " - Name: " . $row["product_name"]. " age :" . $row["product_age"]. "<br>";
    // echo "product price: ".$row["product_price"]."<br>product description  : " .$row['product_description']."<br>item city".$row['item_city']."<br>";
      
     echo "<div class='card col-4'  >
  <img class='card-img-top' src='{$row['product_pic_1']}'   height='200px' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'> {$row['product_name']} </h5>
    <p class='card-text'>
       product description:- {$row['product_description']}
       <br>product price : {$row["product_price"]}
       <br>product city :{$row['item_city']}

    .</p>
    
 
  <button type='button'  class='btn btn-outline-warning edit_data' value= '$counter'>update</button>
    <a href='#' class='btn btn-primary'> Delete </a>
  </div>
</div>";
$counter++;
 
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
<script>
	 $(document).on('click', '.edit_data', function() {
      console.log("Got It");
    });
</script>