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
  <style>
    form {
      text-align: left;
    }

    label {
      margin: 30px;

    }

    input[type="text"] {
      margin-left: 74px;
      border-radius: 10px;
      height: 40px;
      border: 1px solid #ccc9c9;
      width: 69%;
      padding: 5px;
      text-align: left;
    }
    input[type="date"] {
      margin-left: 74px;
      border-radius: 10px;
      height: 40px;
      border: 1px solid #ccc9c9;
      width: 69%;
      padding: 5px;
      text-align: left;
    }
    input[type="number"] {

      border-radius: 10px;
      height: 40px;
      border: 1px solid #ccc9c9;
      width: 25%;
      padding: 5px;
      text-align: left;
    }

    select {
      margin-top: 50px;
      margin-left: 32px;
      border-radius: 10px;
      height: 40px;
      border: 1px solid #ccc9c9;
      width: 69%;
      padding: 5px;
      text-align: left;
    }

    textarea {
      margin: 20px 2px 0 0px;
      vertical-align: middle;
      border-radius: 10px;
      border: 1px solid #ccc9c9;
    }

    .button {
      text-align: center;
      margin-top: 30px;
    }
  </style>
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
                  <a href="consignment.php">ฝากขาย</a>
                </li>
                <li>
                  <a href="order.php">คำสั่งซื้อ</a>
                </li>
                <li>
                  <div class="header-icons" style="font-size: 14px; margin-left: 25px">

                    <div class="dropdown" style="float:right;">
                      <a class="member"><i class="	fas fa-user-friends">
                        </i> <?php echo $_SESSION['username'] ?></a>
                      <div class="dropdown-content">
                        <a href="../logout.php" style="color: black;">ออกจากระบบ</a>
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
  <div class="breadcrumb-section homepage-bg-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>ร้านเฮ็ดก้อเหลียว</p>
            <h1>ฝากขายสินค้า</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- check out section -->
  <h3 style="margin-top: 100px; text-align: center;">ฝากขายสินค้า</h3>
  <div class="checkout-section mt-50 mb-150">
    <div class="container" style="width: 70%;">
      <form action="CRUDemp/insert_product.php" method="post" enctype="multipart/form-data">
        <div class="group">
          <label for="name_product">ชื่อสินค้า :</label>
          <input name="name_product" type="text" required />
        </div>
        <div class="group">
          <label for="detail">รายละเอียดสินค้า : </label>
          <textarea name="detail" cols="72" rows="3" required></textarea>
        </div>
        <div class="group">
          <label for="type_pro"> ประเภทสินค้า :</label>
          <select name="type_pro" id="type_pro" required>
            <option value="">กรุณาเลือกประเภท</option>
            <option value="อาหารและเครื่องดื่ม">อาหารและเครื่องดื่ม</option>
            <option value="เสื้อผ้าและเครื่องแต่งกาย">เสื้อผ้าและเครื่องแต่งกาย</option>
            <option value="เครื่องประดับ">เครื่องประดับ</option>
            <option value="เครื่องสำอาง">เครื่องสำอาง </option>
            <option value="สิ่งประดิษฐ">สิ่งประดิษฐ</option>
            <option value="สมุนไพร">สมุนไพร</option>
            </option> 
          </select>
        </div>

        <div class="group">
          <label for="price">ราคา : </label>
          <input type="number" name="price" min="0" style="margin-left: 104px;" required/>
          <label for="amount">จำนวน : </label>
          <input type="number" name="amount" min="0" style="margin-left: 39px;" required/>
        </div>
        <div class="group">
          <label for="pic_product">รูปภาพสินค้า : </label>
          <input name="pic_product" type="file" size="40" accept=".jpg, .jpeg, .png" style="margin-left: 40px;" required/>
        </div>
        <div class="group">
        <label for="dateadd">วันที่ฝากขาย :</label>
          <input name="dateadd" type="date" style="margin-left: 40px; width: 68%;" required/>
          <label for="name">ชื่อผู้ฝากขาย :</label>
          <input name="name" type="text" style="margin-left: 40px; width: 68%;" required />
        </div>
        <div class="button">
          <a class="add"><button type="submit" name="submitaddproduct">เพิ่มสินค้า</button></a>
          <a class="cancel" href="consignment.php"><button type="button">ยกเลิก</button></a>
        </div>
      </form>
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