
<section class="tabs">

    <ul class="tab-nav">
        <li class='<?php echo $newold=="new" ? 'active' : ''; ?>'><a href="<?php echo URL::site('/poll') ?>">New Polls</a></li>
        <li class='<?php echo $newold=="existing" ? 'active' : ''; ?>'> <a href="<?php echo URL::site('/poll/existing') ?>">Answered Polls</a></li>
    </ul>

    <div class="tab-content active">
       
<?php
foreach($polls as $poll){
    echo '<div class="pollcontainer '.$newold.'" id="poll_'.$poll->id.'"><div class="polltitle">'.$poll->title.'</div>';
    if($poll->polluser->where('user_id','=',$userid)->find()->loaded()){
        $poll_ser=unserialize($poll->results);
        $total_count=0;
        foreach($poll_ser as $questions=>$results){
            $total_count+=$results;
             echo "<div class='poll_line'><div class='poll_question'>".$questions."</div><div class='poll_results'><div class='poll_update'>".$results."</div></div></div>";
        }
        
?>
<div class="total_count_div" data-count="<?php echo $total_count; ?>"></div>
<script type="text/javascript">
    var color_array=["#C0C0C0","#B0B0B0","#A0A0A0","#909090","#808080","#707070","#606060","#505050","#404040","#303030","#202020","#101010","#000000"];
    var arr_count=0;
    var poll_container;
    jQuery('.poll_update').each(function(i, obj) {
        if(poll_container!=jQuery(this).closest('.pollcontainer').attr('id')){
            poll_container=jQuery(this).closest('.pollcontainer').attr('id');
            arr_count=0;
        } else {
            arr_count++;
        }

        var total=jQuery(this).closest('.pollcontainer').find('.total_count_div').attr('data-count');
        var line_total=jQuery(this).html();
        if(line_total==0)jQuery(this).html('');
        jQuery(this).css({'background-color':color_array[arr_count]});
        var percent=line_total/total*100;
        var width=jQuery('.pollcontainer').width();
        jQuery(this).animate({width:percent+"%"},2000);
        
        
});
</script>
<?php } else { ?>
<form name="pollform" id="pollform" method="post">
<div class='pollerror'></div>
<?php 
   $poll_ser=unserialize($poll->results);
   
   foreach($poll_ser as $questions=>$results){
       echo "<div class='poll_line'><div class='poll_question'><input type='radio' name='poll' value='".$questions."'>".$questions."</div></div>";
   }
echo "<input type='hidden' name='pollid' value='".$poll->id."'>";

?>
<input type="submit" name="submit" id="pollsubmit" value="Submit">
</form>

<script type="text/javascript">
    jQuery('#pollform').submit(function(event){
        if (!jQuery("input[name='poll']:checked").val()) {
            jQuery('.pollerror').html('Please select at least one option');
            jQuery('.pollerror').css('background-color','#DF4949');
            event.preventDefault();
         }
    })
    jQuery("input[name='poll']").on('click', function(){
        jQuery('.pollerror').html('');
    })
    </script>
<?php } 
    echo "</div>";
   }?>
    </div>
</section>