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

		<h1 class="page-title align-left">Our Approach</h1>

		<hr />

		<h2 class="page-description">All projects are unique and should be treated as such. Our approach provides a flexible framework to create powerful solutions for big ideas.</h2>
		
	</header><!-- end .page-header -->
        
        <div class="team-member one-fourth">

		<img src="/img/services-icons/approach/1_approach_investigate.png" alt="" class="photo">

		<div class="content">

			<h4 class="name"><span style="color:red;">I</span>nvestigate</h4>

			<span class="job-title">&nbsp;</span>

			<p>Getting to know all about your brand and what you want to achieve is all we need to kick start our creative process.</p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth">

		<img src="/img/services-icons/approach/2_approach_design.png" alt="" class="photo">

		<div class="content">

			<h4 class="name"><span style="color:red;">D</span>esign</h4>

			<span class="job-title">&nbsp;</span>

			<p>Intriguing concepts and engaging interactions come to life, always hand-in-hand with our engineers to ensure agile implementation.</p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth">

		<img src="/img/services-icons/approach/3_approach_engineer.png" alt="" class="photo">

		<div class="content">

			<h4 class="name"><span style="color:red;">E</span>ngineer</h4>

			<span class="job-title">&nbsp;</span>

			<p>The building process is when our creations become tangible, followed by rigorous testing to ensure flawless performance. </p>
			
		</div><!-- end .content -->
	
	</div><!-- end .team-member.one-fourth -->
	
	<div class="team-member one-fourth last">

		<img src="/img/services-icons/approach/4_approach_activate.png" alt="" class="photo">

		<div class="content">

			<h4 class="name"><span style="color:red;">A</span>ctivate</h4>

			<span class="job-title">&nbsp;</span>

			<p>The excitement of launching a brand, an app or a website is usually accompanied with targeted PR and social media engagement.</p>
			
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
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-43266607-1', 'boomar.gr');
            ga('send', 'pageview');

        </script>
<!--<![endif]-->
</body>
</html>