<!DOCTYPE html>
<html lang="en">

<head>
	<title>About</title>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo $base; ?>img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $base; ?>img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="<?php echo $base; ?>css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo $base; ?>css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo $base; ?>css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo $base; ?>css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo $base; ?>css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $base; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/touchTouch.jquery.js"></script>
	<script type="text/javascript">
		if ($(window).width() > 1024) {
			document.write("<" + "script src='<?php echo $base; ?>js/jquery.preloader.js'></" + "script>");
		}

	</script>

	<script>
		jQuery(window).load(function () {
			$x = $(window).width();
			if ($x > 1024) {
				jQuery("#content .row").preloader();
			}

			jQuery('.magnifier').touchTouch();
			jQuery('.spinner').animate({
				'opacity': 0
			}, 1000, 'easeOutCubic', function () {
				jQuery(this).css('display', 'none')
			});
		});

	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="<?php echo $base; ?>css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
</head>

<body>


	<div class="spinner"></div>
	<!--============================== header =================================-->
	<header>
		<div class="container clearfix">
			<div class="row">
				<div class="span12">
					<div class="navbar navbar_">
						<div class="container">
							<h1 class="brand brand_"><a href="index.html"><img alt="" src="<?php echo $base; ?>img/logo.gif"> </a></h1>
							<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
							<div class="nav-collapse nav-collapse_  collapse">
								<ul class="nav sf-menu">
									<li class="active"><a href="/fweb/index">Main</a></li>
									<li class="sub-menu"><a href="/fweb/service">Services</a>
										<ul>
											<li><a href="#">Dolore </a></li>
											<li><a href="#">Consecte</a></li>
											<li><a href="#">Conseq</a></li>
										</ul>
									</li>
									<li><a href="index-2.html">Folio</a></li>
									<li><a href="/web/fblog/">Blog</a></li>
									<li><a href="/fweb/contact">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>