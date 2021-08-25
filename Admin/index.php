<?php 
session_start();
    include("../dbh/config.php");
    include("../dbh/function.php");

    $userdata = checklogin($con);
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard  </title>-->
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-mobile-alt'></i>
      <span class="logo_name">MOBiCo </span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="manageProduct/Product.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Manage Product</span>
        </a>
      </li>
      <!-- <li>
        <a href="#">
          <i class='bx bx-list-ol'></i>
          <span class="links_name">Show Product Quantity</span>
        </a>
      </li> -->
      <li>
        <a href="inventory/stocks.php">
          <i class='bx bxs-box'></i>
          <span class="links_name">Stock Details</span>
        </a>
      </li>
      <li>
        <a href="orderDetails.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Order Details</span>
        </a>
      </li>
      <li>
        <a href="userView.php">
          <i class='bx bx-file-blank'></i>
          <span class="links_name">User View Page</span>
        </a>
      </li>
      <li>
        <a href="adminRoles.php">
          <i class='bx bx-user-circle'></i>
          <span class="links_name">Admin Roles</span>
        </a>
      </li>
      <li>
        <a href="signup.php">
          <i class='bx bx-user-circle'></i>
          <span class="links_name">Add new admin</span>
        </a>
      </li>
      <li>
        <a href="blog/index.php">
          <i class='bx bxl-blogger'></i>
          <span class="links_name">Manage Blogs</span>
        </a>
      </li>
      <li>
        <a href="salesRep.php">
          <i class='bx bxs-report'></i>
          <span class="links_name">Sales Report</span>
        </a>
      </li>
      
      <li class="log_out">
        <a href="logout.php">
          <i class='bx bx-log-out-circle'></i>
          <span class="links_name">Sign out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <!-- <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i> -->
      </div>
      <div class="profile-details">
        <img src="images/IMG-20180617-WA0002-02.jpeg">
        <span class="admin_name"><?php echo $userdata['username']; ?></span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Customers</div>
            <div class="number"><?php
              $sql = "SELECT id FROM customer";
              $res = mysqli_query($con, $sql);
              if ($res)
              {
                  // it return number of rows in the table.
                  $row = mysqli_num_rows($res);
                    
                     if ($row)
                        {
                        // printf("Number of row in the table : " . $row);
                          echo $row;
                        }
              }
            ?></div>

          </div>
          <i class='bx bx-street-view cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Blogs</div>
            <div class="number"> <?php
              $sql = "SELECT id FROM data";
              $res = mysqli_query($con, $sql);
              if ($res)
              {
                  // it return number of rows in the table.
                  $row = mysqli_num_rows($res);
                    
                     if ($row)
                        {
                        // printf("" . $row);
                          echo $row;
                        }
              }
            ?></div>

          </div>
          <i class='bx bxl-blogger cart three'></i>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Orders</div>
            <div class="number">
            <?php
              $sql = "SELECT id FROM orders";
              $res = mysqli_query($con, $sql);
              if ($res)
              {
                  // it return number of rows in the table.
                  $row = mysqli_num_rows($res);
                    
                     if ($row)
                        {
                        // printf("" . $row);
                          echo $row;
                        }
              }
            ?>
            
            </div>

          </div>

          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number" style="font-size:17px;"><?php
              $sql = "SELECT sum(totalprice) as ttp FROM orders";
              $res = mysqli_query($con, $sql);
             
              if ($res)
              {
                  // it return number of rows in the table.
                  $row = mysqli_fetch_assoc($res);
                    
                     if ($row)
                        {
                        // printf("" . $row);
                          echo "Rs. " . $row['ttp'];
                        }
              }
            ?></div>

          </div>
          <i class='bx bxs-cart-download cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Monthly Sales Report</div>
          <div class="sales-details">
          </div>
          <!-- Sales Report Bar Chart -->
            <?php include('date.php'); ?>
        </div>
        <div class="top-sales box">
          <div class="title">Trending Products</div>
          <ul class="top-sales-details">
          <?php include('../dbh/config.php');
            $sql = "SELECT * FROM product  ORDER BY RAND() limit 10 ";
            $res = $con->query($sql);

            if($res->num_rows > 0){
              while($row = $res ->fetch_assoc()){
                echo '<li>
                        <img src="../images/'.$row['PIC'].'" alt="" class="image-responsive " width="10%" height="10%">     
                        <span class="product">'.$row['PNAME'].'</span>
                        <span class="price">Rs. '.$row['PRICE'].'.00</span>
                      </li>';
              }
            }
          ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  

</body>

</html>