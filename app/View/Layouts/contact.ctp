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
                
                <link rel="stylesheet" href="/css/validationEngine.jquery.css" type="text/css"/>
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="/js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="/js/video.min.js"></script>
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
		<img src="/img/logo.png" alt="Boomar">
	</a>

	<?php echo $this->element('menu'); ?>
	
</header><!-- end #header -->

<section id="content" class="clearfix">

	<div class="container clearfix">

		<header class="page-header">
		
			<h1 class="page-title">We'd love to hear from you</h1>
			
		</header><!-- end .page-header -->

	</div><!-- end .container -->

	<section id="map">
		<p class="container">Something went wrong... Try to enable your JavaScript!</p>
	</section><!-- end #map -->

	<div class="container clearfix">
		
		<div class="one-fourth">

			<h3>Contact Info</h3>

			<p>Kanari 4<br/>
			152 37 Filothei<br/>
			Athens, Greece</p>

				<p>Phone: (+30) 210 683 6371<br/>
				
				Email: info@boomar.gr<br/>
				Web: boomar.gr</p>
			
		</div><!-- end .one-fourth -->
		
		<div class="three-fourth last">

			<h3>Let's keep in touch</h3>

			<form id="contactForm" action="/boomar/userContact" method="post" class="contact-form">
			
                            <p class="input-block">
                                <label for="contact-name"><strong>Name</strong> (required)</label>
                                <input type="text" name="name" value="" id="contact-name" class="validate[required]">
                            </p>

				<p class="input-block">
					<label for="contact-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="contact-email" class="validate[required,custom[email]]">
				</p>
				
				<p class="input-block">
					<label for="contact-subject"><strong>Subject</strong></label>
					<input type="text" name="subject" value="" id="contact-subject">
				</p>

				<p class="textarea-block">
					<label for="contact-message"><strong>Your Message</strong> (required)</label>
					<textarea name="message" id="contact-message" cols="88" rows="6" class="validate[required]"></textarea>
				</p>
			
				<div class="hidden">
					<label for="contact-spam-check">Do not fill out this field:</label>
					<input name="spam-check" type="text" value="" id="contact-spam-check" />
				</div>

				<input type="submit" value="Submit">

				<div class="clear"></div>

			</form>

		</div><!-- end .three-fourth.last -->

	</div><!-- end .container -->
		
</section><!-- end #content -->

<?php echo $this->element('footer'); ?>

<!--[if !lte IE 6]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="/js/jquery.validationEngine-en.js"></script>
        <script src="/js/jquery.validationEngine.js"></script>
	<script>window.jQuery || document.write('<script src="/js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="/js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
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
        <script>
        $(document).ready(function(){
            $("#contactForm").validationEngine();
        });
        </script>
<!--<![endif]-->
</body>
</html>