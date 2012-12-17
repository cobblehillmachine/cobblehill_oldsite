
function check_fields(){
	var name = $('#contact_name').val();
	var email = $('#email').val();
	var comment = $('#msgarea').val();
	if ((name == 'Full Name' || name == '' || name == "Full Name is Required") && (email == 'Email' || email == '' || email == "Email is Required") && (comment == 'Comments' || comment == '' || comment == "Comment is Required")) {
		$('#contact_name').attr('value', 'Full Name is Required');
		$('#contact_name').css({'color':'#1E5284'});
		$('#email').attr('value', 'Email is Required');
		$('#email').css({'color':'#1E5284'});
		$('#msgarea').attr('value', 'Comment is Required');
		$('#msgarea').css({'color':'#1E5284'});
	}
	else if (name == 'Full Name' || name == '' || name == "Full Name is Required") {
		$('#contact_name').attr('value', 'Full Name is Required');
		$('#contact_name').css({'color':'#1E5284'});
	} else if (email == 'Email' || email == '' || email == "Email is Required") {
		$('#email').attr('value', 'Email is Required');
		$('#email').css({'color':'#1E5284'});
	} else if (comment == 'Comments' || comment == '' || comment == "Comment is Required") {
		$('#msgarea').attr('value', 'Comment is Required');
		$('#msgarea').css({'color':'#1E5284'});
	} else {
		submit_me();
	}
}


function submit_me(){

	var thename = jQuery("input#name").val();
	jQuery.post(the_ajax_script.ajaxurl, jQuery("#ajaxForm").serialize(),function(response_from_the_action_function){
	jQuery("#msgarea").val(response_from_the_action_function).css({"color":"1E5183"});
	}
	);
	}
	jQuery(document).ready(function() {
	jQuery('#ajaxForm input[type=text]').click(function() {
		if(this.value==this.defaultValue)
		jQuery(this).val("");					
	});
	jQuery('#ajaxForm textarea').click(function() {
		if(this.value==this.defaultValue)										
		jQuery(this).val("").css({"color":"#000"});					
	});
});



