$(document).ready(function(){

	/* begin validation*/
	$("#contact-form").validate({

		// setup handling of form errors
		debug: false,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		// rules define what is good/bad input
		// each rule starts with the form input element's NAME attribute
		rules: {
			name: {
				required: true,
				maxlength: 20
			},
			email: {
				email: true,
				required: true,
				maxlength: 36
			},
			message: {
				required: true,
				maxlength: 2000
			},
			subject: {
				required: false,
				maxlength: 50
			}
		},

		// error messages to display to the end user
		messages: {
			name: {
				required: "Please enter your name.",
				maxlength: "Name is too long."
			},
			email: {
				email: "Please enter a valid email address.",
				required: "Please enter a valid email address.",
				maxlength: "Email is too long."
			},
			message: {
				required: "Please enter a message.",
				maxlength: "2000 characters max."
			},
			subject: {
				maxlength: "Message subject is too long."
			}
		},

		submitHandler: function(form) {
			$("#contact-form").ajaxSubmit({
				type: "POST",
				url: $("#contact-form").attr("action"),

				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#output-area").css("display", "");

					// write the server's reply to the output area
					$("#output-area").html(ajaxOutput);

					// reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#contact-form")[0].reset();
					}
				}
			})
		}

	});/* end validate function */

});/*end document.ready()*/