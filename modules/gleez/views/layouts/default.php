<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<title><?php echo $head_title ?></title>
	<?php echo Meta::tags(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
</head>
<body id="<?php echo $page_id; ?>" class="<?php echo $page_class; ?>" <?php echo $schemaType ? 'itemscope itemtype="http://schema.org/'.$schemaType.'"' : ''?>>

    
	<!-- ########## Navbar start ########## -->
 
 <div class="row navbar pretty" id="nav1" gumby-fixed="0px">
  <a class="toggle" gumby-trigger="#nav1 > ul" href="#"><i class="icon-menu"></i></a>

  <h1 class="one columns logo">

    <a href="#">

      <?php echo HTML::image('media/images/MR_Logo_small.png',array('gumby-retina'=>'')); ?>

    </a>

  </h1>

  <ul class="push_four five columns">

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
  				<ul class="one columns navbar-right">
					<?php if (User::is_guest()): ?>
						<?php if (Kohana::$config->load('auth')->get('register')): ?>
							<li><a href="<?php echo URL::site('/user/register'); ?>"><?php echo __('Sign Up')?></a></li>
						<?php endif; ?>
						<li><a href="<?php echo URL::site('/user/login'); ?>"><i class="fa fa-fw fa-white fa-chevron-left"></i><?php echo __('Sign In') ?></a></li>
					<?php else:  ?>
						<li class="dropdown">
							<?php echo HTML::anchor('#', User::getAvatar($_user, array('size' => 20)).' '.$_user->name.'<b class="caret"></b>', array('data-toggle' => 'dropdown', 'class' => 'dropdown-toggle')); ?>

							<ul class="dropdown-menu">
								<li class="dropdown-header nogumby"><strong><?php echo $_user->nick ?></strong></li>
								<li class="dropdown-header nogumby"><?php echo $_user->mail ?></li>
								<li class="divider nogumby"></li>
								<li class="dropdown-header nogumby"><?php _e('Profile') ?></li>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/user/profile') ?>"><i class="fa fa-fw fa-cog"></i> <?php echo __('Profile') ?></a></li>
								<li class="dropdown-link nogumby"><a href="<?php echo URL::site('/message/inbox') ?>"><i class="fa fa-fw fa-envelope"></i> <?php echo __('Messages') ?></a></li>
								<li class="dropdown-header nogumby"><?php _e('Settings') ?></li>
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


	<!-- ########## Navbar end ########## -->

	<!-- ########## template / container start ########## -->
	<main id="content" class="frontend-main" role="main">
		<?php include Kohana::find_file('views', 'default.tpl'); ?>
	</main>
	<!-- ########## template / container end ########## -->

	<!-- ########## Footer start ########## -->
	<footer class="footer" role="contentinfo">
		<?php $footer = Widgets::instance()->render('footer', 'footer'); ?>
		<?php if ($footer): ?>
			<div class="extra">
				<div class="container">
					<div class="row">
						<?php echo $footer; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="footer-terms">
			<div class="container text-muted">
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<p class="pull-left"><?php echo __('&copy; :year :site', array(':year' => date('Y'), ':site' => HTML::anchor(URL::site(false, true), $site_name)));?></p>
					</div>
					<div class="col-xs-6 col-md-6">
						<p class="pull-right"><?php echo __(':powerdby v{gleez_version}', array(':powerdby' => HTML::anchor('http://gleezcms.org/', 'Gleez CMS')))?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center" id="footer-system-info">
						<small><?php echo __('Rendered in {execution_time}, using {memory_usage} of memory.')?></small>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ########## Footer end ########## -->

	<?php echo Assets::js(FALSE); ?>
	<?php echo Assets::codes(FALSE); ?>
	<?php echo $profiler; ?>
        <?php echo HTML::script('media/js/libs/gumby.js', NULL, TRUE); ?>
        <?php echo HTML::script('media/js/libs/ui/gumby.navbar.js', NULL, TRUE); ?>
</body>
</html>