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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="#">
          <i class='bx bxl-blogger'></i>
          <span class="links_name">Manage Blogs</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-report'></i>
          <span class="links_name">Sales Report</span>
        </a>
      </li>
      
      <li class="log_out">
        <a href="logout.php">
          <i class='bx bx-log-out-circle'></i>
          <span class="links_name">Signout</span>
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
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
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
            <div class="number">1,250</div>

          </div>
          <i class='bx bx-street-view cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Blogs</div>
            <div class="number">10</div>

          </div>
          <i class='bx bxl-blogger cart three'></i>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Orders</div>
            <div class="number">9,852</div>

          </div>

          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">Rs.123,500</div>

          </div>
          <i class='bx bxs-cart-download cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Monthly Sales Report</div>
          <div class="sales-details">
          </div>
          <div class="pie-chart ">
            <!-- <figcaption >
              Mobile Phones 38%<span style="color:#4e79a7"></span><br>
              Chargers 23%<span style="color:#f28e2c"></span><br>
              Tempered Glasses 16%<span style="color:#e15759"></span><br>
              Phone Covers 10%<span style="color:#76b7b2"></span><br>
              Handsfree 6%<span style="color:#59a14f"></span><br>
              Others 7%<span style="color:#edc949"></span>
            </figcaption> -->

          </div>
          
        </div>
        <div class="top-sales box">
          <div class="title">Trending Products</div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <img src="images/APL_AP-12-PROMAX-256-GREY-01.jpg">
                <span class="product">Apple iPhone 12 Pro Max</span>
              </a>
              <span class="price">Rs.320,400</span>
            </li>
            <li>
              <a href="#">
                <img src="images/ImgW.jpg">
                <span class="product">Redmi Note 10 </span>
              </a>
              <span class="price">Rs.44,000</span>
            </li>
            <li>
              <a href="#">
                <img src="images/oneplus 9pro.jpg">
                <span class="product">OnePlus 9 Pro</span>
              </a>
              <span class="price">Rs.175,800</span>
            </li>
            <li>
              <a href="#">
                <img src="images/xiaomi-mi-11-ultra-5g-white-1.jpg">
                <span class="product">Xiaomi Mi 11 Ultra</span>
              </a>
              <span class="price">Rs.167,900</span>
            </li>
            <li>
              <a href="#">
                <img src="images/more-pixel-5-press-renders.jpg">
                <span class="product">Google Pixel 5</span>
              </a>
              <span class="price">Rs.132,000</span>
            </li>
            <li>
              <a href="#">
                <img src="images/1611832903_1613579.jpg">
                <span class="product">Sony Xperia Pro</span>
              </a>
              <span class="price">Rs.51,500</span>
            <li>
              <a href="#">
                <img src="images/poco-m3-srilanka.jpg">
                <span class="product">Xiaomi POCO M3</span>
              </a>
              <span class="price">Rs.31,000</span>
            </li>
            <li>
              <a href="#">
                <img src="images/Samsung-Galaxy-A22-5G-renders-1.jpg">
                <span class="product">Samsung Galaxy A22 5G</span>
              </a>
              <span class="price">Rs.41,400</span>
            </li>
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
  </script>

</body>

</html>