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

    <header class="page-header">

        <h1 class="page-title">Things we have done</h1>
        <ul id="portfolio-items-filter">

            <li>Showing</li>
            <li><a data-categories="*">All</a></li>
            <li><a data-categories="mobile">Mobile</a></li>
            <li><a data-categories="web">Web</a></li>
            <li><a data-categories="branding">Branding</a></li>
            <li><a data-categories="strategy">Strategy</a></li>

        </ul><!-- end #portfolio-items-filter -->

    </header><!-- end .page-header -->

    <section id="portfolio-items" class="clearfix">

        <article class="one-half" data-categories="mobile web strategy">

                <a href="/project/<?php echo PROJECT_MINDTHEBUZZ?>" title="Mind the Buzz">
                    <img src="img/placeholders/boomar/overview/mtb_460x292.jpg" alt="">
                </a>

                <a href="/project/<?php echo PROJECT_MINDTHEBUZZ?>" class="project-meta">
                    <h5 class="title">Mind the Buzz</h5>
                    <span class="categories">mobile / web / digital strategy</span>
                </a>

        </article><!-- end .one-half (Altered) -->

        <article class="one-half" data-categories="mobile">

            <a href="/project/<?php echo PROJECT_DOGSQUARE?>" title="Dogsquare">
                <img src="img/placeholders/boomar/overview/dogsquare_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_DOGSQUARE?>" class="project-meta">
                <h5 class="title">Dogsquare</h5>
                <span class="categories">mobile</span>
            </a>

        </article><!-- end .one-half (Snow Tower) -->
        
        <article class="one-half" data-categories="mobile strategy">

            <a href="/project/<?php echo PROJECT_IFEELKID?>" title="Ifeelkid">
                <img src="img/placeholders/boomar/overview/ifeelkid_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_IFEELKID?>" class="project-meta">
                <h5 class="title">Ifeelkid</h5>
                <span class="categories">mobile / digital strategy</span>
            </a>

        </article><!-- end .one-half (Snow Tower) -->

        <article class="one-half" data-categories="web strategy">

            <a href="/project/<?php echo PROJECT_FINOSFILM?>" title="Finos Film">
                <img src="img/placeholders/boomar/overview/ff_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_FINOSFILM?>" class="project-meta">
                <h5 class="title">Finos Film</h5>
                <span class="categories">web / digital strategy</span>
            </a>

        </article><!-- end .one-half (Not the end) -->
        
        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_AXDW14?>" title="AXDW XIV">
                <img src="img/placeholders/boomar/overview/axdw14_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_AXDW14?>" class="project-meta">
                <h5 class="title">AXDW XIV</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (Shift) -->
        
        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_AXDW13?>" title="AXDW XIII">
                <img src="img/placeholders/boomar/overview/axdw13_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_AXDW13?>" class="project-meta">
                <h5 class="title">AXDW XIII</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (Shift) -->

        <article class="one-half" data-categories="web branding">

            <a href="/project/<?php echo PROJECT_CANDO?>" title="Cando">
                <img src="img/placeholders/boomar/overview/cando_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_CANDO?>" class="project-meta">
                <h5 class="title">Cando</h5>
                <span class="categories">web / branding</span>
            </a>

        </article><!-- end .one-half (Synergy) -->

        <article class="one-half" data-categories="web">

            <a href="/project/<?php echo PROJECT_BWIN_FB?>" title="Bwin - Facebook game">
                <img src="img/placeholders/boomar/overview/bwin_fb_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_BWIN_FB?>" class="project-meta">
                <h5 class="title">Bwin - Facebook game</h5>
                <span class="categories">web</span>
            </a>

        </article><!-- end .one-half (The Game) -->

        <article class="one-half" data-categories="mobile">

            <a href="/project/<?php echo PROJECT_TOG?>" title="Ticket On The Go">
                <img src="img/placeholders/boomar/overview/tong_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_TOG?>" class="project-meta">
                <h5 class="title">Ticket On The Go</h5>
                <span class="categories">mobile</span>
            </a>

        </article><!-- end .one-half (The Game) -->

        <article class="one-half" data-categories="web branding">

            <a href="/project/<?php echo PROJECT_SIVACO?>" title="Sivaco">
                <img src="img/placeholders/boomar/overview/sivaco_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_SIVACO?>" class="project-meta">
                <h5 class="title">Sivaco</h5>
                <span class="categories">web / branding</span>
            </a>

        </article><!-- end .one-half (Trantor) -->

        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_AXDW12?>" title="AXDW XII">
                <img src="img/placeholders/boomar/overview/axdw12_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_AXDW12?>" class="project-meta">
                <h5 class="title">AXDW XII</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (Futurisk) -->

        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_ORINO?>" title="Orino">
                <img src="img/placeholders/boomar/overview/orino_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_ORINO?>" class="project-meta">
                <h5 class="title">Orino</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (Forrst Android App UI Design Mockups) -->

        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_BWIN?>" title="Bwin">
                <img src="img/placeholders/boomar/overview/bwin_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_BWIN?>" class="project-meta">
                <h5 class="title">Bwin</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (Forbidden Words) -->

        <article class="one-half" data-categories="web">

            <a href="/project/<?php echo PROJECT_KTEL?>" title="Ktel">
                <img src="img/placeholders/boomar/overview/ktel_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_KTEL?>" class="project-meta">
                <h5 class="title">Ktel</h5>
                <span class="categories">web</span>
            </a>

        </article><!-- end .one-half (Static Adventure) -->

        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_ZOFIPSI?>" title="Zofipsy">
                <img src="img/placeholders/boomar/overview/zofipsy_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_ZOFIPSI?>" class="project-meta">
                <h5 class="title">Zofipsy</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (Nothing endures but change) -->

        <article class="one-half" data-categories="branding">

            <a href="/project/<?php echo PROJECT_AXDW11?>" title="AXDW XI">
                <img src="img/placeholders/boomar/overview/axdw11_460x292.jpg" alt="">
            </a>

            <a href="/project/<?php echo PROJECT_AXDW11?>" class="project-meta">
                <h5 class="title">AXDW XI</h5>
                <span class="categories">branding</span>
            </a>

        </article><!-- end .one-half (The Travelers) -->

	</section><!-- end #portfolio-items -->
	
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
<!--<![endif]-->
</body>
</html>