<?php if( isset($comments) AND !empty($comments)): ?>
	<ul class="comments-list">
		<?php foreach($comments as $i => $comment) : ?>
			<li class="widget-title">
                            <span style="font-size:12px;width: 100%; float: left; margin-bottom: -5px;"><i class="fa fa-share"></i> 
                                <?php echo HTML::anchor(URL::base(TRUE, TRUE)."/blog/view/".$comment['post_id'], $comment['blog_title']); ?></span>
                            <span style="margin-left:20px;"><?php echo HTML::anchor(URL::base(TRUE, TRUE)."/comment/view/".$comment['id'], $comment['title']) ?></span>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>