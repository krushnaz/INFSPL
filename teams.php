<?php include 'db_connection.php'; ?>

<?php $id = $_GET['id'] ?? '#';

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Teams | INFSPL- Investing Intellect For You</title>
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

										$name = $row_cat['name'];

										echo "<li><a href='service-starup.php?id=$id1'>$name</a></li>";


									}
								} else {
									echo "0 results";
								}
								?>


							</ul>
						</li>

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
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text">
							<h1 class="page-title" style="color: #1e566f;">Management Team</h1>

						</div>


					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/team_infs.jpg" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->
	<!-- Content Section -->
	<div class="section section-contents bg-light section-pad">
		<div class="container">
			<div class="content ">

				<div class="wide-md center">
					<h2>Board of Directors</h2>
					<!-- <p>Lorem ipsum dolor sit amet consectetur to adipiscing elit sed dot eiusmod tempor incididunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullamco laboris .</p> -->
				</div>
				<div class="gaps size-2x"></div>
				<div class="row">
					<div class="col-md-12">

						<?php
						// get team
						
						$sql_members = "SELECT * FROM members WHERE language_id=169";
						$result_members = $conn->query($sql_members);
						$img_path = 'https://infspl.com/development/assets/front/img/';
						if ($result_members->num_rows > 0) {
							// Output data of each row
							while ($row = $result_members->fetch_assoc()) {
								$id = $row['id'];
								$team_img = $row['image'];
								$team_path = 'members/';
								$img_team_path = $img_path . $team_path . $team_img;
								$team_name = $row['name'];
								$team_rank = $row['rank'];
								$team_linkedIn = $row['linkedin'];

								if ($id % 2 == 0) {
									$team_odd_even = 'even';
								} else {
									$team_odd_even = 'odd';
								}


								echo "
								<div class='team-profile' id='$id'>
							<div class='team-member row'>
								<div class='team-photo col-md-4 col-sm-5 col-xs-12'>
									<img alt='' src=$img_team_path>
								</div>
								<div class='team-info col-md-8 col-sm-7 col-xs-12'>
									<h3 class='name'>$team_name</h3>
									<p class='sub-title'>$team_rank</p>
									<a
											href=$team_linkedIn><em
												class='fa fa-linkedin' aria-hidden='true'></em></a>";

								if ($id == 28) {
									echo "<p> Dinesh brings to the table 21+ Years of Professional Expertise in the Financial
									Domain.
									Being a Chartered Accountant he has worked in multiple leadership roles across
									sectors.
									<br>
									Being a Business Growth Strategist, Dinesh has diverse experience in Core
									Business Services across multiple business domains from small to large scale
									enterprises. He believes in delivering real business value on a real-time basis
									so that each Business can get its benefits on time.
									<br>
									Dinesh’s experience in Investment Banking mainly includes Services like: <br>
									-Growth Strategy Advisor for taking Enterprise till successfully raising funds
									from IPO. <br>
									-Virtual Chief Financial Officer (CFO). <br>
									-Consultancy to all kinds of Business related to Financial Decisions. <br>
									-Debt Instruments like OCD, OCRPS, CCPS, NCD, etc. Structuring for all kinds of
									Business. <br>
									-Projected Financials, Valuation of Company, Founders Grooming, Pitch Deck,
									Evaluation of Market Strategy, Competitors Analysis, etc. <br>
									-Raising of Funds for all business sectors of Start-Up, MSME & Large Enterprises
									from Pool of Investors like HNIs, UHNIs, SFO, Private Equity (PE), VCs, and
									Angel Investors <br>
									-Mergers & Acquisitions (M&A). <br>
									-Due Diligence. <br>
									-Legal Framework. <br>
									-Advisory & Mentoring. <br>

									He is also an Angel Investor, Jury & Panel Member at various Recognised Events.
									Dinesh is an avid Reader, a Passionate Mountain Trekker, and a Marathon
									Enthusiast; also believes in giving back to the community through various Social
									Causes.
								</p>";
								} else if ($id == 29) {
									echo "<p>Kapil has experience of over 19+ years in the Corporate Enterprise Domain and also holds a degree in M.Com and MBA Finance. <br>

									He has an in-depth knowledge of Core Business Operations as he handled his Family Business - of Garment Manufacturing and also handled Senior Positions for Corporate Service Delivery in General Insurance, Motor Insurance, Telecom, and Food Sector.  
									<br>
									He has worked in multiple roles and excels at; <br>
									Business Development & Operations <br>
									Deal Sourcing <br>
									Client Relations <br>
									Investor Engagement <br>
									Business tie-ups <br>
									Marketing, etc.   <br>
									
									He also specializes in Idea Validation as knows how to analyze the pulse of the market and helps in new product/service planning and development. <br>
									
									
									
									Kapil is also an Angel Investor, Jury & Panel Member at various Recognised Events. <br>
									Being a foodie at heart, he loves cooking, is a motor enthusiast, and is always ready to go the extra mile to help anyone in need.
									 </p>";
								} else if ($id == 30) {
									echo "<p>Veena has experience of over 15+ years in the Education & Garment Sector. <br>
									She has an in-depth knowledge of Core Business Operations specifically related to Marketing, Advertising, Design, Human Resources, Operations, and IT platforms.      
									<br>
									
									With a natural Creative Acumen, she has vast experience in; <br>
									Product Design <br>
									Marketing <br>
									Social Media Strategy <br>
									People Management and 
									Client Engagement. 
									
									<br>
									Veena always ensures the delivery of the best business-related services on a real-time basis.         
									
									<br>
									At INFSPL, she always ensures the right balance of People, Skills & best mind is maintained at all times.  
									</p>";
								}



								echo "</div>
									</div>
								</div>";




							}
						} else {
							echo "0 results";
						}
						?>




					</div>

				</div>
			</div>
		</div>
		<!-- End Section -->
		<!-- Content Section -->

		<!-- End Section -->


		<!-- Call Action -->
		<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/plx-cta.jpg');">
			<div class="cta-block">
				<div class="container">
					<div class="content row">

						<div class="cta-sameline">
							<h2>Have any Question?</h2>
							<p>We're here to help. Send us an email or call us at +91 9921003190. Please feel free to
								contact our expert.</p>
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
										<li><a href="https://www.facebook.com/intellectualservices03"><em
													class="fa fa-facebook" aria-hidden="true"></em></a></li>
										<li><a href="https://mobile.twitter.com/infspl"><em class="fa fa-twitter"
													aria-hidden="true"></em></a></li>
										<li><a
												href="https://www.linkedin.com/company/intellectual-investments-financial-services"><em
													class="fa fa-linkedin" aria-hidden="true"></em></a></li>
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
							<p>&copy; 2024 Intellectual Investments & Financial Services Pvt. Ltd. <a href="#">All
									Rights Reserved</a></p>
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