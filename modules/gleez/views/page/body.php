<style>
    .nav-pills>li>a { 
    color: #FFF;
    background-color: #428BCA;
    }
    .nav-pills>li>a:hover{
       background-color: #DB9999
    }
</style>
<div id="post-<?php echo $post->id; ?>" class="<?php echo $post->type ?> post<?php if ($post->sticky) { echo ' sticky'; } ?> <?php echo ' post-'. $post->status;  ?>">

        <?php
                $widget_p_top = Widgets::instance()->render('post_top');
                $widget_p_bot = Widgets::instance()->render('post_bottom');
        ?>

	<?php if($post->taxonomy OR $config->use_submitted): ?>
		<div class="row meta">
			<?php if ($config->use_submitted): ?>
				<div class="col-md-7">
					<span class="author">
						<?php echo HTML::anchor($post->user->url, User::getAvatar($post->user)); ?>
						<?php echo HTML::anchor($post->user->url, $post->user->nick, array('title' => $post->user->nick)); ?>
					</span>
					<span class="date-created"> <?php echo Date::date_format($post->created); ?> </span>
				</div>
			<?php endif;?>
	
			<?php if ($post->taxonomy): ?> <div class="taxonomy col-md-5 pull-right"> <?php echo $post->taxonomy; ?> 
                        <?php if ($post->tagcloud): ?>
                            <ul class="tagcloud pull-right" style="clear:both;"><?php echo __(':tag', array(':tag' => $post->tagcloud) ); ?></ul>
                        <?php endif;?>
                        </div> <?php endif;?>

                        
		</div>
	<?php endif;?>

	<div class="content"> <?php echo $post->body; ?> </div>


	<?php if($widget_p_bot): ?>
		<div id="post-bottom" class="clear-block"> <?php echo $widget_p_bot; ?> </div>
                <?php unset($widget_p_bot); ?>
	<?php endif; ?>
</div>
