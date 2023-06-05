<?php 
	session_start(); 
	if(isset($_SESSION['username'])){
		header('Location:./dashboard/admin/');
	}
?>

<!DOCTYPE html>
<html lang="en">
	

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />
		<meta name="format-detection" content="telephone=no">
		
		<!-- <link rel="icon" href="assets/images/logo2.png" type="image/x-icon" /> -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo-2.jpg" />
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo2.png" /> -->
		<title>Barangay Bolocboloc | LOGIN</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="styles/assets/css/assets.css">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/typography.css">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/shortcodes/shortcodes.css">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/loader.css">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		<style type="text/css">
			.red-hover:hover {
				background-color: #5691cf!important;
			}
		</style>
	</head>
	<style type="text/css">/*===================== 	Premery bg color =====================*/


:root {	--primary: #5691cf;	--sc-primary: #5691cf;}

/* Hex */.bg-primary,.btn,.comments-area .comment-form p input[type="submit"],.pagination > .active > a,.pagination > .active > span,.pagination > .active > a:hover,.pagination > .active > span:hover,.pagination > .active > a:focus,.pagination > .active > span:focus,.feature-filters .active > [class*="btn"],.list-num-count > li:before,.pagination-bx.primary .pagination > li > a, .pagination-bx.primary .pagination > li > span,button.back-to-top,.rev-btn{    background-color: #5691cf;}

/*Hex color :hover */.btn:active,.btn:hover,.btn:focus,.active > .btn,.bg-primary-dark,.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus ,.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus,.sidenav .closebtn:hover,.sidenav .closebtn:focus,.owl-btn-1.primary .owl-prev:hover, .owl-btn-1.primary .owl-next:hover,.owl-btn-2.primary .owl-prev:hover, .owl-btn-2.primary .owl-next:hover,.pagination-bx.primary .pagination > li > a:hover, .pagination-bx.primary .pagination > li > span:hover,.pagination-bx.primary .pagination > li.active > span,.pagination-bx.primary .pagination > li.active > a{    background-color: #5691cf;}

/*===================== 	Premery text color =====================*/a,.text-primary,.primary li:before,.menu-links .nav > li.active > a,.menu-links .nav > li:hover > a,.menu-links .nav > li .mega-menu > li ul a:hover,.menu-links .nav > li .sub-menu li:hover > a,footer a:active,footer a:focus,footer a:hover,footer h1 a,footer h2 a,footer h3 a,footer h4 a,footer h5 a,footer h6 a,footer p a,.testimonial-1 .testimonial-position,.acod-head a:after,.acod-head a,.acod-head a:hover,.acod-head a.collapsed:hover,.ttr-tabs .nav-tabs > li > a i,h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,.btn.outline,.btn-link:hover{    color: #5691cf;}

/*===================== 	Secondery bg color =====================*/.bg-secondry {    background-color: #5691cf;}

/*===================== 	Secondery text color =====================*/.text-secondry {    color: #5691cf;}.ovpr-light:after, .ovpr-middle:after, .ovpr-dark:after,.ovpr:after,.bg-primary{	background-color:#5691cf;}.footer-top,.footer-bottom {	background-color: #121921;}.ovbl-middle::after, .ovbl-light::after, .ovbl-dark::after{	

	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#267621+0,#267621+50,110038+100 */	background: #5691cf; 

	/* Old browsers */	background: -moz-linear-gradient(45deg, #5691cf 0%, #5691cf 50%, #5691cf 100%); 

	/* FF3.6-15 */	background: -webkit-linear-gradient(45deg, #5691cf 0%,#5691cf 50%,#5691cf 100%); 

	/* Chrome10-25,Safari5.1-6 */	background: linear-gradient(45deg, #5691cf 0%,#5691cf 50%,#5691cf 100%); 

	/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5691cf', endColorstr='#5691cf',GradientType=1 ); 

/* IE6-9 fallback on horizontal gradient */}.ttr-notify-header::after,.widget-bg1,.ttr-search-bar,.ttr-header,.ovpr-dark:after, .pricingtable-main,.account-head:after{	

	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#40993B+0,3f189a+100 */	background: #5691cf; 

	/* Old browsers */	background: -moz-linear-gradient(45deg, #5691cf 0%, #5691cf 100%); 

	/* FF3.6-15 */	background: -webkit-linear-gradient(45deg, #5691cf 0%,#5691cf 100%); 

	/* Chrome10-25,Safari5.1-6 */	background: linear-gradient(45deg, #5691cf 0%,#5691cf 100%); 

	/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5691cf', endColorstr='#5691cf',GradientType=1 ); 

	/* IE6-9 fallback on horizontal gradient */}/* Secondry Color */

.portfolio-bx .portfolio-info-bx,.btn.outline:hover,.course-info-list ul li a.active, .course-info-list ul li a:hover,.btn,.profile-tabnav .nav li a.active,button.back-to-top,.upcoming-event-carousel.owl-btn-1 .owl-prev, .upcoming-event-carousel.owl-btn-1 .owl-next,.courses-carousel .owl-nav .owl-next, .courses-carousel .owl-nav .owl-prev, .recent-news-carousel .owl-nav .owl-next, .recent-news-carousel .owl-nav .owl-prev, .testimonial-carousel .owl-nav .owl-next, .testimonial-carousel .owl-nav .owl-prev{	background-color:#5691cf;	color:#fff;}.footer_widget ul li a:hover,[class*="ovbl-"] .counter-style-1 .counter-text,.header-transparent .secondary-menu .btn-link:hover,.header-transparent .menu-links .nav > li:hover > a,.header-transparent .menu-links .nav > li.active > a{	color:#5691cf;}.course-info-list ul li a.active:hover, .course-info-list ul li a:hover,.btn:hover,.profile-tabnav .nav li a.active:hover,button.back-to-top:hover,.upcoming-event-carousel.owl-btn-1 .owl-prev:hover, .upcoming-event-carousel.owl-btn-1 .owl-next:hover,.courses-carousel .owl-nav .owl-next:hover, .courses-carousel .owl-nav .owl-prev:hover, .recent-news-carousel .owl-nav .owl-next:hover, .recent-news-carousel .owl-nav .owl-prev:hover, .testimonial-carousel .owl-nav .owl-next:hover, .testimonial-carousel .owl-nav .owl-prev:hover{	background-color:#5691cf;	color:#fff;}.heading-bx.left .title-head{	border-color:#5691cf;	}

.window-loading{
	overflow: hidden;
}

</style>

	<body id="bg">
		<div class="page-wraper">
			<div class="loader">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen hidden></iframe>
			</div>
			<div class="account-form">
				<div class="account-head" style="background-image:url('assets/images/bg23.png');"></div>
				<div class="account-form-inner">
					<div class="account-container">
						<div class="col-lg-12 m-b30" align="right">
				           	<a href="index.php" align="right" class="fa fa-close" aria-label="Close"></a>
				       	</div>
						<div class="heading-bx left">
							<?php if(isset($_SESSION['message'])): ?>
			                <div class="alert alert-<?= $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
			                    <?= $_SESSION['message']; ?>
			                </div>
				            <?php unset($_SESSION['message']); ?>
				            <?php endif ?>
							<h2 class="title-head">Login <span>Access</span></h2>
						</div>	
						<form class="contact-bx" method="POST" action="secure_login.php">
							<div class="row placeani">
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<label>Enter Username</label>
											<input name="user_id_auth" type="text" class="form-control" required>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group"> 
											<label>Enter Password</label>
											<input id="password" name="pass_key" type="password" class="form-control" required>
											<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div style="padding: 5px;"></div>
									<div class="form-group form-forget">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
											<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
										</div>
									</div>
								</div>
								<div class="col-lg-6 m-b30" align="right">
										<button name="submit" type="submit" value="Submit" name="login" class="red-hover btn button-md" style="background-color: #5691cf!important;" value="login">Login</button>
								</div>
								<div class="col-lg-12">
									<div class="form-group form-forget">
										<center>Don't have an account? <a href="registration.php">Register here</a>.</center>
									</div>
								</div>
								<div class="col-lg-6">
									<a href="forgot_password.php"><span>Forgot Password</a>.</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="styles/assets/js/jquery.min.js"></script>
		<script src="styles/assets/vendors/bootstrap/js/popper.min.js"></script>
		<script src="styles/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="styles/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="styles/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="styles/assets/vendors/magnific-popup/magnific-popup.js"></script>
		<script src="styles/assets/vendors/counter/waypoints-min.js"></script>
		<script src="styles/assets/vendors/counter/counterup.min.js"></script>
		<script src="styles/assets/vendors/imagesloaded/imagesloaded.js"></script>
		<script src="styles/assets/vendors/masonry/masonry.js"></script>
		<script src="styles/assets/vendors/masonry/filter.js"></script>
		<script src="styles/assets/vendors/owl-carousel/owl.carousel.js"></script>
		<script src="styles/assets/js/functions.js"></script>
		<script src="styles/assets/js/contact.js"></script>
		<script src="assets/js/customFunction.js"></script>
		<script>
			$('body').addClass('window-loading');
			var loader = document.querySelector(".loader")
			window.addEventListener("load", vanish);

			function vanish(){
				loader.classList.add("disppear");
				$('body').removeClass('window-loading');
			}
		</script>
	</body>

</html>