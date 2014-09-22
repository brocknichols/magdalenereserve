<style>
    .optionrow{
        clear:both;
        margin:10px 0;
    }
    .removerow{
        text-align:right;
        color:#F00;
        cursor:pointer;
        text-shadow: 0px 1px 2px #222;
    }
    .add_option{
        display: inline-block;
        background: #5E91FF;
        color: #FFF;
        padding: 5px;
        border-radius: 5px;
        cursor:pointer;
        margin:10px 0;
    }
    .add_option:hover{
        background: #354A77; 
    }
    .optionrow input[type=text]{
        width:50%;
    }
    .titlerow{
        margin-bottom:35px;
    }
    .titlerow input[type=text]{
        width:100%;
    }
    
</style>
<fieldset>
	<form action="" id="pollform" name="pollform" method="POST">
            <div class="row titlerow">
                <div class="one columns">Title</div>
                <div class="ten columns"><input type="text" name="title"></div>
            </div>
            <div class="row">
                <div class="two columns">Poll Options:</div>
            </div>
            <div class="row optionrow">
                <div class="one columns"></div>
                <div class="ten columns"><input type="text" name="option[]" placeholder="option name"></div>
            </div>
            <div class="row optionrow">
                <div class="one columns"></div>
                <div class="ten columns"><input type="text" name="option[]" placeholder="option name"></div>
            </div>
            <div class="row addoptions"><div class="add_option" rel="tooltip" data-original-title="Remove Option" data-placement="right"><i class="fa fa-plus"></i> Add poll option</div></div>
            <div class="row"><input type="submit" name="submit" value="Submit"></div>
	</form>
    
</fieldset>
<script type="text/javascript">
    jQuery('.add_option').on('click', function(){
        jQuery('.optionrow').last().after('<div class="row optionrow"><div class="one columns"><div class="removerow">'      
        +'<i class="fa fa-minus-circle"></i></div></div><div class="ten columns"><input type="text" name="option[]" placeholder="option name"></div></div>');
    })
    jQuery(document.body).on('click', '.removerow', function(){
        jQuery(this).parent().parent().remove();
    })
    </script>