<style>
    .download_link{
        position:relative;
        margin-top:40px;
        min-height: 130px;
    }
    .attachment_top{
        display: inline-block;
        border-top: solid 1px #B6B6B6;
        border-left: solid 1px #B6B6B6;
        border-right: solid 1px #B6B6B6;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        padding: 10px;
        background: #F0F0F0;
    }
    .attachment_body{
        border: solid 1px #B6B6B6;
        display: inline-block;
        clear: both;
        padding: 20px;
        z-index: 0;
        position: absolute;
        top: 47px;
        left: 0px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
        box-shadow: 0 0 20px #DADADA, inset 0 0 0 #E6E6E6;
    }
    .file_download{
        margin-left:7px;
    }
    </style>
        <div class="post-page-wrapper col-md-12">
	<?php if (isset($page)): ?>
		<div class="post-page">
			<?php echo $page; ?>
		</div>
    <div class="download_link">
        <div class="attachment_top">Attachment</div>
        <div class="attachment_body"><i class="fa fa-file-text-o"></i><span class="file_download"><?php echo HTML::anchor($attachment['url'], $attachment['rawimage']); ?></span></div>
    </div>
	<?php endif;?>
</div>

<?php if (isset($comments)): ?>
	<div class="list-comments">
		<div class="post-comments">
			<?php echo $comments; ?>
		</div>
	</div>
<?php endif;?>

<?php if(isset($provider_buttons) or isset($comment_form)): ?>
<div class="post-comment-form-wrapper">
	<?php if (isset($provider_buttons) AND ! isset($comment_form)): ?>
		<div id="post-auth-request">
			<?php
			_e('Only authorized users can post comments. :register or login using one of these services:',
				array(':register' => HTML::anchor(Route::get('user')->uri(array('action' => 'register')), __('Please register')))
			);
			?>
		</div>
		<div id="post-provider-buttons">
			<?php echo $provider_buttons; ?>
		</div>
	<?php endif;?>
	
	<?php if (isset($comment_form)): ?>
		<div class="post-comment-form">
			<?php echo $comment_form; ?>
		</div>
	<?php endif;?>
</div>
<?php endif;?>
