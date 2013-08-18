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
		<link rel="stylesheet" href="css/style.css" media="screen" />

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-16262789-1']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
</head>
<body>

<header id="header" class="container clearfix">

	<a href="/" id="logo">
		<img src="img/logo.png" alt="SmartStart">
	</a>

	<?php echo $this->element('menu'); ?>
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<header style="margin-bottom:0px;" class="page-header">

		<h1 class="page-title align-left">What we offer</h1>

		<hr />

		<h2 class="page-description">From successful mobile apps to memorable websites and logos, we plan, design and develop experiences that stand out from the crowd.</h2>
		
	</header><!-- end .page-header -->
	
	<div class="team-member one-fourth">

		<a href="/services/mobile"><img src="/img/services-icons/services/1_service_mobile.png" alt="" class="photo"></a>

		<div class="content">

			<h4 class="name">Mobile Apps</h4>

			<span class="job-title">&nbsp;</span>

			<p>Whether it is iOS or Android, we believe in clear user interface design and intuitive interactions. We love working on mobile user experiences with relevant functionality, structured navigation, mobile-appropriate content, and of course striking design.</p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth">

		<a href="/services/web"><img src="/img/services-icons/services/2_service_web.png" alt="" class="photo"></a>

		<div class="content">

			<h4 class="name">Websites</h4>

			<span class="job-title">&nbsp;</span>

			<p>We use the latest web thinking to make sure your website is a joy to use on laptop, desktop, mobile or tablet. What we’re proud of is our skill to combine the finest technology with functional designs that communicate the right messages.</p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth">

		<a href="/services/branding"><img src="/img/services-icons/services/3_service_branding.png" alt="" class="photo"></a>

		<div class="content">

			<h4 class="name">Branding</h4>

			<span class="job-title">&nbsp;</span>

			<p>Armed with insight, we embark on creating inventive and impactful brands. Allowing flexibility to our designs gives us the power to further evolve the brand’s interaction with consumers and become more surprising, playful and adaptive.</p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth last">

		<a href="/services/strategy"><img src="/img/services-icons/services/4_service_strategy.png" alt="" class="photo"></a>

		<div class="content">

			<h4 class="name">Digital Strategy</h4>

			<span class="job-title">&nbsp;</span>

			<p>We do our homework to understand your audiences and their digital behaviors. In this process, we discover insights that enable us to draw a strategy that will meet your business goals and shape a powerful digital footprint for your brand.</p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth.last -->
	
</section>


<?php echo $this->element('footer'); ?>

<!--[if !lte IE 6]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="js/respond.min.js"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.smartStartSlider.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/audioplayerv1.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/custom.js"></script>
<!--<![endif]-->
</body>
</html>