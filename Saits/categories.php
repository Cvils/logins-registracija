<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Apple</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Emils project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="index.php">MegaBit.</a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="categories.php">Apple</a>
										<ul>
											<li><a href="categories.php">iPhone</a></li>
											<li><a href="categories.php">iMac</a></li>
											<li><a href="categories.php">MacBook</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.php">Aksesuari</a>
										<ul>
											<li><a href="categories.php">Datoram</a></li>
											<li><a href="categories.php">Telefonam</a></li>
											<li><a href="categories.php">Televizoram</a></li>
										</ul>
									</li>
									<li><a href="contact.php">Kontakti</a></li>
                                    <li>
                                        <?php  if (isset($_SESSION['username'])) : ?>
                                            <p>Sveiks <strong><?php echo $_SESSION['username']; ?></strong></p>
                                            <p>  <a href="login.php?logout='1'" style="color: black; font-size: 16px; font-weight: 600;">Izlogoties</a> </p>
                                        <?php endif ?>
                                    </li>
								</ul>
							</nav><div class="header_extra ml-auto">
							<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">

				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.php">Apple<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">iPhone<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">iMac<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">MacBook<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="categories.php">Aksesuari<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="categories.php">Datoram<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Telefonam<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="categories.php">Televizoram<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					<li class="page_menu_item menu_mm"><a href="contact.php">Kontakti<i class="fa fa-angle-down"></i></a></li>
                    <li>
                        <?php  if (isset($_SESSION['username'])) : ?>
                            <p>Sveiks <strong><?php echo $_SESSION['username']; ?></strong></p>
                            <p>  <a href="login.php?logout='1'" style="color: black; font-size: 16px; font-weight: 600;">Izlogoties</a> </p>
                        <?php endif ?>
                    </li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">iPhone's<span>.</span></div>
								<div class="home_text"><p>Izbaudi labako telefonu pasaule, un neparmaksa par to.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Atrasti <span>12</span> rezultati</div>
						<div class="sorting_container ml-md-auto">
							<div class="sorting">
								<ul class="item_sorting">
									<li>
										<span class="sorting_text">Filtret pec</span>
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
										<ul>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Standarts</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Cena</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Nosaukums</span></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
							<div class="product_extra product_new"><a href="categories.php">Jaunums</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone XS</a></div>
								<div class="product_price">€670</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Izpardosana</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone X</a></div>
								<div class="product_price">€520</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 8</a></div>
								<div class="product_price">€710</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 7</a></div>
								<div class="product_price">€330</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_5.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 6</a></div>
								<div class="product_price">€170</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_6.jpg" alt=""></div>
							<div class="product_extra product_hot"><a href="categories.php">Pirktakais</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 5</a></div>
								<div class="product_price">€240</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_7.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 4</a></div>
								<div class="product_price">€70</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_8.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Pirktakais</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone XS Max</a></div>
								<div class="product_price">€490</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_9.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Pirktakais</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone XR</a></div>
								<div class="product_price">€410</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_10.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Pirktakais</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 5s</a></div>
								<div class="product_price">€365</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_11.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Pirktakais</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 6s</a></div>
								<div class="product_price">€195</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_12.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Pirktakais</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 7 Plus</a></div>
								<div class="product_price">€580</div>
							</div>
						</div>

					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">MegaBit.</a></div>
						<div class="copyright ml-auto mr-auto">
							<script>document.write(new Date().getFullYear());</script><a href="#" target="_blank"> MEGABIT</a></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
</body>
</html>