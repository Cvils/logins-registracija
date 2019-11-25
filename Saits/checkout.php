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
<title>Mana Miskaste</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Emils project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
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
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Majaslapa</a></li>
										<li><a href="cart.php">Tava miskaste</a></li>
										<li>Apmaksa</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

				<!-- Billing Info -->
				<div class="col-lg-6">
					<div class="billing checkout_section">
						<div class="section_title">Pasutijuma Informacija</div>
						<div class="section_subtitle">Aizpildi visus laukus</div>
						<div class="checkout_form_container">
							<form action="#" id="checkout_form" class="checkout_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="checkout_name">Vards*</label>
										<input type="text" id="checkout_name" class="checkout_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="checkout_last_name">Uzvards*</label>
										<input type="text" id="checkout_last_name" class="checkout_input" required="required">
									</div>
								</div>
								<div>
									<!-- Company -->
									<label for="checkout_company">Uznemums</label>
									<input type="text" id="checkout_company" class="checkout_input">
								</div>
								<div>
									<!-- Country -->
									<label for="checkout_country">Valsts*</label>
									<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
										<option></option>
										<option>Latvija</option>
										<option>Igaunija</option>
										<option>Lietiva</option>
										<option>Zviedrija</option>
									</select>
								</div>
								<div>
									<!-- Address -->
									<label for="checkout_address">Adrese*</label>
									<input type="text" id="checkout_address" class="checkout_input" required="required">
									<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" required="required">
								</div>
								<div>
									<!-- Zipcode -->
									<label for="checkout_zipcode">ZIP - Kods*</label>
									<input type="text" id="checkout_zipcode" class="checkout_input" required="required">
								</div>
								<div>
									<!-- City / Town -->
									<label for="checkout_city">Pilseta*</label>
									<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
										<option></option>
										<option>Riga</option>
										<option>Daugavpils</option>
										<option>Ikskile</option>
										<option>Ogre</option>
									</select>
								</div>
								<div>
									<!-- Province -->
									<label for="checkout_province">Rajons*</label>
									<select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
										<option></option>
										<option>Plavnieki</option>
										<option>Imanta</option>
										<option>Jugla</option>
										<option>Maskacka</option>
									</select>
								</div>
								<div>
									<!-- Phone no -->
									<label for="checkout_phone">Tel. Nr.*</label>
									<input type="phone" id="checkout_phone" class="checkout_input" required="required">
								</div>
								<div>
									<!-- Email -->
									<label for="checkout_email">E-Pasts*</label>
									<input type="phone" id="checkout_email" class="checkout_input" required="required">
								</div>
								<div class="checkout_extra">
									<div>
										<input type="checkbox" id="checkbox_terms" name="regular_checkbox" class="regular_checkbox" checked="checked">
										<label for="checkbox_terms"><img src="images/check.png" alt=""></label>
										<span class="checkbox_title">Likumi un Nosacijumi</span>
									</div>
									<div>
										<input type="checkbox" id="checkbox_account" name="regular_checkbox" class="regular_checkbox">
										<label for="checkbox_account"><img src="images/check.png" alt=""></label>
										<span class="checkbox_title">Saglabat Akkauntu</span>
									</div>
									<div>
										<input type="checkbox" id="checkbox_newsletter" name="regular_checkbox" class="regular_checkbox">
										<label for="checkbox_newsletter"><img src="images/check.png" alt=""></label>
										<span class="checkbox_title">Pierakstities uz jaunumiem</span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Order Info -->

				<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Jusu pasutijums</div>
						<div class="section_subtitle">Pasutijuma informacija</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Produkts</div>
								<div class="order_list_value ml-auto">iPhone X; iPhone 6s; iPhone XS Max</div>
							</div>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Cena bez PVN</div>
									<div class="order_list_value ml-auto">€3559.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Kopeja par iericem</div>
									<div class="order_list_value ml-auto">€4659.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Piegade</div>
									<div class="order_list_value ml-auto">Bezmaksas</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Kopa:</div>
									<div class="order_list_value ml-auto">€4659.90</div>
								</li>
							</ul>
						</div>

						<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								<label class="payment_option clearfix">Paypal
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Samaksat Kurjeram
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Bankas karte (MasterCard, Visa)
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Caur bankas parskaitijumu
									<input type="radio" checked="checked" name="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

						<!-- Order Text -->
						<div class="order_text">Mes apstradasim jusu pasutijumu 48 - stundas, un nosutisim jums informativo vestuli, uz noradito e-pastu.</div>
						<div class="button order_button"><a href="#">Apstiprinat Pasutijumu</a></div>
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
<script src="js/checkout.js"></script>
</body>
</html>