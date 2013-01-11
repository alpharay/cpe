$(function() {
	// load the modal window
	$('a.modal').click(function(){
		// scroll to top
		$('html, body').animate({scrollTop:0}, 'fast');
		// before showing the modal window, reset the form incase of previous use.
		$('.success, .error').hide();
		$('form#contactForm').show();
		
		// Reset all the default values in the form fields
		$('#image').val('Your Image');
		$('#album').val('Your Album Name');
		$('#pic').val("Your Picture's Name");
		$('#description').val('Enter your picture description ...');

		//show the mask and contact divs
		$('#mask').show().fadeTo('', 0.7);
		$('div#contact').fadeIn();

		// stop the modal link from doing its default action
		return false;
	});

	// close the modal window is close div or mask div are clicked.
	$('div#close, div#mask').click(function() {
		$('div#contact, div#mask').stop().fadeOut('slow');

	});

	$('#contactForm input').focus(function() {
		$(this).val(' ');
	});
	
	$('#contactForm textarea').focus(function() {
        $(this).val('');
    });

	// when the Submit button is clicked...
	$('input#submit').click(function() {
	$('.error').hide().remove();
		//Inputed Strings
		var image = $('#image').val(),
			album = $('#album').val(),
			picture = $('#pic').val(),
			comment = $('#comment').val();
		
	
		//Error Count
		var error_count;
		
		//Regex Strings
		var username_regex = /^[a-z0-9_-]{3,16}$/,
			email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		
			//Test Picture Name
			if(!username_regex.test(picture)) {
				$('#contact_header').after('<p class=error>Invalid picture name entered!</p>');
				error_count += 1;
			}
			
			//Test Album Name
			if(!username_regex.test(album)) {
				$('#contact_header').after('<p class=error>Invalid album name entered!</p>');
				error_count += 1;
			}
			
			//Blank Description?
			if(description == '') {
				$('#contact_header').after('<p class=error>No Description was entered!</p>');
				error_count += 1;
			}
			
			//No Errors?
			if(error_count === 0) {
				$.ajax({
					type: "post",
					url: "send.php",
					data: "image=" + image + "&pic=" + pic + "&album=" + album + "&description=" + description,
					error: function() {
						$('.error').hide();
						$('#sendError').slideDown('slow');
					},
					success: function () {
						$('.error').hide();
						$('.success').slideDown('slow');
						$('form#contactForm').fadeOut('slow');
					}				
				});	
			}
			
			else {
                $('.error').show();
            }
			
		return false;
	});
	
});