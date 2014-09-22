<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<title><?php echo $head_title ?></title>
	<?php echo Meta::tags(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<?php echo Meta::links(); ?>
	<?php echo Assets::css(); ?>
        <?php echo HTML::style('media/css/gumbys.css', NULL, TRUE); ?>
        <?php echo HTML::script('media/js/libs/modernizr-2.6.2.min.js', NULL, TRUE); ?>
        
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<?php echo HTML::script('media/js/html5shiv.js', NULL, TRUE); ?>
		<?php echo HTML::script('media/js/respond.min.js', NULL, TRUE); ?>
    <![endif]-->
	<!--[if gt IE 9]>
		<?php echo HTML::script('media/css/ie-gte-9.css', NULL, TRUE); ?>
	<![endif]-->
        <?php echo Assets::js(FALSE); ?>
        <style>
                body{
        background: url('/media/images/grey_backgrounds.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
        </style>
</head>
<body id="<?php echo $page_id; ?>" class="<?php echo $page_class; ?>" <?php echo $schemaType ? 'itemscope itemtype="http://schema.org/'.$schemaType.'"' : ''?>>

<div class="content_wrapper">  
	<!-- ########## Navbar start ########## -->
 
 <div class="row navbar pretty nav2" id="nav1" gumby-fixed="0px">
  <a class="toggle" gumby-trigger=".nav2 > ul" href="#"><i class="icon-menu"></i></a>

  <h1 class="one columns logo">

    <a href="<?php echo URL::site(); ?>">

      <?php echo HTML::image('media/images/MR_Logo_small.png',array('gumby-retina'=>'')); ?>

    </a>

  </h1>
<div class="nav_container">
  <ul class="six columns right" id="navdisplay">

    <li>

      <a href="#">Community</a>

      <div class="dropdown">

        <ul>

          <li><a href="<?php echo URL::site('/blog');?>">Neighbor Talk</a></li>
          
          <li><a href="<?php echo URL::site('/poll');?>">Neighbor Polls</a></li>

          <li><a href="<?php echo URL::site('/pages/hoa-minutes');?>">HOA Minutes</a></li>

          <li><a href="<?php echo URL::site('/pages/resources');?>">Resources</a></li>

        </ul>

      </div>

    </li>

    <li><a href="<?php echo URL::site('/calendar');?>">Calendar</a></li>

    <li><a href="#">Real Estate</a></li>

    <li><a href="#">Local Savings</a></li>

    <li><a href="<?php echo URL::site('/contact');?>">Contact</a></li>
    
    <?php if (User::is_guest()): ?>
						<li><a href="<?php echo URL::site('/user/login'); ?>"><i class="fa fa-fw fa-white fa-chevron-left"></i><?php echo __('Sign In') ?></a></li>
					<?php else:  ?>
						<li class="dropdown">
							<?php echo HTML::anchor('#', User::getAvatar($_user, array('size' => 20)).' '.$_user->name.'<b class="caret"></b>', array('data-toggle' => 'dropdown', 'class' => 'dropdown-toggle')); ?>

							<ul class="dropdown-menu">
								<li class="dropdown-header nogumby"><strong><?php echo $_user->nick ?></strong></li>
								<li class="dropdown-header nogumby"><?php echo $_user->mail ?></li>
								<li class="divider nogumby"></li>
								<li class="dropdown-header nogumby bg"><?php _e('Profile') ?></li>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/user/profile') ?>"><i class="fa fa-fw fa-cog"></i> <?php echo __('Profile') ?></a></li>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/message/inbox') ?>"><i class="fa fa-fw fa-envelope"></i> <?php echo __('Messages') ?></a></li>
								<li class="dropdown-header nogumby bg"><?php _e('Settings') ?></li>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/user/edit') ?>"><i class="fa fa-fw fa-pencil"></i> <?php echo __('Profile Settings') ?></a></li>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/user/password') ?>"><i class="fa fa-fw fa-lock"></i> <?php echo __('Change Password') ?></a></li>
								<li class="divider nogumby"></li>
								<?php if (User::is_admin()): ?>
									<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/admin') ?>"><i class="fa fa-fw fa-dashboard"></i> <?php echo __('Dashboard') ?></a></li>
								<?php endif; ?>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/user/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> <?php echo __('Sign Out') ?></a></li>
							</ul>
						</li>

					<?php endif; ?>

  </ul>
</div>
					

</div>


	<!-- ########## Navbar end ########## -->

	<!-- ########## template / container start ########## -->
	<main id="content" class="frontend-main" role="main">
		<?php include Kohana::find_file('views', 'default.tpl'); ?>
	</main>
	<!-- ########## template / container end ########## -->

	<!-- ########## Footer start ########## -->
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
                <li><a href="<?php echo URL::site('/poll');?>">Neighbor Polls</a></li>
        </ul>
    </div>

    </div>
	<!-- ########## Footer end ########## -->
</div>

    <script type='text/javascript'>
        if(jQuery('.alert').length>0){
            jQuery('.alert').delay(4000).fadeOut();
        }
        
         jQuery('.toggle').on('click', function(){
            if(jQuery('#navdisplay').is(':visible')){
                jQuery('#navdisplay').css('display','none');
            } else {
            jQuery('#navdisplay').css('display','table');
        }
        })
        
    jQuery('.openclose').on('click', function(){
        if(jQuery(this).hasClass('openwidget')){
            jQuery.ajax({
                type: "POST",
                url: "<?php echo URL::site('webservices/widgets/setcookie');?>",
                data: { widget: jQuery(this).parent().parent().attr('data-val'), val: 1}
              });
                
            jQuery(this).removeClass('openwidget');
            jQuery(this).addClass('closewidget');
            jQuery(this).parent().parent().find('.panel-body').slideDown('slow');
            if(jQuery(this).parent().parent().attr('data-val')=='calendar-widget'){
            jQuery('#calendararea').empty();
            loadCalendar();
            }
        } else {
            jQuery.ajax({
                type: "POST",
                url: "<?php echo URL::site('webservices/widgets/setcookie');?>",
                data: { widget: jQuery(this).parent().parent().attr('data-val'), val: 0}
              });
            jQuery(this).addClass('openwidget');
            jQuery(this).removeClass('closewidget');
            jQuery(this).parent().parent().find('.panel-body').slideUp('slow');
        }
    })
    
    
   </script>
	<?php echo Assets::codes(FALSE); ?>

        <?php echo HTML::script('media/js/libs/gumby.js', NULL, TRUE); ?>
        <?php echo HTML::script('media/js/libs/ui/gumby.navbar.js', NULL, TRUE); ?>
   
</body>
</html>