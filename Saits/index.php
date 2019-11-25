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
<title>MegaBit</title>
<meta http-equiv = "refresh" content = "; url = registration/index.php" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Emils project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item 1 -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Labakais Veikals Latvija.</div>
										<div class="home_slider_subtitle">Esam TOP 10 no popularakiem elektronikas veikaliem Latvija.</div>
										<div class="button button_light home_button"><a href="#">Sakt iepirkties</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item 2 -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Izcilas tehnologijas jau seit.</div>
										<div class="home_slider_subtitle">Vissjaunakas tehnologijas no pasaules sagaida tevi saja internetveikala.</div>
										<div class="button button_light home_button"><a href="#">Sakt iepirkties</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item 3 -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_3.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Letak nekur nebus.</div>
										<div class="home_slider_subtitle">Musu cenas ir tik trakas, ka neviens cits nevar piedavat tik zemas cenas, ka mes.</div>
										<div class="button button_light home_button"><a href="#">Sakt iepirkties</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">Izcila</li>
									<li class="home_slider_custom_dot">Kvalitate</li>
									<li class="home_slider_custom_dot">Seit!</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(images/avds_small.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Ietaupijums</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Viedtalruni</div>
						<div class="avds_link"><a href="categories.php">Skatit Vairak</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(images/avds_large.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Professionalie Aksesuari</div>
						<div class="avds_text">Branda aksessuari, kas palidzes uzlabot jusu sadarbibu ar tehniku.</div>
						<div class="avds_link avds_link_large"><a href="categories.php">Skatit Vairak</a></div>
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
					
					<div class="product_grid">

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
							<div class="product_extra product_new"><a href="categories.php">Jaunums</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 6s</a></div>
								<div class="product_price">€670</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Izpardosana</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone X</a></div>
								<div class="product_price">€1070</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 7</a></div>
								<div class="product_price">€770</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone XS</a></div>
								<div class="product_price">€1670</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_5.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 5s</a></div>
								<div class="product_price">€70</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_6.jpg" alt=""></div>
							<div class="product_extra product_hot"><a href="categories.php">Populars</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone SE</a></div>
								<div class="product_price">€570</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_7.jpg" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone 6</a></div>
								<div class="product_price">€530</div>
							</div>
						</div>

						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="images/product_8.jpg" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Populars</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">iPhone XR</a></div>
								<div class="product_price">€1470</div>
							</div>
						</div>

					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(images/avds_xl.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Nopietnas Ierices</div>
							<div class="avds_text">Ierices tavam nopietnam Biznesam.</div>
							<div class="avds_link avds_xl_link"><a href="categories.php">Skatit Vairak</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Bezmaksas piegade</div>
						<div class="icon_box_text">
							<p>Bezmaskas piegade visa Eiropa, sanemsiet 2 nedelu laika, vai atgrizisim naudu atpakal.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">14 Dienu Garantija</div>
						<div class="icon_box_text">
							<p>14 dienu laika jus varat samainit vai atdod pereci, un nepazaudet neko.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Konsultacija</div>
						<div class="icon_box_text">
							<p>Musu konsultanti ir vienmer Online, vini atbildes uz jusu interesejosiem jautajumiem.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Pieraksties uz musu jaunumiem</div>
						<div class="newsletter_text"><p>Pieraksties uz mums, un sanem interesantas ietas, ka ari atlaizu kuponus, un specialus piedavajums tiesi tev.</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Pierakstities</span></button>
							</form>
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
<script src="js/custom.js"></script>
</body>
</html>