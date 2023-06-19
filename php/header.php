<header class="header">

   <div class="flex">

      <a href="#" class="logo"><img src="./images/adminlogo.png" height="50px" width="50px" >
      <span >ADMIN PANEL
      </a>
      
      <nav class="navbar">
         <a href="farm.html">HomePage</a>
         <a href="adminpanel.php">AddProducts</a>
         <a href="product.php">ViewProducts</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="adminusersigntable.php" class="user" >User Details </a>
      <!-- <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a> -->

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>