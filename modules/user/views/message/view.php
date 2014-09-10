<div class="row">
	<div class="col-md-12">
            <p>From: <?php echo $message->user->name; ?></p>
                
            <p>Subject: <?php echo $message->subject; ?></p>
            
            <?php echo $message->body; ?>
	</div>
</div>
