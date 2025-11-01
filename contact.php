<?php include 'db_connection.php'; ?>


<?php


$img_path = 'https://infspl.com/development/assets/front/img/';

	$sql_services = "SELECT * FROM services WHERE scategory_id=59";
	$result_services = $conn->query($sql_services);
	$service_path = 'services/';

	$sql_sCat = "SELECT * FROM scategories WHERE language_id=169";
	$result_sCat = $conn->query($sql_sCat);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Contact | INFSPL- Investing Intellect For You</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/logo.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendor/libs/animate-css/animate.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
	<style>
				.select2-hidden-accessible{
					outline: none;
					width: 100%;
					height: 50px!important;
					background: #f8f8f8!important;
					-ms-border-radius: 3px;
					border-radius: 3px;
					border: 1px solid #e9e9e9!important;
					padding-left: 10px;
				}
				.select2-container {
				  width: 100%;
				}

				.select2-results__option {
				padding-right: 20px;
				vertical-align: middle;
				}
				.select2-results__option:before {
				content: "";
				display: inline-block;
				position: relative;
				height: 20px;
				width: 20px;
				border: 2px solid #e9e9e9;
				border-radius: 4px;
				background-color: #fff;
				margin-right: 20px;
				vertical-align: middle;
				}
				.select2-results__option[aria-selected=true]:before {
				color: #fff;
				background-color: #f77750;
				border: 0;
				display: inline-block;
				padding-left: 3px;
				}
				.select2-container--default .select2-results__option[aria-selected=true] {
					background-color: #fff;
				}
				.select2-container--default .select2-results__option--highlighted[aria-selected] {
					background-color: #eaeaeb;
					color: #272727;
				}
				.select2-container--default .select2-selection--multiple {
					margin-bottom: 10px;
				}
				.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
					border-radius: 4px;
				}
				.select2-container--default.select2-container--focus .select2-selection--multiple {
					outline: none;
					width: 100%;
					height: 100%!important;
					background: #f8f8f8!important;
					-ms-border-radius: 3px;
					border-radius: 3px;
					border: 1px solid #e9e9e9!important;
					padding-left: 10px;
				}
				.select2-container--default .select2-selection--multiple {
					outline: none;
					width: 100%;
					height: 100%!important;
					background: #f8f8f8!important;
					-ms-border-radius: 3px;
					border-radius: 3px;
					border: 1px solid #e9e9e9!important;
					padding-left: 10px;
				}
				.select2-container--open .select2-dropdown--below {
					
					border-radius: 6px;
					box-shadow: 0 0 10px rgba(0,0,0,0.5);

				}
				.select2-selection .select2-selection--multiple:after {
					content: 'hhghgh';
				}
				/* select with icons badges single*/
				.select-icon .select2-selection__placeholder .badge {
					display: none;
				}
				.select-icon .placeholder {
				/* 	display: none; */
				}
				.select-icon .select2-results__option:before,
				.select-icon .select2-results__option[aria-selected=true]:before {
					display: none !important;
					/* content: "" !important; */
				}
				.select-icon  .select2-search--dropdown {
					display: none;
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
		<div class="banner banner-static has-bg-image">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text">
							<h1 class="page-title" style="color:#1e566f;">Contact INFSPL</h1>
							<!-- <p>Would you like to come by and say hi?</p> -->
						</div>


					</div>
				</div>
			</div>
			<div class="banner-bg imagebg bg-image-loaded">
				<img src="image/contact us.jpg" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->
	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row">

				<h2 class="heading-lg">Contact Us</h2>
				<div class="contact-content row">
					<div class="drop-message col-md-12 res-m-bttm">
						<form  class="form-quote" action="form/quote-request.php" method="post">
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="quote-request-name" type="text" placeholder="Name *"
										class="form-control">
								</div>
								<div class="form-field col-md-6">
									<input name="quote-request-company" type="text" placeholder="Company"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="quote-request-email" type="email" placeholder="Email *"
										class="form-control  email">
								</div>
								<div class="form-field col-md-6">
									<input name="quote-request-phone" type="text" placeholder="Phone *"
										class="form-control">
								</div>
							</div>
							

							<div class="form-group row">
								<div class="form-field col-md-6">
									<p>Select Services Category</p>
									<select id="categorySelect" name="taskOption">
										<option value="">Please select</option>
								   </select>
								</div>
								<div class="form-field col-md-6">
									<p>Select Service</p>
									<select id="serviceSelect" name="quote-request-interest[]" class="js-select2" multiple="multiple">
										<option value="">Please select a category first</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<div class="form-field col-md-6">
									<p>Best Time to Reach you</p>
									<select name="quote-request-reach">
										<option value="">Please select</option>
										<option value="09am-12pm">09 AM - 12 PM</option>
										<option value="12pm-03pm">12 PM - 03 PM</option>
										<option value="03pm-06pm">03 PM - 06 PM</option>
									</select>
								</div>
								<div class="form-field col-md-6">
									<p>Where did you hear about us</p>
									<select name="quote-request-hear">
										<option value="">Please select</option>
										<option value="Linkedin">Linkedin</option>
										<option value="Facebook">Facebook</option>
										<option value="Google">Instagram</option>
										<option value="Google">Google</option>
										<option value="Collegue">Collegue</option>
										<option value="Others">Others</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<textarea name="quote-request-message" placeholder="Any Message Or Comment For Us"
										class="txtarea form-control"></textarea>
								</div>
							</div>
							<input type="text" class="hidden" name="form-anti-honeypot" value="">
							<button type="submit" class="btn" value="submit" name="submit">Submit</button>
							<div class="form-results"></div>
						</form>
					</div>


				</div>


			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Map -->

	<div>

		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.884503124738!2d73.86535611405596!3d18.488890074969785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c16d03424043%3A0xe10fa020207ede16!2sIntellectual%20Investments%20%26%20Financial%20Services%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1629370088283!5m2!1sen!2sin"
			width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<!-- End map -->


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

	<!-- Google Map Script -->
	<script type="text/javascript"
		src="https://maps.google.com/maps/api/js?key=AIzaSyDNaa8LOQISEST6NIGC78vmdnIOynR2SeU"></script>
	<script src="js/gmaps.js"></script>
	<script>		
	$(".js-select2").select2({
		closeOnSelect : false,
		placeholder : "Please select a category first",
		allowClear: true,
		tags: true 
	});</script>
	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
	<!-- <script>
		var e = document.getElementById("ddlViewBy");
		var value = e.value;
	</script> -->
	<script>
    $(document).ready(function(){
        loadCategories();
    
        $('#categorySelect').change(function(){
            var categoryName = $(this).find(":selected").text(); // Get the selected category name
            var categoryId = $(this).val();
            loadServices(categoryId);
            $('#categoryNameInput').val(categoryName); // Set the category name in a hidden input field
        });
    });
    
    function loadCategories() {
        $.ajax({
            url: 'get_categories.php', 
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#categorySelect').empty();
                $('#categorySelect').append($('<option>').text('Please select').attr('value', ''));
                $.each(response, function(index, category) {
                    $('#categorySelect').append($('<option>').text(category.name).attr('value', category.id));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading categories:', error);
            }
        });
    }
    
    function loadServices(categoryId) {
        $.ajax({
            url: 'get_services.php', 
            type: 'GET',
            dataType: 'json',
            data: { categoryId: categoryId },
            success: function(response) {
                $('#serviceSelect').empty();
                $('#serviceSelect').append($('<option>').text('Please select a service').attr('value', ''));
                $.each(response, function(index, service) {
                    $('#serviceSelect').append($('<option>').text(service.title).attr('value', service.title));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error loading services:', error);
            }
        });
    }
    
    
    </script>
    <script>
        $(document).ready(function(){
            $('.form-quote').submit(function(e){
                e.preventDefault();
                
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response){
                        if(response.result == 'success'){
                            // If email is sent successfully, show SweetAlert modal
                            swal({
                                title: "Success",
                                text: response.message,
                                icon: "success",
                            }).then((value) => {
                                // Redirect to contact page
                                window.location.href = 'contact.php';
                            });
                        } else {
                            // If there is an error, show SweetAlert modal
                            swal({
                                title: "Error",
                                text: response.message,
                                icon: "error",
                            });
                        }
                    },
                    error: function(){
                        // If AJAX request fails, show SweetAlert modal
                        swal({
                            title: "Error",
                            text: "An error occurred. Please try again later.",
                            icon: "error",
                        });
                    }
                });
            });
        });
</script>




</body>

</html>