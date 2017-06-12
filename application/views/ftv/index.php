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
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='<?php echo $base; ?>js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
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
                <li><a href="/fweb/blog">Blog</a></li>
                <li><a href="/fweb/contact">Contact</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="<?php echo $base; ?>img/slide-1.jpg" alt="" > </li>
            <li> <img src="<?php echo $base; ?>img/slide-2.jpg" alt="" > </li>
            <li> <img src="<?php echo $base; ?>img/slide-3.jpg" alt="" > </li>
            <li> <img src="<?php echo $base; ?>img/slide-4.jpg" alt="" > </li>
            <li> <img src="<?php echo $base; ?>img/slide-5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Welcome to falcon!</h2>
              <div>
            <p><a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank" class="link-1">Click here</a>  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team  falcon is a nice team falcon is a nice team falcon is a nice team</p>
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="row-1">
          <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Fashion</h3>
                <img  src="<?php echo $base; ?>img/page1-img1.jpg" alt="">
                <section> <strong>At vero eos et accusamus et iusto </strong>
                      <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                      <a href="#" class="btn btn-1">Read More</a> </section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Nature</h3>
                <img  src="<?php echo $base; ?>img/page1-img2.jpg" alt="">
                <section> <strong>Deleniti atque corrupti quos</strong>
                      <p>Dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                      <a href="#" class="btn btn-1">Read More</a> </section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Love story</h3>
                <img  src="<?php echo $base; ?>img/page1-img3.jpg" alt="">
                <section> <strong>Similique sunt in culpa qui officia </strong>
                      <p>Deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                      <a href="#" class="btn btn-1">Read More</a> </section>
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3 class="title-1 extra">Fine art</h3>
                <img  src="<?php echo $base; ?>img/page1-img4.jpg" alt="">
                <section> <strong>Similique sunt in culpa qui officia</strong>
                      <p>Deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                      <a href="#" class="btn btn-1">Read More</a> </section>
              </div>
                </li>
          </ul>
            </div>
      </div>
        </div>
    <div class="container">
          <div class="row">
        <article class="span6">
              <h3>Shortly about me</h3>
              <div class="wrapper">
            <figure class="<?php echo $base; ?>img-indent"><img src="<?php echo $base; ?>img/page1-img5.jpg " alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">Sed ut perspictis unde omnis natus error volupatem accusantium doloue laudantium, totam rem.</div>
                  Aperiam, eaque ipsa quae ab illo  veritatis et beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                  <div class="border-horiz"></div>
                  <div class="overflow">
                <ul class="list list-pad">
                      <li><a href="#">Campaigns</a></li>
                      <li><a href="#">Portraits</a></li>
                      <li><a href="#">Fashion</a></li>
                      <li><a href="#">Fine Art</a></li>
                    </ul>
                <ul class="list">
                      <li><a href="#">Advertising</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Love story</a></li>
                      <li><a href="#">Landscapes</a></li>
                    </ul>
              </div>
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Latest photoshoots</h3>
              <ul class="list-photo">
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img6.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img7.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img8.jpg " alt="" /></a></li>
            <li class="last"><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img9.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img10.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img11.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img12.jpg " alt="" /></a></li>
            <li class="last"><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img13.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img14.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img15.jpg " alt="" /></a></li>
            <li><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img16.jpg " alt="" /></a></li>
            <li class="last"><a href="<?php echo $base; ?>img/image-blank.png" class="magnifier" ><img src="<?php echo $base; ?>img/page1-img17.jpg " alt="" /></a></li>
          </ul>
            </article>
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