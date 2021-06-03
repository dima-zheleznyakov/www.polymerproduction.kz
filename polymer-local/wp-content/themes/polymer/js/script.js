 $(document).ready(function($) {

							    $("#contactForm input").jqBootstrapValidation({
							        preventSubmit: true,
							        submitError: function($form, event, errors) {
							            // additional error messages or events
							        },
							        submitSuccess: function($form, event) {
							            event.preventDefault(); // prevent default submit behaviour
							            // get values from FORM
					                     	 
								            var name = jQuery("input[name='name']").val();
								            var nameCompany = jQuery("input[name='nameCompany']").val();
								            var email = jQuery("input[name='email']").val();
								          	var message = jQuery("textarea[name='message']").val();
							            
							            // Check for white space in name for Success/Fail message
							           
							            $.ajax({
							                url: "/wp-content/themes/polymer/inc/mail/contact_me.php",
							                type: "POST",
							                data: {
							                    name: name,
							                    email: email,
							                    nameCompany: nameCompany,
							                    message: message
							                },
							                cache: false,
							                beforeSend: function(){
							                    $('#submit').text('Отправляю...');
							                },
							            
							                success: function() {
							                    
							                     // Success message
							                    $('#success').html("<div class='alert alert-success'>");
							                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
							                        .append("</button>");
							                    $('#success > .alert-success')
							                        .append("<strong>Ваше сообщение отправлено. </strong>");
							                    $('#success > .alert-success')
							                        .append('</div>');
							                   
							                    $('#submit').text('Отправлено!');
							                    //clear all fields
							                    $('#contactForm').trigger("reset");
							                    //yaCounter54111967.reachGoal('ORDER');
							                    //ym(54111967, 'reachGoal', 'ORDER'); return true;
							                },
							                error: function() {
							                    // Fail message
							                    $('#success').html("<div class='alert alert-danger'>");
							                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
							                        .append("</button>");
							                     $('#success > .alert-danger').append($("<strong>").text("Извините " + name + ", почтовый сервер не отвечает. Пожалуйста, попробуйте позднее!"));
							                    $('#success > .alert-danger').append('</div>');
							                    $('#submit').text('Отправлено!');
							                    //clear all fields
							                    $('#contactForm').trigger("reset");
							                },
							            });
							        },
							        filter: function() {
							            return $(this).is(":visible");
							        },
							    });
							    /*When clicking on Full hide fail/success boxes */
							$('#name').focus(function() {
							    $('#success').html('');
							});
							});




$('.owl-partners').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


$(function(){
	$(".modal-inline").fancybox({
		margin: 0,
		padding: 20,
		maxWidth: 400,
		autoScale: true,
		transitionIn: 'none',
		transitionOut: 'none',
		type: 'inline',
		helpers: {
			overlay: {
				locked: false
			}
		}
	});
});