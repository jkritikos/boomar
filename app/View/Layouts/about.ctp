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
		<img src="img/logo.png" alt="Boomar">
	</a>

	<?php echo $this->element('menu'); ?>
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

    <header class="page-header">

        <h1 class="page-title align-left">About Us</h1>

        <hr />

        <h2 class="page-description">We are an independent creative studio that focuses on giving birth to great ideas and turning them into memorable apps, websites and products.</h2>

    </header><!-- end .page-header -->
	
    <div class="one-third">

        <h4>Boomar Culture</h4>

        <p>If we could put a word for our philosophy and culture, this would be “freedom”. We strive to have the freedom to think different and work in an inspiring and creative environment. Our studio
            is the home for shared talent, where passing conversations can turn into next week’s innovations.<br> Our team is quite diverse, consisting of experienced developers, designers, strategists and 
            communicators, who work together or separately depending on each project’s needs. An eclectic group of individuals who have one core thing in common: what we do is what we love – and that makes all the difference.
        </p>
		
    </div><!-- end .one-third -->

    <div class="one-third">

        <h4>Our Philosophy</h4>

        <p>We are small and that gives us the power to be super-flexible in every project we work on. There are no structures and charts; no bureaucratic madness to delay us. We do not care where 
            a great idea comes from. All we care is to deliver one.<br>We think broadly and dig deep to find answers to questions that will unfold memorable stories about great products. 
            Assuring consistent and agile execution is something we have mastered. Proper planning and testing has given Boomar the reputation of being always spot-on to deadlines. If we can’t meet the deadline, we just don’t take the job.
        </p>
    </div><!-- end .one-third -->

    <div style="padding-bottom:15px" class="one-third last">

        <h4>Happy Clients</h4>

        <p>Our clients usually become our friends. Because only through collaborative thinking, can we craft our work to perfection. Our goal is to be able to see your product as our own. Feel it. 
            Understand it. Once we do, we can add character and unfold its personality. That’s when our clients become really happy. Apart from Boomar’s own successful products 
            (i.e. <a href="/project/1">Mind the Buzz</a> iOS app), our clients range from film companies to fashion houses and from children’s apps to online gaming experts. Feel free 
            to ask any of them about our work and culture. We are quite sure you’ll be pleasantly surprised.
        </p>

    </div><!-- end .one-third.last -->
    
    <hr/>
    
    <div style="margin-top:4px;" class="one-half">
        <h4>
            <em><a href="/team" class="button no-bg">Meet our team <span class="arrow">&raquo;</span></a></em>
        </h4>
    </div>
	
</section><!-- end #content -->

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