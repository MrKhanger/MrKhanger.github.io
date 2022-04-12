<?php 
  include 'dbconfig.php';
  $cat_name=$_POST['cat_name'];
  $cat_desc=$_POST['cat_desc'];
  $cat_icon=$_POST['cat_icon'];

$sql = "INSERT INTO  product_categories (cat_name,cat_desc,cat_icon)
VALUES ('$cat_name','$cat_desc','$cat_icon')";

if (mysqli_query($conn, $sql)) {
  echo "New cat inserted successfully";
  header("Location:AddProductCategory.php");
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>