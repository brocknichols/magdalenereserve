<style>
    .optionrow{
        width:100%;
        clear:both;
        margin:10px;
    }
    .removerow{
        float:left;
        margin-right:10px;
    }
</style>
<fieldset>
	<form action="" id="pollform" name="pollform" method="POST">
            <div class="row">
                <label>Title</label>
            <input type="text" name="title">
            </div>
            <div class="row optionrow"><div class="removerow">remove</div><input type="text" name="option[]" placeholder="option name"></div>
            <div class="row optionrow"><div class="removerow">remove</div><input type="text" name="option[]" placeholder="option name"></div>
            <div class="row addoptions">add option</div>
            <div class="row"><input type="submit" name="submit" value="Submit"></div>
	</form>
</fieldset>
<script type="text/javascript">
    $('.addoptions').on('click', function(){
        $('.optionrow').last().after('<div class="row optionrow"><div class="removerow">remove</div><input type="text" name="option[]" placeholder="option name"></div>');
    })
    $(document.body).on('click', '.removerow', function(){
        $(this).parent().remove();
    })
    </script>