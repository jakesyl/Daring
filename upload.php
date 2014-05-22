 <!DOCTYPE html>
<link rel="stylesheet" href="/css/form.css" type="text/css" media="screen"/>
<html lang="en" id="Dare">
<?php &lt;form&gt;
	&lt;input name="status" id="status" value="Type something here" type="text"/&gt;
	&lt;input value="Submit" type="submit"/&gt;
&lt;/form&gt;
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">//<!--host locally later-->
    $(document).ready(function() {
    $('input[type="text"]').addClass("idleField");
	$('input[type="text"]').focus(function() {
		$(this).removeClass("idleField").addClass("focusField");
        if (this.value == this.defaultValue){
        	this.value = '';
    	}
        if(this.value != this.defaultValue){
	    	this.select();
        }
    });
    $('input[type="text"]').blur(function() {
    	$(this).removeClass("focusField").addClass("idleField");
        if ($.trim(this.value == '')){
        	this.value = (this.defaultValue ? this.defaultValue : '');
    	}
    });
});
    </script>
    
</html>