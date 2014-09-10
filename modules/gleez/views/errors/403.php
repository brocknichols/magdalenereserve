
<!doctype html>

<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Access Denied</title>

	<meta name="description" content="Magdalene Reserve" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

        <?php echo HTML::style('media/css/bootstrap.min.css', NULL, TRUE); ?>
        <?php echo HTML::style('media/css/user.css', NULL, TRUE); ?>
        <?php echo HTML::style('media/css/gumbys.css', NULL, TRUE); ?>
	<?php echo HTML::script('media/js/libs/modernizr-2.6.2.min.js', NULL, TRUE); ?>
        <style>
            .content_wrapper{
                min-height: 100%;
                position: relative;
                padding-bottom: 85px;
            }
            table tr td, table tbody tr td{
                font-size:10px !important;
            }
        </style>
</head>
<body>

  <div class="row navbar pretty" gumby-fixed="0px">

  <h1 class="one columns logo">

    <a href="<?php echo URL::site(); ?>">

      <?php echo HTML::image('media/images/MR_Logo_small.png',array('gumby-retina'=>'')); ?>

    </a>

  </h1>

<div class="nav_container">
  <ul class="six columns right">

    <li>

      <a href="#">Community</a>

      <div class="dropdown">

        <ul>

          <li><a href="<?php echo URL::site('/pages/hoa-minutes');?>">Neighbor Talk</a></li>

          <li><a href="<?php echo URL::site('/pages/hoa-minutes');?>">HOA Minutes</a></li>

          <li><a href="<?php echo URL::site('/pages/resources');?>">Resources</a></li>

        </ul>

      </div>

    </li>

    <li><a href="<?php echo URL::site('/calendar');?>">Calendar</a></li>

    <li><a href="#">Real Estate</a></li>

    <li><a href="#">Local Savings</a></li>

    <li><a href="<?php echo URL::site('/contact');?>">Contact</a></li>
    
   

  </ul>
</div>
</div>
    <div class="content_wrapper">
    		
        <main id="content" class="frontend-main" role="main">
    <div class="container">
        <div class="row denied_content">
                            <?php echo __("You're not authorized to access <span>:url</span>!<br>You must sign in or register to view this page.", array(':url' => Text::plain($url))) ?>
                </div>
        	<div class="row">

                  <?php  
                    		// Create form action
              $user        = ORM::factory('user');
		$destination = isset($_GET['destination']) ? $_GET['destination'] : Request::initial()->uri();
		$params      = array('action' => 'login');
		$action      = Route::get('user')->uri($params).URL::query(array('destination' => $destination));

		$view = View::factory('user/login')
                        ->set('register',     Config::get('auth.register'))
			->set('use_username', Config::get('auth.username'))
			->set('providers',    array_filter(Auth::providers()))
			->set('post',         $user)
			->set('action',       $action)
                        ->set('title', 'Magdalene Reserve');
                echo $view;
                ?>

                </div>
    </div>
        </main>
    
    <div class="row bottomrow abs">
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
                <li><a href="<?php echo URL::site('/blog');?>">Neighbor Talk</a></li>
                <li><a href="<?php echo URL::site('/pages/hoa-minutes');?>">HOA Minutes</a></li>
            <li><a href="<?php echo URL::site('/pages/resources');?>">Resources</a></li>
        </ul>
    </div>

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
