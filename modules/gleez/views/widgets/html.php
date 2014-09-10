<style>
    .openclose{
        width:35px;
        height:20px;
        background:url('<?php echo URL::site();?>media/images/slide-up-down.png');
        position:absolute;
        top:20px;
        right:0;
        cursor: pointer;
    }
    .openclose.openwidget{
        background-position-y:20px;
    }
    .openclose.closewidget{
        background-position-y:0px;
    }
    .panel{
        position:relative;
    }
</style>

<div id="widget-<?php echo $widget->module; ?>-<?php echo Text::plain($widget->name); ?> <?php echo (isset($id)) ? 'widget-'.$id : '' ?>" data-val="<?php echo Text::plain($widget->name); ?>" class="panel panel-default widget widget-<?php echo Text::plain($widget->name); ?> <?php echo ($widget->menu) ? 'widget-menu' : ''; ?> <?php echo (isset($zebra)) ? 'widget-'.$zebra : '' ?>">
  	<?php if ($widget->show_title): ?>
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa <?php echo Text::plain($widget->icon); ?>"></i> <?php echo Text::plain($title); ?></h3>
                        <div class="<?php if(isset($adminsite) && $adminsite==true){ } else {echo ($opencookie==1) ? 'openclose closewidget' : 'openclose openwidget'  ;} ?>"></div>
		</div>
  	<?php endif; ?>
	<div class="panel-body" style="display:<?php echo ($opencookie==1 ||  (isset($adminsite) && $adminsite==true)) ? '' : 'none'; ?>;">
		<?php echo $content; ?>
	</div>
</div>
