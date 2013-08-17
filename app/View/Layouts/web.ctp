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

	
		<h1 class="page-title">Websites</h1>

	
</section>

<div class="imgLiquidFill imgLiquid" style="width:100%; height:450px;">
    <img src="/img/main_image_2.jpg" alt="" id="background" />
    <div style="position:relative; width:50%; margin-left:32%; margin-right:auto; float:none; padding-top:5%">
        <h1 style="color:white; font-size: 2.75em;">We love discovering what's<br>beneath the obvious and<br>give your site an <span style="color:#70d9fc">edge</span>.</h1>
    </div>
</div>
		
<section id="bottom_content" class="container clearfix">

	
	<div class="one-half">

		<h4>Content is King</h4>

		<p>Having a website today is not rocket science. Almost every business – from small to gigantic – has a web presence. But do their websites generate sales or boost customer loyalty? A great website, for us, is the outcome of a well-designed and functional interface with valuable content. If the site cannot provide engaging content, then the design is doomed to fail. Capturing the user’s interest is the first objective, and one we usually achieve. Having repeated visitors and ultimately customers is a goal that is mostly met by having regularly updated, quality content. And thankfully, we can help in that area too.</p>
		
	</div><!-- end .one-third -->

	<div class="one-half last">

		<h4>Our Expertise</h4>

		<p>Designing a website is not our primary differentiation. Almost anyone can do that with the plethora of quality designs available online. What no template can deliver, though, is having a passionate team that will bring to life your brand’s personality. The most important factor is how a site makes a visitor feel. This will set your site apart from competitors and help you connect with an excited audience. Our job – and expertise – is to suggest ways to achieve that by focusing not only on delivering great designs, but also ideas and functionalities that will give your site an edge.</p>
	</div><!-- end .one-third -->

<div class="clear"></div>
<hr/>
<h6 class="section-title">Latest Web Projects</h6>

<section id="portfolio-items" class="clearfix">

    <article class="one-third" data-categories="illustration design">

        <a href="/project/3" title="Finos Film">
            <img src="/boomar_images/web_img_1.jpg" alt="">
        </a>

        <a href="/project/3" class="project-meta">
            <h5 class="title">Finos Film</h5>
            <span class="categories">Website / from concept to development</span>
        </a>

    </article><!-- end .one-third (Altered) -->

    <article class="one-third" data-categories="illustration photography">

        <a href="/project/6" title="Bwin">
            <img src="/boomar_images/web_img_2.jpg" alt="">
        </a>

        <a href="/project/6" class="project-meta">
            <h5 class="title">Bwin</h5>
            <span class="categories">Facebook App / design &amp; development</span>
        </a>

    </article><!-- end .one-third (Snow Tower) -->

		<article class="one-third" data-categories="illustration animation">

			<a href="/project/5" title="Cando">
				<img src="/boomar_images/web_img_3.jpg" alt="">
			</a>

			<a href="/project/5" class="project-meta">
				<h5 class="title">Cando</h5>
				<span class="categories">web / branding</span>
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