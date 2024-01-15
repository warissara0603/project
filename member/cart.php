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
									<a href="Orderlist.php">รายการสั่งซื้อ</a>
								</li>
								<li>
									<div class="header-icons" style="font-size: 14px; margin-left: 25px">
										<a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<div class="dropdown" style="float:right;">
											<a class="member"><i class="	fas fa-user-friends"></i> <?php echo $_SESSION['username'] ?></a>
											<div class="dropdown-content">
												<a href="information.php" style="color: black;">ข้อมูลส่วนตัว</a>
												<a href="#" style="color: black;">ลบบัญชี</a>
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
						<h1>ตระกร้าสินค้า</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">รูปสินค้า</th>
									<th class="product-name">ชื่อสินค้า</th>
									<th class="product-price" style="width: 100px;">ราคา</th>
									<th class="product-quantity">จำนวน</th>
									<th class="product-total">ราคารวม</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="../assets/img/products/สินค้า 1.jpg" alt=""></td>
									<td class="product-name">ผ้าพันคอ(แม่สุริน)</td>
									<td class="product-price">฿120.00</td>
									<td class="product-quantity"><input type="number" placeholder="1" min="1"></td>
									<td class="product-total">฿120.00</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="../assets/img/products/สินค้า 2.jpg" alt=""></td>
									<td class="product-name">ถั่วลายเสือบดผสมเมล็ดงาม้อน</td>
									<td class="product-price">$100.00</td>
									<td class="product-quantity"><input type="number" placeholder="1" min="1"></td>
									<td class="product-total">฿100.00</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="../assets/img/products/สินค้า 3.jpg" alt=""></td>
									<td class="product-name">สบู่อะโวคาโด้ผสมวิตามินอีพลัส</td>
									<td class="product-price">$150.00</td>
									<td class="product-quantity"><input type="number" placeholder="1" min="1"></td>
									<td class="product-total">฿150.00</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>ราคารวม</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td>
										<h6>ราคารวมสินค้า: </h6>
									</td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td>
										<h6>ค่าส่ง: </h6>
									</td>
									<td>$50</td>
								</tr>
								<tr class="total-data">
									<td>
										<h6>ราคารวม: </h6>
									</td>
									<td>$550</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="shop.php" class="boxed-btn">ซื้อสินค้าเพิ่มเติม</a>
							<a href="checkout.php" class="boxed-btn black">สั่งซื้อสินค้า</a>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->
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