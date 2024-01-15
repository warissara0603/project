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
	<link rel="shortcut icon" type="image/png" href="assets/img/firstpage/logo_one.png" />
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Noto Sans Thai" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css" />
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css" />
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" />
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css" />
	<!-- popup style -->
	<link rel="stylesheet" href="assets/css/popupcss.css" />
	<link rel="stylesheet" href="assets/css/Register.css" />
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
						<div class="site-logo" style="margin-right: 25px;">
							<a href="index.php">
								<img src="assets/img/logo_four_white.png" alt="" />
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu ">
							<ul>
								<li class="current-list-item"><a href="index.php">หน้าแรก</a></li>
								<li>
									<a href="shop.php">ผลิตภัณฑ์</a>

								</li>
								<li>
									<a href="board.php">โปรโมชั่น</a>
								</li>
								<li><a href="news.php">ประชาสัมพันธ์</a></li>
								<li><a href="contact.php">ติดต่อ</a></li>
								<li>
									<div class="header-icons" style="font-size: 14px; margin-left: 25px;">
										<a class="show-modal" data-toggle="modal" data-target="#myModal"><i class="fas fa-user-lock"></i> เข้าสู่ระบบ</a>
										<a class="show-modal" data-toggle="modal" data-target="#myModalRegister"><i class="	fas fa-user-friends"></i> สมัครสมาชิก</a>
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
	<!-- popup login -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content clearfix">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i><span aria-hidden="true"></span></button>
				<div class="modal-body">
					<img src="assets/img/logo_two.png" alt="" style="width: 250px; ">
					<p class="description">เข้าสู่ระบบโดยใช้ ชื่อผู้ใช้ และ รหัสผ่าน</p>
					<form class="login-form" action="login.php" method="post">
						<div class="form-group">
							<span class="input-icon"><i class="fa fa-user"></i></span>
							<input type="Username" name="username" class="form-control" placeholder="ชื่อผู้ใช้" required>
						</div>
						<div class="form-group">
							<span class="input-icon"><i class="fas fa-key"></i></span>
							<input type="password" name="password" class="form-control" placeholder="รหัสผ่าน" required>
						</div>
						<button class="btn" type="submit" name="submitlogin">เข้าสู่ระบบ</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- popup Register -->
	<div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content clearfix">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i><span aria-hidden="true"></span></button>
				<!-- Form Register -->
				<div class="container my-5">
					<div class="login-container">
						<div class="login-header">
							<img src="assets/img/logo_two.png" alt="" style="width: 150px; ">
							<h3 style="margin-bottom: 20px;">สมัครสมาชิก</h3>
						</div>
						<form class="login-form" action="register.php" method="post">
							<div class="form-group ">
								<label for="username">ชื่อ - นามสกุล</label>
								<input type="text" class="form-control" name="name" placeholder="กรุณาใส่ชื่อ - นามสกุล" required>
							</div>
							<div class="form-group ">
								<label for="username">ชื่อผู้ใช้</label>
								<input type="text" class="form-control" name="username" placeholder="กรุณาใส่ชื่อผู้ใช้" required>
							</div>
							<div class="form-group ">
								<label for="password">รหัสผ่าน</label>
								<input type="password" class="form-control" name="password" placeholder="กรุณาใส่รหัสผ่าน" required>
							</div>
							<div class="form-group">
								<label for="email">อีเมล์</label>
								<input type="email" class="form-control" name="email" placeholder="กรุณาใส่อีเมล์" required>
							</div>
							<div class="form-group">
								<label for="phone">เบอร์โทรศัพท์</label>
								<input type="text" class="form-control" name="phone" maxlength="10" size="10" placeholder="กรุณาใส่เบอร์โทรศัพท์" required>
							</div>
							<div class="form-group">
								<label for="tel">ที่อยู่</label>
								<textarea name="address" cols="30" rows="5" style="padding: 10px;width: 100%;height:200px; border: 2px solid #eee; border-radius: 15px;" required></textarea>
							</div>
							<br>
							<div class="button">
								<button type="submit" class="btn" name="submitregister">สมัครสมาชิก</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Form Register -->
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section homepage-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>การประชาสัมพันธ์ เกี่ยวกับ ร้าน เฮ็ดก้อเหลียว</p>
						<h1>ประชาสัมพันธ์</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single-article-section">
						<div class="single-article-text">
							<div class="single-artcile-bg"></div>

							<h2>เปิดเมิงไต ชิมอาหารไทใหญ่ ชมสินค้าท้องถิ่น ครั้งที่ 16 ชวน ช้อป ชิม</h2>
							<p>โรงเรียนแม่สะเรียงบริพัตรศึกษา ร่วมแสดงนิราศ ๑๕๐ ปี แม่ฮ่องสอน พิธีเปิดงานแสดงสินค้าชุมชน “เปิดเมิงไต ชิมอาหารไทใหญ่ ชมสินค้าท้องถิ่น” ครั้งที่ 16 และเฉลิมฉลองครบ 150 ปี ในการก่อตั้งเมืองแม่ฮ่องสอน
								ช่วงค่ำ วันที่ 6 ธ.ค. 2566 ที่ศูนย์ไทใหญ่ศึกษา วิทยาลัยชุมชนแม่ฮ่องสอน อ.เมืองแม่ฮ่องสอน จ.แม่ฮ่องสอน นายเชษฐา โมสิกรัตน์ ผู้ว่าราชการจังหวัดแม่ฮ่องสอน เป็นประธานในพิธีเปิดงานแสดงสินค้าชุมชน "เปิดเมิงไต ชิมอาหารไทยใหญ่ชมสินค้าท้องถิ่น" ครั้งที่ 16 เพื่อส่งเสริมและประชาสัมพันธ์อาหารท้องถิ่น รวมถึงสินค้าชุมชนในพื้นที่จังหวัดแม่ฮ่องสอน โดยมีนางจิราภรณ์ โมสิกรัตน์ นายกเหล่ากาชาดจังหวัดแม่ฮ่องสอน นายสมชาย ลีหล้าน้อย รองผู้ว่าราชการจังหวัด นายประเสริฐ จิตต์พลีชีพ รองผู้ว่าราชการจังหวัด พร้อมด้วยหัวหน้าส่วนราชการ พี่น้องประชาชนชาวแม่ฮ่องสอน และนักท่องเที่ยวร่วมงานเป็นจำนวนมาก
								โดยงานดังกล่าวฯ จัดขึ้นภายใต้การส่งเสริมขององค์การบริหารส่วนจังหวัดแม่ฮ่องสอน ภาคีหน่วยงานภาครัฐ และองค์กรชุมชน ระหว่างวันที่ 6 - 10 ธันวาคม 2566 ตั้งแต่เวลา 18.00 น.ไปจนถึง 21.00 น. ภายใต้แนวคิด “ชิม ชม ช้อป แชะ แชร์” โดยนำเสนอผ่านกิจกรรมต่างๆ ภายในงาน อาทิ การชิมอาหารและขนมไทใหญ่ การแสดงศิลปวัฒนธรรม การจำลองวิถีชีวิตของกลุ่มชาติพันธุ์ต่างๆ, การออกร้านจำหน่ายอาหารไทใหญ่และสินค้าชุมชน</p>
						</div>


					</div>
				</div>
			</div>

		</div>
	</div>
	</div>
	<!-- end single article section -->

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
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>

</html>