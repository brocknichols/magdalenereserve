<style type="text/css">
            * {
margin: 0;
}
html, body {
height: 100%;
}
.container {
min-height: 100%;
height: auto !important;
height: 100%;
margin: 60px auto -35px;

}
.bottomrow, .pushdown {
height: 105px;
}
.blog-list h2 a{
    font-size: 30px !important;
    color:#272727 !important;
    text-decoration: underline;
}
        </style>
        <div class="container">

		<?php echo Form::open($action, array('class' => 'form-horizontal1')); ?>
	<div class="row">
            <div class="eight columns push_three">

				<span><?php echo __('Fill in the information below to register'); ?></span>

		<?php include Kohana::find_file('views', 'errors/partial'); ?>
                    <ul>
			<?php if ($config->username): ?>
                        <li class="field">
                            <input class="input wide" name="name" type="text" placeholder="Enter your desired user name" value="<?php echo $post->name; ?>">
                        </li>

			<?php endif ?>
                    <li class="field">
                            <input class="input wide" name="mail" type="text" placeholder="Email will be private" value="<?php echo $post->mail; ?>">
                    </li>
                    <li class="field">
                            <input class="input wide" name="pass" type="password" placeholder="Enter your password" value="<?php echo $post->mail; ?>">
                    </li>
			<?php if ($config->confirm_pass): ?>
                    <li class="field">
                            <input class="input wide" name="pass_confirm" type="password" placeholder="Confirm your password" value="<?php echo $post->mail; ?>">
                    </li>
			<?php endif; ?>

			<?php if ($config->use_nick): ?>
                    <li class="field">
                            <input class="input wide" name="nick" type="text" placeholder="Your public name" value="<?php echo $post->nick; ?>">
                    </li>
			<?php endif ?>
                    <fieldset style="width:65.3333%">
                        <legend>Select Gender</legend>
                    <li class="field">
                    <label class="radio" for="radio1">
                      <input name="radio" id="radio1" value="1" type="radio" checked="">
                      <span></span> Male
                    </label>
                    <label class="radio" for="radio2">
                      <input name="radio" id="radio2" value="2" type="radio" checked="">
                      <span></span> Male
                    </label>
                    </li>
                    </fieldset>
                    <li>
                        <fieldset style="width:65.3333%">
                            <legend>Select Birthday</legend>
                        <div class="picker">
					<?php echo Form::select('month', Date::months(Date::MONTHS_SHORT), '', array('class' => 'inline')); ?>
                        </div>
                        <div class="picker">
					<?php echo Form::select('days',  Date::days(Date::DAY), '', array('class' => 'inline')); ?>
                        </div>
                        <div class="picker">
					<?php echo Form::select('years', Date::years(date('Y') - 95, date('Y') - 5), date('Y') - 5, array('class' => 'inline')); ?>
                        </div>
                        </fieldset>
                    </li>
			<?php if ($config->use_captcha  AND ! $captcha->promoted()) : ?>
                    <li class="field">
			<?php echo Form::input('_captcha', '', array('class' => 'input wide', 'placeholder'=>'Enter text in image below') ); ?>
			<br><span class="captcha-image"><?php echo $captcha; ?></span>
                    </li>
			<?php endif; ?>

                    <div class="medium primary pretty btn icon-left entypo icon-info-circled">
		<?php echo Form::submit('register', __('Register new account')) ?>
                    </div>

        </div>
		<?php echo Form::close(); ?>
	</div>

	<div class="row">
            <div class="four columns push_two">
                 <fieldset>
                     <legend>Already have an account?</legend>

				<?php $providers = array_filter($config->providers); ?>

					<?php
						$url = Route::get('user')->uri(array('action' => 'login'));
						echo HTML::anchor($url, __('Login Here', array(':site' => $site_name)), array('class' => 'picon-base', 'title' =>__('Login with :provider', array(':provider' => $site_name))));
					?>

                </fieldset>

	</div>
</div>

