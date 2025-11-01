<?php include 'db_connection.php'; ?>


<?php
$id_cat = $_GET['id'];

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169 && id=$id_cat";
$result_sCat = $conn->query($sql_sCat);
$img_path = 'https://infspl.com/development/assets/front/img/';

$sql_services = "SELECT * FROM services WHERE scategory_id=$id_cat ORDER BY serial_number";
$result_services = $conn->query($sql_services);
$service_path = 'services/';


if ($result_sCat->num_rows > 0) {
	// Output data of each row
	while ($row = $result_sCat->fetch_assoc()) {
		
		$image = $row['image'];
		$cat_path = 'service_category_icons/';
		$img_cat_path = $img_path . $cat_path . $image;
		$name = $row['name'];
		$description = $row['short_text'];
		$serial_number = $row['serial_number'];
	}
} else {
	echo "0 results";
}




?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Service | INFSPL- Investing Intellect For You</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="top-aside top-left">
						<ul class="top-nav">
							<li><a href="blog_category.php" style="color: #1e566f">Blogs</a></li>
							<li><a href="career.php" style="color: #1e566f">Career</a></li>

						</ul>
					</div>
					<div class="top-aside top-right clearfix">
						<ul class="top-contact clearfix">
							<li class="t-email t-email1">
								<em class="fa fa-envelope-o" aria-hidden="true"></em>
								<span><a href="#" style="color: #1e566f">contact@infspl.com</a></span>
							</li>
							<li class="t-phone t-phone1">
								<em class="fa fa-phone" aria-hidden="true"></em>
								<span style="color: #1e566f">+91 9921003190</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- #end Topbar -->
		<!-- Navbar -->
		<div class="navbar navbar-primary">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="./">
					<img class="logo logo-dark" alt="" src="image/logo.png" srcset="image/logo2x.png 2x">
					<img class="logo logo-light" alt="" src="image/logo.png" srcset="image/logo.png 2x">
				</a>
				<!-- #end Logo -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
						aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Q-Button for Mobile -->
					<div class="quote-btn"><a class="btn" href="get-a-quote.html">Sign in</a></div>
				</div>
				<!-- MainNav -->
				<nav class="navbar-collapse collapse" id="mainnav">
					<ul class="nav navbar-nav">
						<li class="dropdown active"><a href="./">Home</a>
							<!-- <ul class="dropdown-menu">
								<li><a href="index.html">Home - Default</a></li>
								<li><a href="index-v2.html">Home - Version 2</a></li>
								<li><a href="index-v3.html">Home - Version 3</a></li>
								<li><a href="index-v4.html">Home - Version 4</a></li>
								<li><a href="index-static.html">Home - Image</a></li>
							</ul> -->
						</li>
						<li class="dropdown"><a href="/#who">About us<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/#who">Who are we </a></li>
								<li><a href="/#service">What we do</a></li>
								<li><a href="/#trust">Trust the best </a></li>
								<li><a href="/#team">Team</a></li>
								<li><a href="/#clients">Our Clients</a></li>
								<li><a href="/#test">Testimonials</a></li>
								<li><a href="/portfolio.php#portfolio">Portfolio Company</a></li>
								<li><a href="/portfolio.php#incubation">Incubation Centers</a></li>
								

								<!-- <ul class="dropdown-menu">
										<li><a href="shortcode.html">Shortcode - Element</a></li>
										<li><a href="shortcode-carousel.html">Shortcode - Carousel</a></li>
										<li><a href="shortcode-banner.html">Shortcode - Banner</a></li>
									</ul> -->

								<!-- <li><a href="typography.html">Typography</a></li> -->
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Services <b class="caret"></b></a>
							<ul class="dropdown-menu">

								<?php


								$sql_cat = "SELECT * FROM scategories WHERE language_id=169";
								$result_cat = $conn->query($sql_cat);


								if ($result_cat->num_rows > 0) {
									// Output data of each row
								
									while ($row_cat = $result_cat->fetch_assoc()) {
										$id1 = $row_cat['id'];

										$name1 = $row_cat['name'];

										echo "<li><a href='service-starup.php?id=$id1'>$name1</a></li>";


									}
								} else {
									echo "0 results";
								}
								?>


							</ul>
						</li>
						<li><a href="career.php">Career</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="/#awards">Awards</a></li>
						<li class="quote-btn"><a class="btn" href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->
		<!-- Banner/Static -->
		<div class=" banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text">
							<h1 class="page-title" style="color: #1e566f">
								<?php echo $name; ?>
							</h1>

						</div>
						

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src= <?php echo $img_cat_path;?> alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->
	<!-- Service Section -->
	<div class="section section-services section-pad">
		<div class="container">
			<div class="content row">

				<div class="wide-md center">
					<h2 class="heading-lead">
						<?php echo $name; ?>
					</h2>
					<p>
						<?php echo $description; ?>
					</p>

					<!-- <p>A startup company is a newly established business, typically characterized by innovation,
						scalability, and a focus on addressing a specific market need or problem. Startups are
						often founded with a vision to bring a unique product, service, or technology to the
						market.</p>
					<p>To bring uniformity in the identified enterprises, the Department for Promotion of
						Industry and Internal Trade, Ministry of Commerce and Industry, Government of India has
						come out with a definition for an entity to be considered as a Startup:</p> -->
				</div>
				<!-- <div class="wide-md ">
					<ul class="list-style dots style-v2">
						<li>
							<p>Period of existence & operations should not be above 10 years from the Date of
								Incorporation.</p>
						</li>
						<li>
							<p>Incorporated as a Pvt. Ltd. Company or registered as a partnership firm or a
								limited liability partnership in India.</p>
						</li>
						<li>
							<p>Annual turnover not more than Rs. 100 crore in any of the financial years since
								its Incorporation.</p>
						</li>
						<li>
							<p>Entity not formed by splitting up or reconstruction of an existing business.</p>
						</li>

					</ul>


				</div> -->
				<!-- <p class="wide-md center">An entity shall cease to be a Startup on completion of ten years from the date
					of its incorporation/ registration or if its turnover for any previous year exceeds 100 Crore.</p> -->
				<!-- Feature Row  -->
				<div class="feature-row feature-service-row row">

					<?php
					if ($result_services->num_rows > 0) {
						// Output data of each row
						while ($row1 = $result_services->fetch_assoc()) {
							$service_id = $row1['id'];
							$service_name = $row1['title'];
							$service_image = $row1['main_image'];
							$img_service_path = $img_path . $service_path . $service_image;
							$service_summary = $row1['summary'];
							$serial_number = $row1['serial_number'];
							if ($serial_number % 2 == 0) {
								$oddOrEven = 'even';
							} else if ($serial_number % 3 == 1) {
								$oddOrEven = 'even first';
							} else {
								$oddOrEven = 'odd';
							}

							$url= 'startup-virtual-cfo.php?id='.$service_id.'&cat_id='.$id_cat;

							echo " <div class='col-md-4 col-sm-6 $oddOrEven'>
							<!-- feature box -->
							<div class='feature boxed'>
								<a href=$url>
									<div class='fbox-photo'>
										<img src= $img_service_path alt=''>
									</div>
								</a>
								<div class='fbox-content'>
									<h3 class='lead'><a href=$url>$service_name</a></h3>
								
									<p><a href=$url class='btn-link link-arrow-sm'>Learn More</a></p>
								</div>
							</div>
							<!-- End Feature box -->
						</div>
							
							
							
							";

						}
					} else {
						echo "0 results";
					}
					?>




				</div>
				<!-- Feture Row  #end -->

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Call Action -->
	<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/plx-cta.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h2>Have any Question?</h2>
						<p>We're here to help. Send us an email or call us at  +91 9921003190. Please feel free to contact
							our expert.</p>
						<a class="btn btn-alt" href="contact.php">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Footer Widget-->
	<div class="footer-widget style-v2 section-pad-md">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-text">
							<div class="wgs-content">
								<p><img src="image/logo.png" srcset="image/logo2x.png 2x" alt=""></p>
								
								<p>INFSPL is a Business Growth Strategists and an Investment Banking Company providing services for StartUp, MSME & Large Enterprise.
								</p>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Our Services</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="service-starup.php?id=59">Startup</a></li>
									<li><a href="service-starup.php?id=60">MSME</a></li>
									<li><a href="service-starup.php?id=61">Large Enterprise</a></li>

								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-2 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Quick Links</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="index.php">Home</a></li>
									<li><a href="/#who">About Us</a></li>
									<li><a href="teams.php">Team</a></li>
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="career.php">Career</a></li>
									<li><a href="forms.php">Forms</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">Get In Touch</h5>
							<div class="wgs-content">
								Shivdarshan Chambers,<br>
									2nd Floor, Office No – 7&12,<br>
									Marketyard Road, Pune – 411037<br>
									Maharashtra, India.
								<p>
									<em class="fa fa-envelope-o" aria-hidden="true"></em>
									<span><a href="#" style="color: #1e566f">contact@infspl.com</a></span>
								</p>
								<p>
									<!-- <span>Toll Free</span>: (1-800) 234 5678<br> -->
									<span>Phone</span>: +91 9921003190
								</p>
								<ul class="social">
									<li><a href="https://www.facebook.com/intellectualservices03"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="https://mobile.twitter.com/infspl"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="https://www.linkedin.com/company/intellectual-investments-financial-services"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->

	<!-- Copyright -->
	<div class="copyright style-v2">
		<div class="container">
			<div class="row">

				<div class="row">
					<div class="site-copy col-sm-7">
						<p>&copy; 2024 Intellectual Investments & Financial Services Pvt. Ltd. <a href="#">All Rights
								Reserved</a></p>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- End Copyright -->

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

</html>