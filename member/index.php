<?php
session_start();
require_once "../connectDB.php";

if (!$_SESSION['userid']) {
  header("Location: index.php");
} else {
  $id = $_SESSION['userid'];
  $query = "SELECT * FROM user WHERE user_id = '$id'";

  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);

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
                    <a href="Orderlist.php">รายการสั่งซื้อ</a>
                  </li>
                  <li>
                    <div class="header-icons" style="font-size: 14px; margin-left: 25px">
                      <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                      <div class="dropdown" style="float:right;">
                        <a class="member"><i class="	fas fa-user-friends"></i> <?php echo $row['name']; ?></a>
                        <div class="dropdown-content">
                          <a href="information.php" style="color: black;">ข้อมูลส่วนตัว</a>
                          <a href="CRUDuser/deleteUser.php" style="color: black;">ลบบัญชี</a>
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
    <!-- home page slider -->
    <div class="homepage-slider">
      <!-- single home slider -->
      <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
              <div class="hero-text">
                <div class="hero-text-tablecell">
                  <p class="subtitle">สินค้าแฮนด์เมด และ ร้านค้าท้องถิ่น</p>
                  <h1 style="font-family: Noto Sans Thai;">ช้อปสินค้าชุมชนหัตถกรรมของชาวแม่ฮ่องสอน</h1>
                  <div class="hero-btns">
                    <a href="shop.php" class="boxed-btn">คอลเลกชันผลิตภัณฑ์</a>
                    <a href="contact.php" class="bordered-btn">ติดต่อเรา</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- single home slider -->
      <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
              <div class="hero-text">
                <div class="hero-text-tablecell">
                  <p class="subtitle">สินค้าทุกชิ้นมีคุณภาพ</p>
                  <h1 style="font-family: Noto Sans Thai;">ผลิตภัณฑ์จากภูมิปัญญาท้องถิ่น 100%</h1>
                  <div class="hero-btns">
                    <a href="shop.php" class="boxed-btn">เยี่ยมชมผลิตภัณฑ์</a>
                    <a href="contact.php" class="bordered-btn">ติดต่อเรา</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- single home slider -->
      <div class="single-homepage-slider homepage-bg-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 text-right">
              <div class="hero-text">
                <div class="hero-text-tablecell">
                  <p class="subtitle">ร้านเฮ็ดก้อเหลียว</p>
                  <h1 style="font-family: Noto Sans Thai; ">เปิดให้บริการและจัดส่งทุกวัน <br> เวลา 8 : 00 - 17 : 00 น.</h1>
                  <div class="hero-btns">
                    <a href="shop.php" class="boxed-btn">เยี่ยมชมผลิตภัณฑ์</a>
                    <a href="contact.php" class="bordered-btn">ติดต่อเรา</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end home page slider -->

    <br>
    <!-- advertisement section -->
    <div class="abt-section mb-150 pt-5">
      <div class="container ">
        <div class="row">
          <div class="col-lg-6 col-md-12 ">
            <div class="abt-bg">
              <a href="https://www.youtube.com/watch?v=7QIx_Z-l-Ro" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 ">
            <div class="abt-text">
              <p class="top-sub">เริ่มดำเนินธุรกิจตั้งแต่ปี 2553</p>
              <h2>ร้านเฮ็ด<span class="orange-text">ก้อเหลียว</span></h2>
              <p style="text-indent: 50px;">
                จังหวัดแม่ฮ่องสอน
                ประกอบด้วยคนหลากหลายเชื้อชาติ หลากหลายเผ่าพันธุ์ มีประเพณี วัฒนธรรมที่เป็นเอกลักษณ์ของตนเอง โดย ประชาชนส่วน ใหญ่นิยมที่จะ ผลิตสินค้าชุมชนจากภูมิปัญญาท้องถิ่นของตนเองออกสู่ตลาด เพื่อสร้าง
                รายได้ให้กับตนเองและครอบครัว
              </p>
              <p style="text-indent: 50px;">
                ดังนั้น ร้านเฮ็ดก้อเหลียว - ศูนย์พัฒนาและแสดงสินค้าชุมชนจังหวัดแม่ฮ่องสอน
                ค์เพื่อเพิ่มช่องทางการจัดจำหน่ายของสินค้าและเพิ่มรายได้ให้กับ
                ผู้ประกอบการสินค้าชุมชนซึ่งภายในร้านดังกล่าวจัดให้มีการจำหน่ายสินค้า ฯ
                ของทุกอำเภอในจังหวัดแม่ฮ่องสอน
              </p>
              <a href="about.php" class="boxed-btn mt-4">ดูเพิ่มเติม</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end advertisement section -->
    <!-- product section -->
    <div class="product-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">
              <h3>ผลิตภัณฑ์ของเรา</h3>
              <p style="  letter-spacing: 2px;">
                ช้อปสินค้าชุมชน ผลิตจากฝีมือคนแม่ฮ่องสอน : ชวนให้คุณมาซื้อสินค้าชุมชนที่มีคุณภาพ ที่ผ่านการคัดเลือกมาแล้วมากกว่า 30 ร้าน <br>การันตีได้เลยว่าถูก และดีมีอยู่จริง
              </p>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
					$sql = "SELECT * FROM `product`";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($result)){
				?>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
              <div class="product-image">
                <a href="single-product.php?pid=<?php echo $row['product_id']?>"><img src="../assets/img/products/<?php echo $row['pic_product']?>" alt="" /></a>
              </div>
              <h4><?php echo $row['name_product']?></h4>
              <p class="product-price"> <?php echo $row['price']?> บาท </p>
              <a href="cart.php" class="cart-btn mb-2"><i class="fas fa-shopping-cart"></i> ใส่ตะกร้า</a>
              <a href="https://shopee.co.th/hedkorleaw?utm_content=v7AhqvmwtRwAThK4mwBdnNgesBV" class="cart-btn"><i class="fas fa-shopping-cart"></i> สั่งสินค้า shopee</a>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="row" style="margin-top: 50px;">
          <div class="col-lg-12 text-center">
            <a href="shop.php" class="boxed-btn">ดูเพิ่มเติม</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end product section -->
    <!-- shop banner -->
    <section class="shop-banner">
      <div class="container">
        <h3>
          happy new year 2024 <br />
          sale in on with big <span class="orange-text">Discount...</span>
        </h3>
        <div class="sale-percent">
          <span>Sale! <br />
            Upto</span>50% <span>off</span>
        </div>
        <a href="shop.php" class="cart-btn btn-lg">Shop Now</a>
      </div>
    </section>
    <!-- end shop banner -->

    <!-- latest news -->
    <div class="latest-news pt-150 pb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">
              <h3><span class="orange-text">ประชา</span>สัมพันธ์</h3>
              <p>
                การประชาสัมพันธ์ เกี่ยวกับ ร้าน เฮ็ดก้อเหลียว - ศูนย์พัฒนาและแสดงสินค้าชุมชนจังหวัดแม่ฮ่องสอน ภายใต้องค์กรบริหารส่วนจังหวัดแม่ฮ่องสอน
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-latest-news">
              <a href="single-news.php">
                <div class="latest-news-bg news-bg-1"></div>
              </a>
              <div class="news-text-box">
                <h3>
                  <a href="single-news.php">
                    ขอเชิญชวนประชาชนร่วมชิม & ช้อป ในงาน “สินค้าดี BCG Local Plus รักษ์โลก รักแม่ฮ่องสอน”</a>
                </h3>
                <p class="excerpt">
                  🗓 ระหว่างวันที่ 21-25 ธันวาคม 2566 <br>
                  ⏰ ตั้งแต่เวลา 08.00 - 16.30 น. <br>
                  📍 ณ ศูนย์พัฒนาและแสดงสินค้าชุมชนจังหวัดแม่ฮ่องสอน“เฮ็ดก้อเหลียว”
                  อำเภอเมืองแม่ฮ่องสอน จังหวัดแม่ฮ่องสอน </p>
                <a href="single-news.php" class="read-more-btn">ดูเพิ่มเติม <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-latest-news">
              <a href="single-news.php">
                <div class="latest-news-bg news-bg-2"></div>
              </a>
              <div class="news-text-box">
                <h3>
                  <a href="single-news.php">จัดกิจกรรม Live สด เกี่ยวกับสินค้าชุมชนจังหวัดแม่ฮ่องสอน พบกับ สาวมากความสามารถคุณลูกพีช เจ้าของช่อง " ลูกพีชChanel "
                  </a>
                </h3>
                <p class="excerpt">
                  พรุ่งนี้เวลา 19.00 น. ศูนย์พัฒนาและแสดงสินค้าชุมชนจังหวัดแม่ฮ่องสอน จัดกิจกรรม Live สด เกี่ยวกับสินค้าชุมชนจังหวัดแม่ฮ่องสอนพบกับ สาวมากความสามารถคุณลูกพีช เจ้าของช่อง " ลูกพีชChanel "

                </p>
                <a href="single-news.php" class="read-more-btn">ดูเพิ่มเติม <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
            <div class="single-latest-news">
              <a href="single-news.php">
                <div class="latest-news-bg news-bg-3"></div>
              </a>
              <div class="news-text-box">
                <h3>
                  <a href="single-news.php">เปิดเมิงไต ชิมอาหารไทใหญ่ ชมสินค้าท้องถิ่น ครั้งที่ 16 ชวน ช้อป ชิม</a>
                </h3>
                <p class="excerpt">
                  🗓 ระหว่างวันที่ 6 - 10 ธันวาคม 2566 <br>
                  ⏰ ตั้งแต่เวลา 18.00 - 21.00 น.<br>
                  📍 ณ ศูนย์ไทใหญ่ศึกษา อำเภอเมือง จังหวัดแม่ฮ่องสอน
                  เชิญชวนนักท่องเที่ยวหรือชาวแม่ฮ่องสอนทุกท่านมาชม
                  ผลิตจากฝีมือคนแม่ฮ่องสอน ได้นะคะ💕
                </p>
                <a href="single-news.php" class="read-more-btn">ดูเพิ่มเติม <i class="fas fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <a href="news.php" class="boxed-btn">ดูเพิ่มเติม</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end latest news -->
    <!-- footer -->
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="footer-box get-in-touch">
              <h2 class="widget-title">ติดต่อเรา</h2>
              <ul>
                <li><i class="	fas fa-route" style="width: 20px; padding-right: 30px;"></i>ด้านหน้าโรงเรียน อบจ. บ้านจองคำ
                  ถ. ขุนลุมประพาส <br>ต.จองคำ
                  อ. เมือง จ.แม่ฮ่องสอน</li>
                <li><i class="fas fa-envelope" style="width: 20px; padding-right: 30px;"></i>hedkorleawOTOP@gmail.com</li>
                <li><i class="fas fa-phone" style="width: 20px; padding-right: 30px;"></i>098 905 6624</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="footer-box pages">
              <h2 class="widget-title">หน้า</h2>
              <ul>
                <li><i class="fas fa-angle-right" style="padding-right: 15px;"></i><a href="index.php">หน้าหลัก</a></li>
                <li><i class="fas fa-angle-right" style="padding-right: 15px;"></i><a href="shop.php">ผลิตภัณฑ์</a></li>
                <li><i class="fas fa-angle-right" style="padding-right: 15px;"></i><a href="board.php">โปรโมชั่น</a></li>
                <li><i class="fas fa-angle-right" style="padding-right: 15px;"></i><a href="news.php">ประชาสัมพันธ์</a></li>
                <li><i class="fas fa-angle-right" style="padding-right: 15px;"></i><a href="contact.php">ติดต่อ</a></li>
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
              <a href="#">hedkorleawOTOP</a>, All Rights
              Reserved.
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
                  <a href="https://www.tiktok.com/@hedkorleaw2?is_from_webapp=1&sender_device=pc" target="_blank"><i class="	fab fa-tumblr"></i></a>
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