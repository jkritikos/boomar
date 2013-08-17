<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Boomar</title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="/css/style.css" media="screen" />

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="/css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="/css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="/css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="/js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="/js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>
</head>
<body>

<header id="header" class="container clearfix">

    <a href="/" id="logo">
        <img src="/img/logo.png" alt="Boomar">
    </a>

    <?php echo $this->element('menu'); ?>
	
</header><!-- end #header -->

<section id="top_content" class="container clearfix">
    <h1 class="page-title">Mobile Apps</h1>	
</section>

<div class="imgLiquidFill imgLiquid" style="width:100%; height:450px;">
    <img src="/img/main_image_1.jpg" alt="" id="background" />
    <div style="position:relative; width:50%; margin-left:32%; margin-right:auto; float:none; padding-top:5%">
        <h1 style="color:white; font-size: 2.75em;">We create <span style="color:#70d9fc">mobile</span> experiences <br>that no web interface can deliver.</h1>
    </div>
</div>
		
<section id="bottom_content" class="container clearfix">	
	<div class="one-half">
            <h4>The World is Mobile</h4>
            <p>Everyone by now knows that the future of web is mobile. More and more consumers will access the internet via smartphones, tablets, and other portable devices. But what is more interesting from recent research is that 85% of consumers favor apps over mobile websites. Creating mobile user experiences that delight users should provide relevant functionality, structured navigation, mobile-appropriate content, and of course striking design.</p>	
	</div><!-- end .one-third -->

	<div class="one-half last">
            <h4>Our Expertise</h4>
            <p>Boomar’s first iOS application – and company product too – was Mind the Buzz, a trivia game aimed for the Greek market. Its impact was huge. It became number one app in the Greek AppStore in less than 24 hours and remained there for 5 months! More apps came along, for clients who saw the shift to mobile and understood the value they can give to their consumers by creating mobile experiences that no web interface could provide.</p>
	</div><!-- end .one-third -->

<div class="clear"></div>
<hr/>
<h6 class="section-title">Latest Mobile Projects</h6>

<section id="portfolio-items" class="clearfix">

    <article class="one-third" data-categories="mobile web">

        <a href="/project/1" title="Mind the Buzz">
            <img src="/boomar_images/mobile_img_1.jpg" alt="">
        </a>

        <a href="/project/1" class="project-meta">
            <h5 class="title">Mind the Buzz</h5>
            <span class="categories">Mobile App / A Boomar product</span>
        </a>

    </article><!-- end .one-third (Altered) -->

    <article class="one-third" data-categories="mobile strategy">

        <a href="/project/2" title="Ifeelkid">
            <img src="/boomar_images/mobile_img_2.jpg" alt="">
        </a>

        <a href="/project/2" class="project-meta">
            <h5 class="title">Ifeelkid</h5>
            <span class="categories">Mobile App / design &amp; development</span>
        </a>

    </article><!-- end .one-third (Snow Tower) -->

    <article class="one-third" data-categories="illustration animation">

        <a href="/project/7" title="Ticket On the Go">
            <img src="/boomar_images/mobile_img_3.jpg" alt="">
        </a>

        <a href="/project/7" class="project-meta">
            <h5 class="title">Ticket On the Go</h5>
            <span class="categories">Mobile App / design &amp; development</span>
        </a>

    </article><!-- end .one-third (Not the end) -->
</section><!-- end #portfolio-items -->

	
</section><!-- end #content -->

<?php echo $this->element('footer'); ?>

<!--[if !lte IE 6]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="/js/respond.min.js"></script>
	<script src="/js/jquery.easing-1.3.min.js"></script>
	<script src="/js/jquery.fancybox.pack.js"></script>
	<script src="/js/jquery.smartStartSlider.min.js"></script>
	<script src="/js/jquery.jcarousel.min.js"></script>
	<script src="/js/jquery.cycle.all.min.js"></script>
	<script src="/js/jquery.isotope.min.js"></script>
	<script src="/js/audioplayerv1.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="/js/jquery.gmap.min.js"></script>
	<script src="/js/jquery.touchSwipe.min.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/imgLiquid.js"></script>
	<script>
	
	$(document).ready(function(){
		$(".imgLiquidFill").imgLiquid();
  });  
	
	</script>
<!--<![endif]-->
</body>
</html>