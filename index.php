<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ツ Ocean Food</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		 <![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/loadingoverlay.min.js"></script>
		<style>
			#hot-deal.section {
				padding: 60px 0px;
				margin: 30px 0px;
				background-color: #E4E7ED;
				background-image: url('images/p1.png');
				background-position: center;
				background-repeat: no-repeat;
			}
			.atext{
				font-family: 'Montserrat', sans-serif;
				font-size: 12px;
			}
			/* width */
			::-webkit-scrollbar {
				width: 10px;
			}

			/* Track */
			::-webkit-scrollbar-track {
				box-shadow: inset 0 0 5px grey; 
				border-radius: 0px;
				background: #000; 
			}
			
			/* Handle */
			::-webkit-scrollbar-thumb {
				background: #bb0000; 
				border-radius: 10px;
				border: 1px dashed white;
			}

			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover {
				background: #c80000; 
			}
			#back2Top {
				width: 40px;
				line-height: 45px;
				overflow: hidden;
				z-index: 999;
				display: none;
				cursor: pointer;
				-moz-transform: rotate(270deg);
				-webkit-transform: rotate(270deg);
				-o-transform: rotate(270deg);
				-ms-transform: rotate(270deg);
				transform: rotate(270deg);
				position: fixed;
				bottom: 5%;
				right: 0;
				background-color: #DDD;
				color: #bb0000;
				text-align: center;
				font-size: 30px;
				text-decoration: none;
				margin-right: 2%;
				border-radius: 5px;
			}
			#back2Top:hover {
				background-color: #bb0000;
				color: #DDD;
			}
		</style>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<?php
						if(isset($_SESSION['id'])){
					?>
					<li class="dropdown pull-right">
						<a class="dropdown-toggle atext" data-toggle="dropdown" href="#" style="color: white;">
						<i class="fa fa-user-o" style="color:#c80000"></i>
								<?php echo $_SESSION['email'];?> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-user" style="font-family:Montserrat;">
							<li><a href="index.php?menu=user" class="atext"><i class="fa fa-user fa-fw" style="color:#c80000"></i> User Profile</a>
							</li>
							<li class="divider"></li>
							<li><a href="logout.php" class="atext"><i class="fa fa-sign-out fa-fw" style="color:#c80000"></i> Logout</a>
							</li>
						</ul>
					</li>
					<?php
							} 
							else{
						?>
					<ul class="header-links pull-right">
						<li><a href="login.php"><i class="fa fa-user-o"></i> Login</a></li>
						<li><a href="register.php"><i class="fa fa-user-o"></i> Register</a></li>
					</ul>
					<?php
							}
						?>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php?menu=home" class="#">
									<img src="images/logofood.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="index.php?menu=searchpro" method="post">
									<select name="searchCol" class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Shellfish</option>
										<option value="2">Squid</option>
										<option value="3">Crap</option>
										<option value="4">Fish</option>
										<option value="5">Shrimp</option>
									</select>
									<input type="text" class="input" name="txtSearch" placeholder="Search here">
									<button name="ok" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								<!-- Wishlist -->
								<div>
									<a href="#footer">
										<i class="fa fa-info-circle"></i>
										<span>Information</span>
									</a>
								</div>
								<!-- /Wishlist -->
								<?php
									if(isset($_SESSION['id'])){
								?>
								<!-- Cart -->
								<div>
									<a href="index.php?menu=order">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
									</a>
								</div>
								<!-- /Cart -->
								<?php
									}
								?>
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li id="li1"><a href="index.php?menu=home" id="a1">Home</a></li>
						<li id="li2"><a href="index.php?menu=product" id="a2">Products</a></li>
						<li id="li3"><a href="index.php?menu=category" id="a3">Categories</a></li>
						<li id="li5"><a href="index.php?menu=news" id="a5">NewsFood</a></li>
						<li id="li4"><a href="index.php#footer" id="a4">About</a></li>
						<?php
							if(isset($_SESSION['id'])){
								$active = "";
								$active = $_SESSION['active'];
								if($active == 1){
						?>
						<li id="li6"><a href="index.php?menu=insert" id="a6">*Add Product</a></li>
						<li id="li7"><a href="index.php?menu=delete" id="a7">*Del-Edit Product</a></li>
						<li id="li8"><a href="index.php?menu=report" id="a8">*Report</a></li>
						<?php
								}
							}
						?>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		
		<?php
			$menu="";
			$page="";
			if(isset($_GET['menu'])){
				$menu = $_GET['menu'];
			}
			switch($menu){
				case "home":{
					$page = "home.php";
					break;
				}
				case "product":{
					$page = "store.php";
					break;
				}
				case "category":{
					$page = "category.php";
					break;
				}
				case "order":{
					$page = "order.php";
					break;
				}
				case "showcate":{
					$page = "storecate.php";
					break;
				}
				case "check":{
					$page = "product.php";
					break;
				}
				case "insert":{
					$page = "insert.php";
					break;
				}
				case "delete":{
					$page = "deleteproduct.php";
					break;
				}
				case "edit":{
					$page = "editproduct.php";
					break;
				}
				case "searchpro":{
					$page = "searchproduct.php";
					break;
				}
				case "user":{
					$page = "userpro.php";
					break;
				}
				case "news":{
					$page = "newsfood.php";
					break;
				}
				case "report":{
					$page = "report.php";
					break;
				}
				default: $page = "home.php";
			}
			include($page);
		?>   

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Contact <strong>HERE!</strong></p>
							<ul class="newsletter-follow">
								<li>
									<a href="https://www.facebook.com/chanon.thakhong" target="blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/?lang=th" target="blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/mark_rach_chanon/" target="blank"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.pinterest.com/chanonzero11/" target="blank"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section" id="ABOUT">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Good Food </br>Good Choice Ocean Food ツ </br>Content on this site for education</p>
								<ul class="footer-links">
									<li><a href="https://goo.gl/maps/a3FLY4hxow7Rk2Fk9" target="blank"><i class="fa fa-map-marker"></i>73000 Nakhonpathom</a></li>
									<li><a href="tel:0928071328"><i class="fa fa-phone"></i>092-807-1328</a></li>
									<li><a href="mailto: chanon.white.11@gmail.com"><i class="fa fa-envelope-o"></i>chanon.white.11@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="index.php?menu=showcate&category=4">Menu Fish</a></li>
									<li><a href="index.php?menu=showcate&category=1">Menu Shellfish</a></li>
									<li><a href="index.php?menu=showcate&category=5">Menu Shrimp</a></li>
									<li><a href="index.php?menu=showcate&category=3">Menu Crap</a></li>
									<li><a href="index.php?menu=showcate&category=2">Menu Sqiud</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#footer">About Us</a></li>
									<li><a href="#footer">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="index.php?menu=user">My Account</a></li>
									<li><a href="index.php?menu=order">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> ツ Ocean Food <i class="fa fa-heart-o" aria-hidden="true"></i>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
		<a id="back2Top" title="Back to top" href="#">&#10148;</a>
		<!-- jQuery Plugins -->
		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

		<script>
			/*Scroll to top when arrow up clicked BEGIN*/
			$(window).scroll(function() {
				var height = $(window).scrollTop();
				if (height > 100) {
					$('#back2Top').fadeIn();
				} else {
					$('#back2Top').fadeOut();
				}
			});
			$(document).ready(function() {
				$("#back2Top").click(function(event) {
					event.preventDefault();
					$("html, body").animate({ scrollTop: 0 }, "slow");
					return false;
				});

			});
			/*Scroll to top when arrow up clicked END*/
		</script>
		
		<script>
			$(document).ready(function(){
				$(".linkDelete").click(function(){
					return confirm("Confirm Delete")
				});
			});
			$(document).ready(function(){
				$(".delete").click(function(){
					return confirm("Check Out Complete")
				});
			});
		</script>

		<script>
		window.fbAsyncInit = function() {
			FB.init({
			appId            : 'your-app-id',
			autoLogAppEvents : true,
			xfbml            : true,
			version          : 'v3.0'
			});
		};
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		(function(d){
			var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
			js = d.createElement('script'); js.id = id; js.async = true;
			js.src = "https://connect.facebook.net/th_TH/all.js";
			d.getElementsByTagName('head')[0].appendChild(js);
			}(document));
		</script>
		
		<div class="fb-customerchat"
		page_id="<PAGE_ID>"
		ref="<OPTIONAL_WEBHOOK_PARAM>"
		theme_color="<HEX_COLOR_CODE>"
		logged_in_greeting="<GREETING_MESSAGE_FOR_LOGGED_IN_USERS>"
		logged_out_greeting="<GREETING_MESSAGE_FOR_LOGGED_OUT_USERS>"></div>
	</body>
</html>