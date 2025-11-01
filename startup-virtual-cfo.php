<?php include 'db_connection.php'; ?>


<?php
$id = $_GET['id'];
$cat_id = $_GET['cat_id'];

$sql_services = "SELECT * FROM services WHERE scategory_id=$cat_id AND id=$id AND language_id=169 ";
$result_services = $conn->query($sql_services);
$service_path = 'services/';
$img_path = 'https://infspl.com/development/assets/front/img/';

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169 && id=$cat_id";
$result_sCat = $conn->query($sql_sCat);


if ($result_services->num_rows > 0) {
	// Output data of each row
	while ($row1 = $result_services->fetch_assoc()) {
		$service_id = $row1['id'];
		$service_name = $row1['title'];
		$service_image = $row1['main_image'];
		$img_service_path = $img_path . $service_path . $service_image;
		$service_summary = $row1['summary'];
		$serial_number = $row1['serial_number'];
		$service_meta = $row1['meta_keywords'];
		$serial_content = $row1['content'];
		// if ($serial_number % 2 == 0) {
		// 	$oddOrEven = 'even';
		// } else if ($serial_number = 1) {
		// 	$oddOrEven = 'even first';
		// } else {
		// 	$oddOrEven = 'odd';
		// }

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
		<div>
			<center>
		<h2 class="heading-lg" style="padding-bottom:30px;">
			<?php





			if ($result_sCat->num_rows > 0) {
				// Output data of each row
			
				while ($row_cat = $result_sCat->fetch_assoc()) {


					$name = $row_cat['name'];
					

					echo "$name Services";


				}
			} else {
				echo "0 results";
			}
			?>
		</h2>
		</center>

	</div>





		<!-- #end Navbar -->
		<!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text">
							<h1 class="page-title">
								<?php echo $service_name; ?>
							</h1>
							<!-- <p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dicta.</p>						 -->
						</div>
						<!-- <div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li><a href="Service.html">Services</a></li>
								<li class="active"><span>Virtual CFO / Advisor for Financial, Taxation & Accounting</span></li>
							</ul>
						</div> -->

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src=<?php echo $img_service_path; ?> alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	
	<!-- End Header -->
	<!-- Content -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">

				<h2 class="heading-lg">
					<?php echo $service_name; ?>
				</h2>

				<p>
					<video src="assets/video/your_video_file.mp4" type="video/mp4" alt=""
						class="video-box alignright col-md-4 no-round" controls
						autoplay loop></video>
					<!--  <iframe src=<?php echo $service_meta; ?> alt="" class="alignright col-md-4 no-round"-->
					<!--style="width: 502px; height: 420px;"></iframe>-->

					<?php echo $serial_content; ?>

					<!-- <ul class="list-style dots style-v2">
					<li>Investigating and Verifying core information about a company/organisation before a final
						decision is taken towards Investment.</li>
					<li>For compliance teams, it comes up when considering new business relationships with new vendors
						and third parties.</li>
				</ul>


				The due diligence process allows to identify and assess risks, liabilities, and business problems in the
				company before finalizing the transaction, potentially avoiding losses.<br><br>

				B.Due Diligence may be of different types and depends upon the purpose for which Due Diligence is being
				carried out for;
				<ul class="list-style dots style-v2">
					<li>Financial Due Diligence.</li>
					<li>Regulatory Due Diligence.</li>
					<li>Vendor Due Diligence.</li>
					<li>Technology Diligence etc.</li>

				</ul>
				<h3 class="heading-lg">Our Scope of Services</h2>
					<ul class="list-style dots style-v2">
						<li>Assigning Expert Team having Team Leader with an industry experience of over 21+ years who
							helps in the entire Due Diligence process.
						</li>
						<li>In detail discussion with the Founders/ Business Owners/ Investors to understand the purpose
							& timelines of the Due Diligence. Also about the Organisation of whom Due Diligence needs to
							be conducted, etc.</li>
						<li>Sharing with Organisation of whom Due Diligence needs to be conducted an Initial List of
							Requirements for Due Diligence.</li>
						<li>Upon receipt of the information a detailed Strategy is designed along with the deliverables.
						</li>
						<li>Timely review and updates during the due diligence process is provided. Also if required all
							the required support is also being provided to ensure the desired result is achieved.</li>
						<li>Draft Due Diligence Report sharing with Founders/Business Owners/Investors for their
							internal review & also for further joint discussion.</li>
						<li>Issuing final Due Diligence Report.</li> -->


			</div>
		</div>
	</div>
	<!-- End Content -->
	<!-- Content -->
	<!-- <div class="section section-contents section-pad bg-light">
		<div class="container">
			<div class="content row"> -->


	<!-- <div class="content-box">
					<h4><img class="alignright no-resize" src="image/graph-b.png" alt="" width="120" height="120">Services We Provide</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididu labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit iusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<h5>Review of</h5>
					<ul class="list-style dots style-v2">
						<li>-Monthly MIS</li>
						<li>Monthly Financial Statements: Profit & Loss & Balance Sheet. </li>
						<li>Annual Financial Report before discussion & Approval at Board of 
							Directors Meeting & Signatures by Directors.</li>
						<li>-Pricing Policy of each Product together with its Revenue, Expenses & 
							Profit Outcome (Gross Margin & Net Profit) & also giving suggestion for 
							further reduction in the Expenses for better Gross Margin & Net Profit 
							without impact to quality of Product.  </li>
						<li>Marketing Strategy (B2B, B2C, D2C etc.) together with its Financial 
							Impacts, Monthly Burning Cost v/s its Result time lines, etc. 
							-Available Funds, Utilization Time Lines, Gap (if any) & suggestion for fill 
							the Gap on timely basis.</li>
						<li>Agreement with business associates, advisor, joint venture, employees, 
							banks. </li>
						<li>Guidance to Management / Owners & its core Team for preparation of 
							effective future financial milestones/Targets of Company for better vision 
							to Company, Investors, Employees, Lenders etc.  </li>
						<li>Resolving all the Core Accounting Issues.  </li>
						<li>Discussion with CA, CS & Lawyer jointly with Management / Owners for 
							resolving all the core & compliances related issues of Finance, Taxation & 
							Accounts.</li>
						<li>Guidance to Management / Owners & its core Team for betterment in 
							the whole Accounting Process with proper maker & checker authorization 
							points. </li>

					</ul>
					
				</div> -->


	<!-- </div>
		</div>
	</div> -->
	<!-- End Content -->
	<!-- Call Action -->
	<div class="cta-sameline center" style="padding-bottom: 30px;">
					
						<a class="btn" href="contact.php">Contact Us</a>
					</div>
	<!-- End Section -->
	<!-- Contents -->
	<!-- <div class="section section-services section-pad">
		<div class="container">
			<div class="content row">
				
				<h2><img src="image/photo-sm-k.jpg" alt="" class="alignright col-md-4 no-round"> Exceptional client service</h2>
				<p>When it comes to choosing a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa. adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				<p>Working with a professional is an consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididu labore et dolore magna aliqua.</p>
				<div class="clear"></div>
				<div class="gaps size-xs"></div>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-4 res-s-bttm">
							<div class="icon-box style-s1">
								<em class="fa fa-bar-chart-o" aria-hidden="true"></em>
							</div>
							<h4>Predictable earnings</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
						</div>
						<div class="col-sm-4 res-s-bttm">
							<div class="icon-box style-s1">
								<em class="fa fa-users" aria-hidden="true"></em>
							</div>
							<h4>Stable income stream</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
						</div>
						<div class="col-sm-4">
							<div class="icon-box style-s1">
								<em class="fa fa-credit-card" aria-hidden="true"></em>
							</div>
							<h4>Cash flow growth</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div> -->
	<!-- End Section -->
	<!-- Content with Parallax -->
	<div class="section section-contents section-pad has-bg has-parallax light"
		style="background-image: url('image/other services.jpg');">
		<div class="container">
			<div class="content row">

				<h2><?php echo $name; ?> Services:</h2>
				<div class="row">




					<?php

					$sql_service = "SELECT * FROM services WHERE scategory_id=$cat_id AND language_id=169 ORDER BY serial_number";
					$result_service = $conn->query($sql_service);

					if ($result_service->num_rows > 0) {
						// Output data of each row
						while ($row_service = $result_service->fetch_assoc()) {
							$service_id = $row_service['id'];
							$service_name = $row_service['title'];


							$url = 'startup-virtual-cfo.php?id=' . $service_id . '&cat_id=' . $cat_id;

							echo " <div class='col-sm-3'>
							<ul class='list-style'>
								<li><a href=$url style='color: white;'>$service_name</a></li>
								
								
							
							</ul>
						</div>
							
							
							
							";

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


	<!-- Call Action -->
	<div class="call-action cta-small has-bg bg-primary" style="background-image: url('image/plx-cta.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h2>Have any Question?</h2>
						<p>We're here to help. Send us an email or call us at +91 9921003190. Please feel free to
							contact
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