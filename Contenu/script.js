$(document).ready(function(){


		$('#registration-form').validate({
	    rules: {
	       name: {
	        required: true,
	       required: true
	      },
		  
		 username: {
	        minlength: 6,
	        required: true
	      },
		  
		  password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
		  
	      email: {
	        required: true,
	        email: true
	      },
		  
	     
		   address: {
	      	minlength: 10,
	        required: true
	      },
		  
		  agree: "required"
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('successs').addClass('errorr');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valider')
				.closest('.control-group').removeClass('errorr').addClass('successs');
			}
	  });

}); // end document.ready