<!DOCTYPE html>
<html lang="en">
<head>
    <title>404</title>
    <meta charset="utf-8">
	<link rel="icon" href="<?php echo $base; ?>img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $base; ?>img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="<?php echo $base; ?>css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo $base; ?>css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo $base; ?>css/style.css" type="text/css" media="screen">	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $base; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>js/jquery.easing.1.3.js"></script>
	<script>		
   jQuery(window).load(function() {	
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
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
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li><a href="index.html">About</a></li>
                <li class="sub-menu"><a href="index-1.html">Services</a>
                   <ul>
                    <li><a href="#">Dolore </a></li>
                    <li><a href="#">Consecte</a></li>
                    <li><a href="#">Conseq</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Folio</a></li>
                <li><a href="index-3.html">Blog</a></li>
                <li><a href="index-4.html">Contact</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">  

<!--============================== content =================================-->

<div id="content"> 
  <div class="container">
    <div class="row ">
    
<div class="span12">
<div class="block-404">  
      <img class="<?php echo $base; ?>img-404" src="<?php echo $base; ?>img/slide-1.jpg" alt="">       
    	<div class="box-404">
        	<h2>Sorry!</h2>
<h3>404 page not found</h3>        	
           
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil doming id quod mazim placerat facer possim assum orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod.</p>
           
        	<form id="form-search" action="search.php" method="GET" accept-charset="utf-8" >
            	<div class="clearfix">
                    <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
                    <a href="#" onClick="document.getElementById('form-search').submit()" class="btn btn-1 ">Search</a>
                </div>
            </form>
		</div>
     </div>
   </div>
  </div>
</div>  
</div>
</div>
<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">Website Template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a> </div>
  </div>
    </footer>
<script type="text/javascript" src="<?php echo $base; ?>js/bootstrap.js"></script>
</body>
</html>