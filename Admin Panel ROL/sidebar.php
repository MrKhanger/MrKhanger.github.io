 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Eylor Enlisting</span>
    </a>

    <!-- Sidebar -->
     

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <!-- pages/widgets.html -->
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>

              <p>
               Orders
                 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cartview.php" class="nav-link">
             <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <p>
               Cart
               <?php
               include 'dbconfig.php';
   $sql = "SELECT count(products.product_name) as  totalitems  FROM products INNER JOIN cart ON cart.p_id = products.product_id";
        $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                      $totalitems=$row['totalitems']; 
                  }
                }

               ?>
                 
                <span class="badge badge-info right"><?php echo $totalitems; ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="AllReview.php" class="nav-link">
             <i class="fa fa-user-plus" aria-hidden="true"></i>
              <p>
               All Reviews
                 
              </p>
            </a>
             
          </li>
         
          <li class="nav-item">
            <a href="AddProductCategory.php" class="nav-link">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <p class="text">Add Product category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="AddNewCity.php" class="nav-link">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <p>Add New City</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="AllProducts.php" class="nav-link">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <p>All Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="AllSubscriber.php" class="nav-link">
              <i class="fa fa-plus" aria-hidden="true"></i>
              <p>All Subscriber</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-sign-out" aria-hidden="true"></i>

              <p>
               sign out
                 
              </p>
            </a>
             
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
