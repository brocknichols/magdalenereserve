<?php if (isset($items)): ?>
	<ul class="blogs-list">
		<?php foreach($items as $item) :  ?>
			<div class="widget-title" id='widget-title-'<?php echo $item['id'] ?>>
				<p>
					<?php echo HTML::anchor($item['url'], $item['title']) ?><br>
                                        <em><span style="font-size:12px;"><?php echo HTML::anchor($item['user_url'], Text::plain($item['user'])); ?>: <?php echo Date::date_time($item['date']) ?></span></em>
				</p>
			</div>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>