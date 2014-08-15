<!doctype html>

<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $head_title ?></title>

	<meta name="description" content="Magdalene Reserve" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <?php echo HTML::style('media/css/gumbys.css', NULL, TRUE); ?>
	<?php echo HTML::script('media/js/libs/modernizr-2.6.2.min.js', NULL, TRUE); ?>
</head>
<body>

  <div class="row navbar pretty" id="nav1" gumby-fixed="0px">

  <a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>

  <h1 class="one columns logo">

    <a href="#">

      <?php echo HTML::image('media/images/MR_Logo_small.png',array('gumby-retina'=>'')); ?>

    </a>

  </h1>

<div class="nav_container">
  <ul class="six columns right">

    <li>

      <a href="#">Community</a>

      <div class="dropdown">

        <ul>

          <li><a href="#">Neighborhood Newsletter</a></li>

          <li><a href="blog">Neighbor Talk</a></li>

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
</div>
			<?php
				$tpl = $is_admin ? 'admin' : 'welcome';
				include Kohana::find_file('views', $tpl.'.tpl');
			?>

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
                Neighbor Talk
            </li>
            <li>
                HOA Resources
            </li>
        </ul>
    </div>

    </div>


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
            document.write('<script src="<?php echo url::base(); ?>media/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
            document.write('<script src="<?php echo url::base(); ?>media/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}

	</script>
<!--        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>-->


        <?php echo HTML::script('media/js/libs/ui/welcome.js', NULL, TRUE); ?>

<!--	<script>
	window._gaq = [['_setAccount','UA-9705759-5'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});

	</script>-->
	</body>

</html>

