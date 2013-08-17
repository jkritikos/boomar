<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Single Project - SmartStart</title>
	
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
		<img src="/img/logo.png" alt="SmartStart">
	</a>

	<?php echo $this->element('menu'); ?>
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<article class="single-project">

		<header class="page-header">

			<h1 class="page-title align-left">Things we have done</h1>
			
			<a href="/portfolio" class="button no-bg medium align-right">
				All Projects <img src="/img/icon-grid.png" alt="" class="icon">
			</a>

			<hr />

                        <h2 class="project-title"><?php echo $title; ?> <span style="color:gray; font-style: italic; font-size: 17px;">&nbsp;&nbsp;&nbsp;<?php echo $skills; ?></span></h2>

			<ul class="portfolio-pagination">
                            <?php 
                            if($previous){
                                $previousID = $id - 1;
                                ?>
                                <li class="next"><a href=/project/<?php echo $previousID; ?> class="button medium no-bg">Previous <span class="arrow left">&raquo;</span></a></li>
                                <?php
                            }
                            
                            if($next){
                                $nextID = $id + 1;
                                ?>
                                <li class="next"><a href=/project/<?php echo $nextID; ?> class="button medium no-bg">Next <span class="arrow">&raquo;</span></a></li>
                                <?php
                            }
                            ?>
				
			</ul><!-- end .portfolio-pagination -->
			
		</header><!-- end .page-header -->

		<div id="main">
		
			<div class="image-gallery-slider">

				<ul>
                                    <?php
                                    foreach($images as $i){
                                        ?>
                                        <li>
                                            <a href="#" title="<?php echo $title; ?>" rel="single-project">
                                                <img src="<?php echo $i; ?>" alt="<?php echo $title; ?>">
                                            </a>
					</li>
                                        <?php
                                    }
                                    
                                    ?>
				</ul>
				
			</div><!-- end .image-gallery-slider -->
		
		</div><!-- end #main -->

		<div id="sidebar">

			<h4>Overview</h4>

			<p><?php echo $overview; ?></p>

			<h4>Things we did</h4>

			<p><?php echo $things; ?></p>

			<p>
				<a href="<?php echo $url; ?>" class="button">Visit website</a>
			</p>

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<?php echo $this->element('footer'); ?>

<!--[if !lte IE 6]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
<!--<![endif]-->
</body>
</html>