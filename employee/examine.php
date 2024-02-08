<?php
session_start();
require_once "../connectDB.php";

if (!$_SESSION['userid']) {
  header("Location: index.php");
} else {
  $id = $_SESSION['userid'];
  
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
            <h1>รายการสั่งซื้อ</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- check out section -->
  <h3 style="margin-top: 80px; text-align: center;">รายการสั่งซื้อ</h3>
  <center><div class="col-lg-6">
  <div class="card-body">
            <div class="billing-address-form">
              <table class="cart-price" style="background-color: #f2f2f2">
                <thead class="cart-price-head">
                  <tr class="price-head-row text-center">
                    <th class="price-name" style="
                          width: 100px;
                          height: 50px;
                          background-color: #bd2000;
                          color: white;
                        ">
                      ลำดับที่
                    </th>
                    <th class="price-price" style="
                          width: 250px;
                          background-color: #bd2000;
                          color: white;
                        ">
                      ชื่อสินค้า
                    </th>
                    <th class="price-quantity" style="
                          width: 150px;
                          background-color: #bd2000;
                          color: white;
                        ">
                      ราคา
                    </th>
                    <th class="price-total" style="
                          width: 100px;
                          background-color: #bd2000;
                          color: white;
                        ">
                      จำนวน
                    </th>
                    <th class="price-total" style="
                          width: 150px;
                          background-color: #bd2000;
                          color: white;
                        ">  
                      ราคารวม
                    </th>
                  </tr>
                </thead>
                <?php
								$sumAll =0;
                $num = 1;
								$sql = "SELECT cart.cart_id as cart_id,product.pic_product as pic_product,product.name_product as name_product,product.price as price,cart.amount as amount FROM cart LEFT JOIN product ON cart.product_id = product.product_id";
								$result = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_array($result)){
							?>
                <tbody style="height: 50px">
                  <tr class="price-body-row text-center">
                    <td class="price-name"><?php echo $num?></td>
                    <td class="price-price"><?php echo $row['name_product']?></td>
                    <td class="price-quantity">฿<?php echo $row['price']?></td>
                    <td class="price-quantity"><?php echo $row['amount'] ?></td>
                    <?php $sum =  $row['price'] * $row['amount'] ?>
									  <td class="product-total">฿<?php echo number_format("$sum",2) ?></td>
                  </tr>
                </tbody>
                <?php 
							$sumAll += $row['price'] * $row['amount'];
              $num++;
							} ?>
              </table>
            </div>
          </div>
  </div></center>
  <div class="checkout-section mt-50 mb-150">
    <div class="container">
      <div class="col-lg-12">
        <h3 style="text-align: center; margin-top: 40px;">ข้อมูลการสั่งซื้อ</h3>
        <div class="card-body">
          <div class="billing-address-form">
            <form action="CRUDemp/confirmOrder.php" method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product">
            <?php
              $sql = "SELECT * FROM `oder`";
              $result = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_array($result)){
            ?>
              <p>
                ชื่อ-นามสกุล<input type="text" placeholder="<?php echo $row['name']?>" readonly />
              </p>
              <p>
                ที่อยู่<textarea name="bill" id="bill" cols="30" rows="10" placeholder="<?php echo $row['address']?>" readonly></textarea>
              </p>
              <p>
                เบอร์โทร<input type="tel" maxlength="10" size="10" placeholder="<?php echo $row['phone']?>" readonly />
              </p>
              <p style="width: 50%">
              <?php $sum =  $row['price']?>
                จำนวนเงินที่ชำระ (โปรดตรวจสอบจำนวนเงินก่อนโอนเงิน)<input type="text" placeholder="<?php echo number_format("$sum",2) ?>" readonly />
              </p>
              <p style="width: 50%">
                วันที่ชำระ
                <input type="date" id="datemin" name="datemin" min="2023-12-30" value="<?php echo $row['date']?>" readonly />
              </p>
              <p style="width: 50%">
                เวลาที่ชำระ <input type="time" value="<?php echo $row['datetime']?>" readonly />
              </p>
              <center><label style="color: #bd2000; padding-top: 20px">หลักฐานการโอน (นามสกุล ไฟล์ .png .jpg เท่านั้น)

                </label><br>
                <img src="../assets/img/orders/<?php echo $row['img_order']?>" alt="" width="500px">
              </center>
              <p style="margin-top: 30px;">
                ***เลขพัสดุ***<input type="text" name="tracking_number" placeholder="กรุณาใส่เลขพัสดุ" />
              </p>
              <div class="button">
                <a class="add" href="order.php"><button type="submit" name="confirmOrder">ยืนยัน</button></a>
                <a class="cancel" href="order.php"><button type="submit">ย้อนกลับ</button></a>
              </div>
              <?php } ?>
            </form>
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