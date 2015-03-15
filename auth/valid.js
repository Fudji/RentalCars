(function($,W,D)
         {
            var JQUERY4U = {};
         
            JQUERY4U.UTIL =
            {
                setupFormValidation: function()
                {
                    //Additional Methods			
         		$.validator.addMethod("lettersonly",function(a,b){return this.optional(b)||/^[a-z ]+$/i.test(a)},"Please enter valid name");
         
         		$.validator.addMethod("phoneNumber", function(uid, element) {
         			return (this.optional(element) || uid.match(/^([0-9]*)$/));
         		},"Please enter valid phone number");
         		
         
         $.validator.addMethod("pwdmatch", function(repwd, element) {
         			var pwd= $('#password').val();
         			return (this.optional(element) || repwd==pwd);
         		},"Password and Confirm password does not match");
         		
         		//form validation rules
                    $("#register_form").validate({
                        rules: {
                            first_name: {
                                required: true,
         			  lettersonly: true
                            },
         				email: {
                                required: true,
         			  email: true
                            },
         	phone:{
         			required: true,
         			phoneNumber: true,
         			rangelength: [10, 11]
         	},
         	password:{
         			required: true,
         			rangelength: [8, 30]
         	},
         	password_confirm:{
         			required: true,
         			 pwdmatch: true
         	}
                        },
         			
         			messages: {
         				first_name: {
                                required: "First name required"
                            },
         	email:{
         			required: "Email required"
         	},
         	phone:{
         			required: "Phone number required"
         	},
         				password: {
                                required: "Password required"
                            },
         	password_confirm:{
         			required: "Confirm password required"
         	}
         			},
                        
                        submitHandler: function(form) {
                            form.submit();
                        }
                    });
                }
            }
         
            //when the dom has loaded setup form validation rules
            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });
         
         })(jQuery, window, document);