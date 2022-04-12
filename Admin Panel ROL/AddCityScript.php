<?php
include 'dbconfig.php';
$city_name=$_POST['cityName'];
$sql = "INSERT INTO  city (city_name)
VALUES ('$city_name')";

if (mysqli_query($conn, $sql)) {
  echo "New city inserted successfully";
  header("Location:AddNewCity.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>