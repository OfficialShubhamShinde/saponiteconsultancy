<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Saponite Technology</title>

	<!-- Favicon -->
    <link href="../img/favicon.png" rel="icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!----css3---->
	<link rel="stylesheet" href="../css/custom.css">

	<link rel="stylesheet" href="../font/flaticon.css">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="../css/settings.css" media="screen" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Chivo:wght@300;400;700&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Fira+Sans:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
		rel="stylesheet">

	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

	<link rel="stylesheet" href="../css/animate.min.css">
</head>

<body>
	<div class="header" id="header">
		<div class="info-bar d-lg-block d-none d-md-none">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-lg-10 col-md-12">
						<div class="header-box d-flex flex-row justify-content-end" style="padding: 15px;">
							
							<div class="location-div header-item">
								<div class="stm-iconbox  d-flex align-items-center">
									<i class="far fa-clock"></i>
									<div class="stm-iconbox__info">
										<div class="stm-iconbox__text stm-iconbox__text_nomargin">
											Mon - fri 9.00 - 17.00 </div>

										<div class="stm-iconbox__description">
											Sunday CLOSED </div>

									</div>
								</div>
							</div>

							<div class="location-div header-item">
								<div class="stm-iconbox d-flex align-items-center">
									<i class="fas fa-phone"></i>
									<div class="stm-iconbox__info">
										<div class="stm-iconbox__text stm-iconbox__text_nomargin">
											+91 7558555801 </div>

										<div class="stm-iconbox__description">
											Free call </div>

									</div>
								</div>
							</div>

							<div class="location-div header-item">
								<div class="stm-iconbox d-flex align-items-center">
									<i class="far fa-envelope"></i>
									<div class="stm-iconbox__info">
										<div class="stm-iconbox__text stm-iconbox__text_nomargin">
											info@saponitetech.com </div>

										<div class="stm-iconbox__description">
											Email </div>

									</div>
								</div>
							</div>


						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="navigation" id="navigation">
			<div class="header-inner" id="header-inner">
				<div class="container">
					<nav class="navbar navbar-expand-lg my-navbar p-0">
						<a class="navbar-brand" href="index.php" style="    margin: -7px;"><img src="../img/logo.png" class="img-fluid" /></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>

						<div class="collapse navbar-collapse mobile-nav" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link " href="../index.php" style=" <?php if ($currentPage == 'index') {
										echo 'color:#fd9b28;';
									} ?>">Home</a>
								</li>



								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style=" <?php if ($currentPage == 'industry') {
										echo 'color:#fd9b28;';
									} ?>">Industry</a>
									<ul class="dropdown-menu small-menu">
										<a href="industry4o.php">Industry 4.O</a>
										<a href="automotive.php">Automotive</a>
										<a href="chemical.php">Chemical</a>
										<a href="manufacturing.php">Manufacturing</a>
										<a href="media.php">Media</a>
										<a href="mill.php">Mill Product</a>
										<a href="mining.php">Mining</a>
										<a href="retail.php">Retail</a>
									</ul>
								</li>


								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style=" <?php if ($currentPage == 'services') {
										echo 'color:#fd9b28;';
									} ?>">Services,Solutions</a>
									<ul class="dropdown-menu small-menu">
										<a href="../services/Implementation_Services.php">SAP Implementation Services</a>
										<a href="../services/support_and_maintenance.php">SAP Support and Maintenance</a>
										<a href="../services/consulting_services.php">SAP Consulting Services</a>
										<a href="../services/training_education.php">SAP Training and Education</a>
										<a href="../services/integration_services.php">SAP Integration Services</a>
										<a href="../services/upgrades_and_migrations.php">SAP Upgrades and Migrations</a>
										<a href="../services/analytics_and_business.php">SAP Analytics & Business
											Intelligence (BI)</a>
										<a href="../services/security_services.php">SAP Security Services</a>
										<a href="../services/cloud_services.php">SAP Cloud Services</a>
										<a href="../services/custom_development.php">SAP Custom Development</a>
									</ul>
								</li>


								<li class="nav-item">
									<a class="nav-link" href="../company.php"  style=" <?php if ($currentPage == 'company') {
										echo 'color:#fd9b28;';
									} ?>">Company</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="../careers.php"  style=" <?php if ($currentPage == 'careers') {
										echo 'color:#fd9b28;';
									} ?>">Careers</a>
								</li>

	

								<li class="nav-item">
									<a class="nav-link" href="../events&media.php"  style=" <?php if ($currentPage == 'events&media') {
										echo 'color:#fd9b28;';
									} ?>">Events & Media</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="../blogs.php"  style=" <?php if ($currentPage == 'blogs') {
										echo 'color:#fd9b28;';
									} ?>">Blogs</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="../contactus.php"  style=" <?php if ($currentPage == 'contactus') {
										echo 'color:#fd9b28;';
									} ?>">Contact</a>
								</li>
							</ul>


						</div>
						<form class="form-inline my-2 my-lg-0 d-lg-block d-md-none d-none">
							<div class="header-social-icon xs-display-none d-lg-flex">
								<div class="widget widget_pofo_social_widget" id="pofo_social_widget-5">
									<div class="widget-title"></div>
									<div class="social-icon-style-8">
										<ul class="extra-small-icon d-flex ml-lg-3">
											<li>
												<a class="instagram" href="" target="_blank">
													<i class="fab fa-instagram"></i></a>
											</li>
											<li><a class="facebook-f" href="" target="_blank">
													<i class="fab fa-facebook-f"></i></a></li>
											<li><a class="linkedin-in" href="" target="_blank">
													<i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</form>
					</nav>

				</div>
			</div>
		</div>

	</div>