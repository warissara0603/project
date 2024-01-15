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
						<p>ติดต่อ & สอบถาม</p>
						<h1>ติดต่อเรา</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>ร้านตั้งอยู่ที่</h4>
							<p>ด้านหน้าโรงเรียน อบจ. บ้านจองคำ
								ถ. ขุนลุมประพาส ต.จองคำ
								อ. เมือง จ.แม่ฮ่องสอน</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i>เวลาเปิดให้บริการ</h4>
							<p>วันจันทร์ - วันอาทิตย์ เวลา 8 : 00 - 17 : 00 น.</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone : 098 905 6624 <br> Email : hedkorleawOTOP@gmail.com
								<br>Facebook : @hedkorleawOTOP <br> Line : hlkpao
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" style="margin-bottom: 100px;">
					<p> <i class="fas fa-map-marker-alt"></i>ค้นหาที่ตั้งของเรา</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.3553257221606!2d97.9611145749836!3d19.31038168194307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30daa62f67608975%3A0x64ffaf803894e599!2z4LmA4Liu4LmH4LiU4LiB4LmJ4Lit4LmA4Lir4Lil4Li14Lii4LinIChIZWQgS29yIExlYXcp!5e0!3m2!1sth!2sth!4v1705051781557!5m2!1sth!2sth" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

			</div>
		</div>
	</div>
	<!-- end find our location -->

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
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>

</html>