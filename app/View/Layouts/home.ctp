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
        <img src="img/logo.png" alt="Boomar">
    </a>

	<?php echo $this->element('menu'); ?>
	
</header><!-- end #header -->

<section id="top_content" class="container clearfix">
    <h2 class="slogan align-center">Hello! Welcome to Boomar.<br />
    A creative studio with funky people who love what they do.</h2>
</section>

    <div class="imgLiquidFill imgLiquid" style="width:100%; height:450px;">
        <img src="/img/main_image_5.jpg" style="z-index: 5"alt="" id="background" />
        <div style="position:relative; width:50%; margin-left:32%; margin-right:auto; float:none; padding-top:5%">
            <h1 style="color:white; font-size: 2.75em;">We give birth to great <span style="color:red">ideas</span> and <br>turn them into memorable apps,<br>websites and products.</h1>
        </div>
    </div>
<section id="bottom_content" class="container clearfix">
    <h6 class="section-title">Latest Projects</h6>

    <ul class="projects-carousel clearfix">

        <li>
            <a href="/project/1">
                <img src="boomar_images/latest_1.jpg" alt="">
                <h5 class="title">Mind the Buzz</h5>
                <span class="categories">mobile / web / digital strategy</span>
            </a>
        </li>

        <li>
            <a href="/project/2">
                <img src="boomar_images/latest_2.jpg" alt="">
                <h5 class="title">Ifeelkid</h5>
                <span class="categories">mobile / digital strategy</span>
            </a>
        </li>

        <li>
            <a href="/project/3">
                <img src="boomar_images/latest_3.jpg" alt="">
                <h5 class="title">Finos Film</h5>
                <span class="categories">web / digital strategy</span>
            </a>
        </li>

        <li>
            <a href="/project/4">
                <img src="boomar_images/latest_4.jpg" alt="">
                <h5 class="title">AXDW XIII</h5>
                <span class="categories">branding</span>
            </a>
        </li>

        <li>
            <a href="/project/5">
                <img src="boomar_images/latest_5.jpg" alt="">
                <h5 class="title">Cando</h5>
                <span class="categories">web / branding</span>
            </a>
        </li>

        <li>
            <a href="/project/6">
                <img src="boomar_images/latest_6.jpg" alt="">
                <h5 class="title">Ticket On the Go</h5>
                <span class="categories">mobile</span>
            </a>
        </li>

        <li>
            <a href="/project/7">
                <img src="boomar_images/latest_7.jpg" alt="">
                <h5 class="title">Bwin</h5>
                <span class="categories">web</span>
            </a>
        </li>

        <li>
            <a href="/project/8">
                <img src="boomar_images/latest_8.jpg" alt="">
                <h5 class="title">AXDW Week XII</h5>
                <span class="categories">branding</span>
            </a>
        </li>

        <li>
            <a href="/project/9">
                <img src="boomar_images/latest_9.jpg" alt="">
                <h5 class="title">Sivaco</h5>
                <span class="categories">web / branding</span>
            </a>
        </li>

        <li>
            <a href="/project/10">
                <img src="boomar_images/latest_10.jpg" alt="">
                <h5 class="title">Orino</h5>
                <span class="categories">branding</span>
            </a>
        </li>

        <li>
            <a href="/project/11">
                <img src="boomar_images/latest_11.jpg" alt="">
                <h5 class="title">Bwin</h5>
                <span class="categories">branding</span>
            </a>
        </li>

    </ul><!-- end .projects-carousel -->
	
</section><!-- end #content -->

<?php echo $this->element('footer'); ?>

<!--[if !lte IE 6]><!-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="js/respond.min.js"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.smartStartSlider.js"></script><!--//TODO MINIFY-->
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/audioplayerv1.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/custom.js"></script>
        <script src="js/imgLiquid.js"></script>
	<script>
	
	$(document).ready(function(){
            $(".imgLiquidFill").imgLiquid();
            
        });
           
	</script>
<!--<![endif]-->
</body>
</html>