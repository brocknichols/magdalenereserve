
<div class="account-container">

	<?php include Kohana::find_file('views', 'errors/partial'); ?>

	<?php echo Form::open($action); ?>

    <div class="row"> 
        <div class="eight columns">
            <fieldset>
                <legend>Sign in using your registered account:</legend>
                <div class="nine columns">
                <ul>
                 <li class="field">
                        <span class="ttip" data-tooltip="Enter your User Name"><i class="icon-info"></i></span><input class="input wide" name="name" type="text" placeholder="Username" value="<?php echo $post->name; ?>">
                    </li>
                    <li class="field">
                         <span class="ttip" data-tooltip="Enter your Password"><i class="icon-eye"></i></span><input class="input wide" name="password" type="password" placeholder="Password">
                    </li>
                </ul>
                </div>
                <div class="two columns ">
                    <img src="/gumby/img/MR_Logo.jpg">
                </div>
                </fieldset>
            </div>      
    </div>
    <div class="row"> 
        <div class="two columns">
        <?php echo Form::checkbox('remember', TRUE, FALSE, array('tabindex' => 4)) . ' ' . __('Stay Signed in'); ?>
	</div>
    </div>
    <div class="row"> 
        <div class="four columns"> 
			<div class="medium primary pretty btn icon-left entypo icon-login">
                            <a href="#"><?php echo Form::submit('login', __('Sign In')); ?></a>
			</div>
        </div>
    </div>
    <div class="row"> 
        <div class="four columns"> 
				<ul>
					<li><?php echo HTML::anchor('user/reset/password', __('Forgot Password?')); ?></li>
					<li><?php echo __("Don't have an account? :url", array(':url' => HTML::anchor('user/register', __('Create One.'))) ); ?></li>
				</ul>
	</div>
    </div>
		<?php if ($providers): ?>
			<div class="control-group clearfix">
				<p><?php echo __('Sign in using social network:');?></p>
				<ul id="auth-providers">
					<?php foreach ($providers as $provider => $key): ?>
						<li class="provider <?php echo $provider; ?>">
							<?php
							$url = Route::get('user/oauth')->uri(array('controller' => $provider, 'action' => 'login'));

							echo HTML::anchor($url, ucfirst($provider), array('id' => $provider, 'title' =>__('Login with :provider', array(':provider' => $provider))));
							?>
						</li>
					<?php endforeach; ?>
					<br><small><?php echo __('Fast, safe & secure way!');?></small>
				</ul>
			</div>
		<?php endif; ?>

	<?php echo Form::close() ?>
</div>