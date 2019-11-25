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
<title>Miskaste</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Emils project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
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
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Majaslappa</a></li>
										<li><a href="categories.php">Kategorijas</a></li>
										<li>Mana miskaste</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Prece</div>
						<div class="cart_info_col cart_info_col_price">Cena</div>
						<div class="cart_info_col cart_info_col_quantity">Daudzums</div>
						<div class="cart_info_col cart_info_col_total">Kopa</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="images/cart_1.jpg" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#">iPhone X 256GB</a></div>
								<div class="cart_item_edit"><a href="#">Labot Preci</a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price">€790.90</div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>Daudz.</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Total -->
						<div class="cart_item_total">€790.90</div>
					</div>

				</div>
			</div>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="#">Turpinat iepirkties</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<div class="button clear_cart_button"><a href="#">Notirit Miskasti</a></div>
							<div class="button update_cart_button"><a href="#">Uzlabot Miskasti</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Piegades metode</div>
						<div class="section_subtitle">Ivelies vieno no piedavatiem</div>
						<div class="delivery_options">
							<label class="delivery_option clearfix">Piegade nakama diena
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">€$4.99</span>
							</label>
							<label class="delivery_option clearfix">Standarta piegade
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">€1.99</span>
							</label>
							<label class="delivery_option clearfix">Sanemsu pats
								<input type="radio" checked="checked" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">Bezmaksas</span>
							</label>
						</div>
					</div>

					<!-- Coupon Code -->
					<div class="coupon">
						<div class="section_title">Kupons</div>
						<div class="section_subtitle">Ieraksti seit savu kuponu</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button"><span>Pielietot</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Miskastes kopums</div>
						<div class="section_subtitle">Pedejo cenu parskats</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Precu kopeja cena</div>
									<div class="cart_total_value ml-auto">€790.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Piegade</div>
									<div class="cart_total_value ml-auto">Bezmaksas</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Kopa:</div>
									<div class="cart_total_value ml-auto">€790.90</div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="#">Samaksat</a></div>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>