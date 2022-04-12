 <?php  
 //adminbackend.php  
 include 'dbconfig.php'; 
 //echo "{$_POST["product_id"]}";
 if(isset($_POST["product_id"]))  
 {  
      $query = "SELECT * FROM products WHERE product_id = '".$_POST["product_id"]."'";  
      $result = mysqli_query($conn, $query);  
        
      if (mysqli_num_rows($result) > 0) {
  // output data of each row
  if($row = mysqli_fetch_assoc($result)) {
     echo $row["product_name"];
     
echo '<div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <span id="msg" > </span>
                     </br><br>  
                     <h4 class="modal-title">'.$row["product_name"].'  </h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>   
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Product Name:</label>  
                          <input type="text" name="name" value="'.$row["product_name"].'" id="name" class="form-control" />  
                          <br />  
                          <label>Product Description</label>  
                          <textarea type="text" name="description"
                           value="" id="desc" class="form-control">'.$row["product_description"].'
                           </textarea>  
                          <br />  
                            
                             
                          <label>Product Price:</label>  
                          <input type="text" name="price" value="'.$row["product_price"].'" id="price" class="form-control" />  
                          <br />  
                          <label>Product city</label>  
                          <input type="text" name="city" id="city" value="'.$row["item_city"].'" class="form-control" />  
                          <br />  
                          
                          <input type="hidden" name="product_id" id="product_id" value="'.$row["product_id"].'" />  
                          <input  name="insert" id="update" value="update" class="btn btn-success update" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>';

  }
}
 else {
  echo "0 results";
}  
 

}
 if(isset($_POST["update_id"]))
 {
   //echo $_POST['update_id'];
 	$sql = "UPDATE products SET product_name='".$_POST["name"]."', item_city='".$_POST["city"]."',product_price='".$_POST["price"]."',product_description='".$_POST["desc"]."' WHERE product_id = '".$_POST["update_id"]."'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
 // header("Location:AllProducts.php");

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
 }

 //------------------------------------------------

  if(isset($_POST["delete_id"]))
 {
   echo $_POST['delete_id'];
 	$sql = "DELETE FROM products WHERE product_id = '".$_POST["delete_id"]."'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
 // header("Location:AllProducts.php");

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
 }

 //  --------------------------------------------------

 if(isset($_POST["review_id"]))  
 {  
      $query = "SELECT * FROM review WHERE id = '".$_POST["review_id"]."'";  
      $result = mysqli_query($conn, $query);  
        
      if (mysqli_num_rows($result) > 0) {
  // output data of each row
  if($row = mysqli_fetch_assoc($result)) {
     echo $row["name"];
     
echo '   <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">
                    <h4 class="modal-title">Review update</h4>   
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Reviewer Name:</label>  
                          <input type="text" name="name"  id="name" value="'.$row['name'].'" class="form-control" />  
                          <br />  
                           
                            
                             
                          <label>Reviewer Email:</label>  
                          <input type="text" name="review_email" id="review_email" value="'.$row['email'].'" class="form-control" />  
                          <br />  
                          <label>Message :</label>  
                          <input type="text" name="msg" id="msg" value="'.$row['msg'].'" class="form-control" />  
                          <br />  
                          <p id="review_id" >'.$row['id'].'  </p> 
                          <button   name="insert" id="update" value="update" class="btn btn-success update" > update</button>  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>';

  }
}
 else {
  echo "0 results";
}  
 

}
// ------------------updating review modal----------------------------------
 if(isset($_POST["update_review_id"]))
 {
   //echo $_POST['update_id'];
  $sql = "UPDATE review SET name='".$_POST["name"]."', email='".$_POST["review_email"]."',msg='".$_POST["msg"]."'  WHERE id = '".$_POST["update_review_id"]."'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
   // header("Location:AllProducts.php");

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
 }
 //-------------------end -------------------------------------------------


//-------------deleting review ----------------------------------------

  if(isset($_POST["delete_review_id"]))
 {
   echo $_POST['delete_review_id'];
  $sql = "DELETE FROM review WHERE id = '".$_POST["delete_review_id"]."'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
 // header("Location:AllProducts.php");

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
 }
 ?>