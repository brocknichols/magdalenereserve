<ul id="tabnav" class="nav nav-pills nav-stacked">
	<li<?php if($activeli=='edit') echo " class='active'"; ?>>
            <?php echo HTML::anchor('user/edit', '<i class="fa fa-fw fa-user"></i> '.__('Profile Settings')); ?>
	</li>
	<li<?php if($activeli=='password') echo " class='active'"; ?>>
		<?php echo HTML::anchor('user/password', '<i class="fa fa-fw fa-lock"></i> '.__('Change Password')); ?>
	</li>
	<?php if (! Config::get('site.use_gravatars', FALSE)): ?>
		<li<?php if($activeli=='photo') echo " class='active'"; ?>>
			<?php echo HTML::anchor('user/photo', '<i class="fa fa-fw fa-upload"></i> ' . __('Change Avatar'), array('id' => 'add-pic1', 'title' => __('Change your avatar'))) ?>
		</li>
	<?php endif; ?>
</ul>
