<?php include 'db_connection.php'; ?>
<?php


// get hero image

$sql = "SELECT * FROM sliders WHERE language_id=169";
$result = $conn->query($sql);
$img_path = 'https://infspl.com/development/assets/front/img/';

// get service categories

$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
$result_sCat = $conn->query($sql_sCat);

// get team

$sql_members = "SELECT * FROM members WHERE language_id=169";
$result_members = $conn->query($sql_members);

// get portfolio

$sql_portfolios = "SELECT * FROM portfolios WHERE language_id=169";
$result_portfolios = $conn->query($sql_portfolios);

// get clients

$sql_clients = "SELECT * FROM partners WHERE language_id=169";
$result_clients = $conn->query($sql_clients);

// get testimonials

$sql_test = "SELECT * FROM testimonials WHERE language_id=169";
$result_test = $conn->query($sql_test);








//get team














?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>INFSPL- One Stop Solution</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.c-btn {
			border: none;
			background-color: #1e566f;
			padding: 12px 48px 12px 24px;
			border-radius: 4px;
			color: #fff;
			text-align: start;
			/* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='7.41' height='12' viewBox='0 0 7.41 12'%3E%3Cpath d='M10,6,8.59,7.41,13.17,12,8.59,16.59,10,18l6-6Z' transform='translate(-8.59 -6)' fill='%23fff'/%3E%3C/svg%3E"); */
			/* background-repeat: no-repeat;
  			background-position: center; */
		}

		.button-with-overlapping-image {
			position: relative;
			display: inline-flex;
			align-items: center;
			width: 100%;
			padding: 10px 10px;
			/* Adjusted padding */
			border: none;
			border-radius: 20px;
			background-color: #1e566f;
			color: white;
			font-size: 16px;
			cursor: pointer;

			transition: background-color 0.3s ease;

			z-index: 1;
		}
		.button-with-overlapping-image img {
			position: absolute;

			top: -10px;
			width: 680px;
			height: 60px;
			border-radius: 50%;
			z-index: 2;

		}
		.button-with-overlapping-image:hover {
			background-color: rgba(0, 151, 80, 0.7);
		}

		div.circletag {
			display: block;
			width: 40px;
			height: 40px;
			background: #E6E7ED;
			text-align: center;
			align-content: center;
			align-items: center;
			border-radius: 50%;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
		}

		div.circletag>img {
			max-height: 100%;
			max-width: 100%;
		}

		.center {
			text-align: center;
			width: 100%;
			padding-top: 15px;
		}

		.award .owl-prev {
			position: absolute;
			top: 250px;
			left: -40px;
			font-size: 40px !important;
		}

		.award .owl-next {
			position: absolute;
			top: 250px;
			right: -40px;
			font-size: 40px !important;
		}
	</style>
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
					<img class="logo logo-dark" alt="" src="image/logo.png" srcset="image/logo.png 4x" width="550px">
					<img class="logo logo-light" alt="" src="image/logo.png" srcset="image/logo.png 4x">
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
						<li class="dropdown"><a href="#who">About us<b class="caret"></b></a>
							<ul class="dropdown-menu">

								<li><a href="#who">Who are we </a></li>
								<li><a href="#service">What we do</a></li>
								<li><a href="#trust">Trust the best </a></li>
								<li><a href="#team">Team</a></li>
								<li><a href="#clients">Our Clients</a></li>
								<li><a href="#test">Testimonials</a></li>
								<li><a href="portfolio.php">Portfolio Company</a></li>
								<li><a href="portfolio.php">Incubation Centers</a></li>


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
						<li><a href="#awards">Awards</a></li>
						<li class="quote-btn"><a class="btn" href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->
		<!-- Banner/Slider -->
		<div id="slider" class="banner banner-slider carousel ">

			<div class="carousel-inner">

				<?php
				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {
						$hero_img = $row['image'];
						$hero_title = $row['title'];
						$hero_text = $row['text'];
						$hero_button_text = $row['button_text'];
						$hero_button_url = $row['button_url'];
						$cat_path = 'sliders/';
						$hero_image = $img_path . $cat_path . $hero_img;
						$hero_serial = $row['serial_number'];

						if ($hero_serial == 1) {
							$serial_text = 'active';
						} else {
							$serial_text = '';
						}

						echo "<div class='item $serial_text'>
					<!-- Set the first background image using inline CSS below. -->
					<div class='fill' style='background-image:url($hero_image);'>
						<div class='banner-content'>
							<div class='container'>
								<div class='row'>
									<div class='banner-text al-left pos-left light'>
										<h2 style='color: #1e566f;'><strong>$hero_title</strong></h2>
										<p style='color: #1e566f; fontsize: 18px;'>$hero_text</p>
										<a href=$hero_button_url class='btn'>$hero_button_text</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>";
					}
				} else {
					echo "0 results";
				}

				?>




			</div>

			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</header>
	<!-- End Header -->

	<!-- Service Section -->
	<div class='section section-services'>
		<div class='container'>
			<div class='content row'>
				<!-- Feature Row  -->
				<div class='feature-row feature-service-row row feature-s4 off-text boxed-w'>
				
					<div class='heading-box' id="services">
						<div>
							<center>
								<h2 class='heading-section'>OUR SERVICES
								</h2>
							</center>
						</div>

					</div>


					<?php


					if ($result_sCat->num_rows > 0) {
						// Output data of each row
						$ids = array();

						//	echo $result_sCat;
					


						while ($row = $result_sCat->fetch_assoc()) {


							$id = $row['id'];
							$image = $row['image'];
							$cat_path = 'service_category_icons/';
							$img_cat_path = $img_path . $cat_path . $image;
							$name = $row['name'];
							$description = $row['short_text'];
							$serial_number = $row['serial_number'];






							if ($serial_number % 2 == 0) {
								$everOrOdd = 'odd';

							} else {
								$everOrOdd = 'even';

							}

							// get service categories
					






							echo " <div class='col-md-4 col-sm-6 col-xs-6 $everOrOdd' style='padding: 10px;'>
							<!-- Feature box -->
							<div class='feature'>
								<a href='service-starup.php?id=$id'>
									<div class='fbox-photo'>
										<img src=image/IMAGE$serial_number.jpg alt=''>
									</div>
									<div class='fbox-over'>
										<h3 class='title'>$name</h3>
										<div class='fbox-content'>
											<p>$description</p>
											
										</div>
									</div>
								</a>
							</div>
							
							
						</div>
						
							
						";





						}
					} else {
						echo "0 results";
					}
					?>
					<!-- <a class='button-with-overlapping-image' href=$url>
									 <img src=$img_service_path alt='Circular Image'>
									$service_name
								</a> -->

					<?php







					# code...
					




					?>
					<!-- End Feature box -->
				</div>








				<!-- <a class='button-with-overlapping-image' href=$url>
				<!--					<img src=$img_service_path alt='Circular Image'>-->
				<!--					$service_name-->
				<!--				</a> -->






			</div>
			<!-- Feture Row  #end -->

		</div>
	</div>


	<!-- End Section -->

	<!-- Content -->
	<div class="section section-content section-pad" id="who">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-md-6 res-m-bttm">
						<h5 class="heading-sm-lead">About us</h5>
						<h2 class="heading-section">Who we are</h2>
						<p>INFSPL is a team of industry experts with an overall
							experience of 47+ years providing an array of services for the StartUp,
							MSME and Large Enterprises.</p>
						<p>INFSPL was formed after identifying a gap in the market about lack of
							awareness of Financial and Business Literacy.
							As there was no single platform catering to the ever increasing
							requirements of the Entrepreneurs, we came up with a one-stop
							customized solution, offering single window services right from idea
							validation to the growth stage. </p>
						<p>We have a team of passionate professionals, providing timely solutions for
							all your business needs, so that you can concentrate more on building
							your business.
						</p>
						<p>Vision – We envision to be the one-stop solution for all your business
							needs. We will be providing all the required assistance at each stage of
							your company’s growth.
						</p>
						<p>Mission – “Investing Intellect For You” our mission is to invest our intellect for you by
							providing a One-Stop Solution for all your Business needs in the form of customized
							solutions at each stage of your growth journey.
						</p>
						<p>Advice & Guidance to each & every Start-Up, MSME, and Large Enterprises for realising the
							actual potential of business & then supporting them at every aspect of business for
							achieving the desired growth of each business at 360 degrees.
						</p>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<img class="no-round" src="image/IMAGE5.jpg" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->


	<!-- Content -->

	<div class="section section-contents section-pad image-on-right bg-light" id="service">
		<div class="container">
			<div class="row">

				<h5 class="heading-sm-lead">Our Services</h5>
				<h2 class="heading-section">What we do</h2>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-7 col-md-6">
							<div class="row">
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box photo-plx-full">
									<img alt='' src="image/interview.png">
									</div>
									<h4>Financial Advisory</h4>
									<p>We provide customized Financial Advisory Services for all your Business needs.
									</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box">
									<img alt='' src="image/investing.png">
									</div>
									<h4>Investment Banking</h4>
									<p>Under Investment Banking we provide an end-to-end Fund Raising services for e.g
										Private Equity / Debt Equity.</p>
								</div>
								<div class="gaps size-lg"></div>
								<div class="col-sm-6 res-s-bttm">
									<div class="icon-box">
									<img alt='' src="image/meeting.png">
									</div>
									<h4>Business Growth Advisory</h4>
									<p>We provide a detailed Business Growth strategy plan as per your Business
										requirement.
									</p>
								</div>
								<div class="col-sm-6">
									<div class="icon-box">
									<img alt='' src="image/startup.png">
									</div>
									<h4>StartUp Advisory</h4>
									<p>An end-to-end advisory service right from Idea Valiadation to IPO.</p>
								</div> 
								<div class="gaps size-lg"></div>
								<div class="col-sm-6  res-s-bttm">
									<div class="icon-box">
									<img alt='' src="image/business.png">
									</div>
									<h4>MSME Advisory</h4>
									<p>Micro, Small and Medium enterprises are considered the backbone of the Indian
										economy, we provide end-to-end service focused towards your Business growth.</p>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<div class="section-bg imagebg"><img src="image/what_we_do.jpg" alt=""></div>
	</div>
	<!-- End Content -->

	<!-- Content -->
	<div class="section section-contents section-pad light bg-alternet" id="trust">
		<div class="container">
			<div class="row">

				<div class="row justify-content-end">
					<div class="col-md-6 col-sm-6">
						<h2 class="heading-lead" style="color: #1e566f;">Trust the best</h2>
					</div>
					<div class=" col-md-6 col-sm-6">
						<div class="row">
    
							<div class="col-md-6 col-sm-6 res-s-bttm">
								<div class="icon-box photo-plx-full">
									<img alt='' src="image/experience.png">
								</div>
								<h4 style="color: #1e566f;">Experienced</h4>
								<p style="color: #1e566f;">We have a collective team experience of over 47+ years</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="icon-box">
								<img alt='' src="image/fast.png">
								</div>
								<h4 style="color: #1e566f;">Speed</h4>
								<p style="color: #1e566f;">We work at a war footing speed to ensure timely execution.
								</p>
							</div>
							<div class="gaps size-lg"></div>
							<div class="col-md-6 col-sm-6 res-s-bttm">
								<div class="icon-box">
								<img alt='' src="image/file.png">
								</div>
								<h4 style="color: #1e566f;">Accuracy</h4>
								<p style="color: #1e566f;">We keep a watch on the minutest details for an error free
									outcome.
								</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="icon-box">
								<img alt='' src="image/global-network.png">
								</div>
								<h4 style="color: #1e566f;">Network</h4>
								<p style="color: #1e566f;">We are connected with some of the best minds in the Business
									Ecosystem.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bg imagebg"><img src="image/trust the best.jpg" alt=""></div>
	</div>
	<!-- End Content -->




	<!-- Teams -->
<div class="section section-teams section-pad bdr-bottom" id="team">
	<div class="container">
		<div class="content row">

			<h5 class="heading-sm-lead center">STRATEGY & MANAGEMENT</h5>
			<h2 class="heading-section center">TEAM</h2>

			<div class="gaps"></div>
			<div class="team-member-row row">

				<?php
				if ($result_members->num_rows > 0) {
					while ($row = $result_members->fetch_assoc()) {
						$id2 = $row['id'];
						$team_img = $row['image'];
						$team_path = 'members/';
						$img_team_path = $img_path . $team_path . $team_img;
						$team_name = $row['name'];
						$team_rank = $row['rank'];
						$team_linkedIn = $row['linkedin'];

						$team_odd_even = ($id2 % 2 == 0) ? 'even' : 'odd';

						echo "
						<div class='col-md-4 col-sm-6 col-xs-6 $team_odd_even'>
							<!-- Team Profile -->
							<div class='team-member' style='text-align:center; margin-top:40px;'>
								<div class='team-photo' 
									style='width:250px; height:250px; margin:0 auto; overflow:hidden; border-radius:50%; 
									border:4px solid #fff; box-shadow:0 0 12px rgba(0,0,0,0.15);'>
									
									<img alt='' src='$img_team_path' 
										style='width:100%; height:100%; object-fit:cover; object-position:top; border-radius:50%; 
										transition:transform 0.3s ease;'>
								</div>
								
								<div class='team-info center' style='margin-top:15px;'>
									<h4 class='name' style='color:#40454b; margin-bottom:5px;'>
										<a href='teams.php?id=$id2#$id2' style='color:inherit; text-decoration:none;'>$team_name</a>
									</h4>
									<p class='sub-title' style='font-size:0.9em; color:#a5abb2;'>$team_rank</p>
								</div>
							</div>
							<!-- Team #end -->
						</div>
						";
					}
				} else {
					echo "<p class='center'>No team members found.</p>";
				}
				?>
			</div><!-- TeamRow #end -->
		</div>
	</div>
</div>
<!-- End Section -->



	<!-- <div class="section section-logos section-pad-sm bg-light bdr-top" id="incubation">
		<div class="container">
			<div class="content row">

				<div class="owl-carousel loop logo-carousel style-v2">
					<div class='logo-item'><a href='images/incubation1.png' target=”_blank”><img alt='' width='190'
								height='190' src=$img_client_path></a></div>
				</div>
				<div class="owl-carousel loop logo-carousel style-v2">
					<div class='logo-item'><a href='images/incubation2.png' target=”_blank”><img alt='' width='190'
								height='190' src=$img_client_path></a></div>
				</div>

			</div>
		</div>
	</div> -->






	<!-- client -->
	<div class="section section-news section-pad" id="clients">
		<div class="container">
			<div class="content row">

				<h5 class="heading-sm-lead center">Some of our</h5>
				<h2 class="heading-section center"> Clients</h2>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Client logo -->
	<div class="section section-pad bg-light" id="test">

		<div class="content row">

			<div class="logo-carousel">
				<?php
				if ($result_clients->num_rows > 0) {
					while ($row = $result_clients->fetch_assoc()) {
						$client_img = $row['image'];
						$client_url = $row['url'];
						$client_path = 'partners/';
						$img_client_path = $img_path . $client_path . $client_img;


						echo "<a href=$client_url target=”_blank” ><img src=$img_client_path width='500' height='600''
							height: 'auto;'></a>";

					}
				} else {
					echo "0 results";
				}

				?>

				<!-- End Slide -->

			</div>
			<!-- End Slides -->




		</div>

	</div>
	<!-- End Section -->

	<!-- Testimonials -->
	<div class="section section-quotes section-pad">
		<div class="container">
			<div class="content row">



				<h2 class="heading-section center">Testimonials</h2>

				<div class="gaps"></div>
				<div class="testimonials">
					<div id="testimonial" class="quotes-slider col-md-8 col-md-offset-2">
						<div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true"
							data-auto="true">

							<?php
							if ($result_test->num_rows > 0) {
								while ($row = $result_test->fetch_assoc()) {
									$test_img = $row['image'];
									$test_name = $row['name'];
									$test_rank = $row['rank'];
									$test_comment = $row['comment'];
									$test_path = 'testimonials/';
									$img_portfolio_path = $img_path . $test_path . $test_img;


									echo "<div class='item'>
									<!-- Each Quotes -->
									<div class='quotes'>
										<div class='quotes-text center'>
											<p>$test_comment</p>
										</div>
										<div class='profile'>
											<img src=$img_portfolio_path alt=''>
											<h5>$test_name</h5>
											<h6>$test_rank
											</h6>
										</div>
									</div>
									<!-- End Quotes -->
								</div>
								<!-- End Slide -->";

								}
							} else {
								echo "0 results";
							}

							?>



						</div>
						<!-- End Slide -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Awards -->
	<div class="section section-quotes section-pad light" style="height:80%;" id="awards">
		<div class="container">
			<div class="content row">

				<h2 class="heading-md-lead center" style="color:black">Awards</h2>
				<div class="gaps size-sm"></div>
				<div class="testimonials center">
					<div id="testimonial" class="quotes-slider">
						<div class="owl-carousel loop has-carousel" data-items="2" data-loop="true" data-dots="true"
							data-auto="true">
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/1.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/2.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/3.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<div class='item'>
								<!-- Each Quotes -->
								<div class='quotes'>
									<div class='quotes-text'>
									</div>
									<div class='fbox-photo' style='width:70%; height:70%;'>
										<img src='assets/img/4.jpg' alt=''>


									</div>
								</div>
								<!-- End Quotes -->
							</div>

							<!-- End Slide -->

						</div>
						<!-- End Slides -->
					</div>
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
								<p><img src="image/logo.png" srcset="image/logo.png 2x" alt=""></p>
								
								<p></p>INFSPL is a Business Growth Strategists and an Investment Banking Company providing services for StartUp, MSME & Large Enterprise.
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
									<li><a href="#who">About Us</a></li>
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
								198 City Hub,<br>
									3rd Floor, Office No – 311,<br>
									Sankar Nanasaheb Karpe Rd,<br>
									Bodke Wada, New Nana Peth,<br>
									Ganesh Peth, Pune-411002, Maharashtra, India<br>
								
									<em class="fa fa-envelope-o" aria-hidden="true"></em>
									<span><a href="#" style="color: #1e566f">contact@infspl.com</a></span><br>
								
									<!-- <span>Toll Free</span>: (1-800) 234 5678<br> -->
									<span>Phone</span>: +91 9921003190
							
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

	<!-- Rreload Image for Slider -->
	<div class="preload hide">
		<img alt="" src="image/slider-lg-a.jpg">
		<img alt="" src="image/slider-lg-b.jpg">
	</div>
	<!-- End -->
	<script type="text/javascript">
		(function () {
			var options = {
				whatsapp: "919921003190", // WhatsApp number
				call_to_action: "Message us", // Call to action
				position: "left", // Position may be 'right' or 'left'
			};
			var proto = document.location.protocol,
				host = "getbutton.io",
				url = proto + "//static." + host;
			var s = document.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = url + '/widget-send-button/js/init.js';
			s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
			var x = document.getElementsByTagName('script')[0];
			x.parentNode.insertBefore(s, x);
		})();
	</script>

	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

</html>