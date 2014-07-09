<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Magdalene Reserve</title>
	<meta name="description" content="Magdalene Reserve" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link rel="stylesheet" href="<?php url::base(); ?>/gumby/css/gumby.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="<?php url::base(); ?>/gumby/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>

       <div class="row navbar pretty" id="nav1" gumby-fixed="30px">
  <a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>
  <h1 class="one columns logo">
    <a href="#">
      <img src="img/MR_Logo_small.png" gumby-retina />
    </a>
  </h1>
  <ul class="push_five six columns">
    <li>
      <a href="#">Community</a>
      <div class="dropdown">
        <ul>
          <li><a href="#">Neighborhood Newsletter</a></li>
          <li><a href="#">Bulletin Board</a></li>
          <li><a href="#">HOA Minutes</a></li>
          <li><a href="#">Resources</a></li>
        </ul>
      </div>
    </li>
    <li><a href="#">Calendar</a></li>
    <li><a href="#">Real Estate</a></li>
    <li><a href="#">Local Savings</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div>
        <div class="row header parallax" gumby-parallax="0.6">
        </div>  

    <div class="row">
        <div class="inview faderow" gumby-classname="onscreen" gumby-offset="20">
        <div class="two columns"></div>
        <div class="eight columns inner_content">        
                Magdalene Reserve sits off of Fletcher Ave in the northwest part of the county. This small neighborhood is 
                barely noticeable, but inside there is no mistaking what makes this place different. Trees overhang the narrow 
                lanes that meander through the lush vegetation. In the midst of this garden-like setting, houses seem to 
                appear out of the woods as if they’ve always been there. It’s a far cry from the typical wide expanses of grass 
                with lollipop oaks, where stucco and asphalt shingles glare in the sun. Residents of Magdalene Reserve know 
                they have something special. That’s why many of them were attracted to the community.
            </div>
        <div class="two columns"><img src="img/MR_Logo.jpg"></div>
    </div>
    </div>

    <div class="mag-image-grid">
        <div class="parallax" id="lake_seneca" gumby-parallax="0.2" >
        </div>
</div>
    
    <div class="row">
        <div class="inview faderow" gumby-classname="onscreen" gumby-offset="20">
            <div class="two columns"><img src="img/MR_Logo.jpg"></div>
            <div class="ten columns inner_content">
             Magdalene Reserve is an award winning community featuring lush Florida friendly Xeriscape and lots of Green 
             space. Conveniently located to major highways, schools and shopping centers, the neighborhood is comprised of 
             52 single family homes.              
            </div>
            <div class="two columns"></div>
        </div>
    </div>
    
        <div class="mag-image-grid">
        <div class="parallax" id="bench" gumby-parallax="0.2" ></div>
        </div>

     <div class="row">
        <div class="inview faderow" gumby-classname="onscreen" gumby-offset="90">
        <div class="two columns"></div>
        <div class="eight columns inner_content">        
        Magdalene Reserve is a quiet neighborhood of single family homes close to Carrollwood shopping, USF, airport and downtown. Many of the homes were originally built in the 1960's. This great location is close to I-275 so it is a quick hop around Tampa Bay.
            </div>
        <div class="two columns"><img src="img/MR_Logo.jpg"></div>
    </div>
    </div>
    
<div class="row bottomrow">
    <div class="centered eight columns">
        <ul class="five_up tiles bottomul bottomulmain">
                    <li>
                        Community
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        Real Estate
                    </li>
                    <li>
                        Local Savings
                    </li>
                    <li>
                        Contact
                    </li>
       </ul>
        <ul class="one_up tiles bottomul bottomulsub">
            <li>
                Neighborhood Newsletter
            </li>
            <li>
                Bulletin Board
            </li>
            <li>
                HOA Minutes
            </li>
            <li>
                Resources
            </li>
        </ul>
    </div>
  </div>

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->

        <script type="text/javascript">
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
        
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="<?php url::base(); ?>/gumby/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="<?php url::base(); ?>/gumby/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
        <script src="<?php url::base(); ?>/gumby/js/smoothPageScroll.js"></script>
	<!--
	Include gumby.js followed by UI modules followed by gumby.init.js
	Or concatenate and minify into a single file -->
	<script gumby-touch="<?php url::base(); ?>/gumby/js/libs" src="<?php url::base(); ?>/gumby/js/libs/gumby.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.retina.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.fixed.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.skiplink.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.checkbox.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.radiobtn.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.tabs.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.navbar.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/ui/jquery.validation.js"></script>
        <script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.parallax.js"></script>
        <script src="<?php url::base(); ?>/gumby/js/libs/ui/gumby.inview.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/libs/gumby.init.js"></script>

	<!--
	Google's recommended deferred loading of JS
	gumby.min.js contains gumby.js, all UI modules and gumby.init.js

	Note: If you opt to use this method of defered loading,
	ensure that any javascript essential to the initial
	display of the page is included separately in a normal
	script tag.

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/libs/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script> -->

	<script src="<?php url::base(); ?>/gumby/js/plugins.js"></script>
	<script src="<?php url::base(); ?>/gumby/js/main.js"></script>

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<script>
	window._gaq = [['_setAccount','UA-9705759-5'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

  </body>
</html>
