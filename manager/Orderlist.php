<?php
session_start();

if (!$_SESSION['userid']) {
  header("Location: index.php");
} else {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/" />

  <!-- title -->
  <title>Hedkorleaw</title>

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="../assets/img/firstpage/logo_one.png" />
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Noto Sans Thai" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="../assets/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
  <!-- magnific popup -->
  <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
  <!-- animate css -->
  <link rel="stylesheet" href="../assets/css/animate.css" />
  <!-- mean menu css -->
  <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />
  <!-- main style -->
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="css/index.css" />
  <!-- responsive -->
  <link rel="stylesheet" href="../assets/css/responsive.css" />
</head>

<body>
  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->

  <!-- header -->
  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <!-- logo -->
            <div class="site-logo" style="margin-right: 25px">
              <a href="index.php">
                <img src="../assets/img/logo_four_white.png" alt="" />
              </a>
            </div>
            <!-- logo -->

            <!-- menu start -->
            <nav class="main-menu">
              <ul>
                <li class="current-list-item">
                  <a href="index.php">หน้าแรก</a>
                </li>
                <li>
                  <a href="shop.php">ผลิตภัณฑ์</a>
                </li>
                <li>
                  <a href="board.php">โปรโมชั่น</a>
                </li>
                <li><a href="news.php">ประชาสัมพันธ์</a></li>
                <li><a href="contact.php">ติดต่อ</a></li>
                <li>
                  <div class="dropdown">
                    <a href="#">รายงาน</a>
                    <div class="dropdown-content" style="padding: 10px; text-align: left; font-size: 14px; width: 230px; left: 0;">
                      <a href="report1.php" style="color: #000;">การขายสินค้าประจำเดือน</a>
                      <a href="report2.php" style="color: #000;">การขายสินค้าประจำปี</a>
                      <a href="report3.php" style="color: #000;">สินค้าขายดีประจำเดือน</a>
                      <a href="report4.php" style="color: #000;">สินค้าขายดีประจำปี</a>
                      <a href="report5.php" style="color: #000;">ฝากขายสินค้า</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="header-icons" style="font-size: 14px; margin-left: 25px">

                    <div class="dropdown" style="float: right">
                      <a class="member"><i class="fas fa-user-friends"></i> <?php echo $_SESSION['username'] ?></a>
                      <div class="dropdown-content">
                        <a href="../logout.php" style="color: black">ออกจากระบบ</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>

            <div class="mobile-menu"></div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header -->

  <!-- breadcrumb-section -->
  <div class="breadcrumb-section homepage-bg-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>ร้านเฮ็ดก้อเหลียว</p>
            <h1>รายการสั่งซื้อ</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- check out section -->
  <h3 style="margin-top: 100px; text-align: center">รายการสั่งซื้อ</h3>
  <div class="checkout-section mt-80 mb-150">
    <div class="container">
      <div class="row">
        <div class="card-body">
          <div class="billing-address-form">
            <table class="cart-bank" style="background-color: #f2f2f2">
              <thead class="cart-bank-head">
                <tr class="bank-head-row text-center">
                  <th class="bank-name" style="
                        width: 334px;
                        height: 50px;
                        background-color: #bd2000;
                        color: white;
                      ">
                    ลำดับที่
                  </th>
                  <th class="bank-price" style="
                         width: 400px;
                        background-color: #bd2000;
                        color: white;
                      ">
                    รายการ
                  </th>
                  <th class="bank-quantity" style="
                       width: 334px;
                        background-color: #bd2000;
                        color: white;
                      ">
                    เลขพัสดุ
                  </th>
                </tr>
              </thead>
              <tbody style="height: 50px">
                <tr class="bank-body-row text-center">
                  <td class="bank-name">1</td>
                  <td class="bank-price">ถั่วลายเสือ</td>
                  <td class="bank-quantity">HJK5678621562TH</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end check out section -->
  <!-- footer -->
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="footer-box get-in-touch">
            <h2 class="widget-title">ติดต่อเรา</h2>
            <ul>
              <li>
                <i class="fas fa-route" style="width: 20px; padding-right: 30px"></i>ด้านหน้าโรงเรียน อบจ. บ้านจองคำ ถ. ขุนลุมประพาส <br />ต.จองคำ
                อ. เมือง จ.แม่ฮ่องสอน
              </li>
              <li>
                <i class="fas fa-envelope" style="width: 20px; padding-right: 30px"></i>hedkorleawOTOP@gmail.com
              </li>
              <li>
                <i class="fas fa-phone" style="width: 20px; padding-right: 30px"></i>098 905 6624
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="footer-box pages">
            <h2 class="widget-title">หน้า</h2>
            <ul>
              <li>
                <i class="fas fa-angle-right" style="padding-right: 15px"></i><a href="index.php">หน้าหลัก</a>
              </li>
              <li>
                <i class="fas fa-angle-right" style="padding-right: 15px"></i><a href="shop.php">ผลิตภัณฑ์</a>
              </li>
              <li>
                <i class="fas fa-angle-right" style="padding-right: 15px"></i><a href="board.php">โปรโมชั่น</a>
              </li>
              <li>
                <i class="fas fa-angle-right" style="padding-right: 15px"></i><a href="news.php">ประชาสัมพันธ์</a>
              </li>
              <li>
                <i class="fas fa-angle-right" style="padding-right: 15px"></i><a href="contact.php">ติดต่อ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer -->

  <!-- copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <p>
            Copyrights © 2023 -
            <a href="#">hedkorleawOTOP</a>, All Rights Reserved.
          </p>
        </div>
        <div class="col-lg-6 text-right col-md-12">
          <div class="social-icons">
            <ul>
              <li>
                <a href="https://www.facebook.com/hedkorleawOTOP" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/@MHSPAO" target="_blank"><i class="fab fa-youtube"></i></a>
              </li>
              <li>
                <a href="https://www.tiktok.com/@hedkorleaw2?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fab fa-tumblr"></i></a>
              </li>
              <li>
                <a href="https://shopee.co.th/hedkorleaw?utm_content=v7AhqvmwtRwAThK4mwBdnNgesBV" target="_blank"><i class="fas fa-shopping-bag"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end copyright -->

  <!-- jquery -->
  <script src="../assets/js/jquery-1.11.3.min.js"></script>
  <!-- bootstrap -->
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- count down -->
  <script src="../assets/js/jquery.countdown.js"></script>
  <!-- isotope -->
  <script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
  <!-- waypoints -->
  <script src="../assets/js/waypoints.js"></script>
  <!-- owl carousel -->
  <script src="../assets/js/owl.carousel.min.js"></script>
  <!-- magnific popup -->
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <!-- mean menu -->
  <script src="../assets/js/jquery.meanmenu.min.js"></script>
  <!-- sticker js -->
  <script src="../assets/js/sticker.js"></script>
  <!-- main js -->
  <script src="../assets/js/main.js"></script>
</body>

</html>
<?php } ?>