document.addEventListener("DOMContentLoaded", function(){ 
  $('#OpenImgUpload').click(function(){ $('.avp').removeClass('hide'); });
  $('#PassUpdate').click(function() { $('.psw').removeClass('hide'); });
  var spinner = $('#nb-global-spinner');
  $('form.user_data_form').on("submit", function(e){
			e.preventDefault();
			// Get value of input
			var inputs = document.getElementsByClassName('form-control'),
          action = $(this).attr("action"),
          email = $("input[name='email']").val(),
          fullname = $("input[name='fullname']").val(),
          title = $("input[name='title']").val(),
          phone = $("input[name='phone']").val(),
          personal_info = $("textarea[name='personal_info']").val(),
          notNull = 0,
          infoValid = true,
          formData = {};
			//var formData = $('form').serialize();

        Array.prototype.forEach.call(inputs, function(input) {
        input.value = input.value.replace(/^\s+/, '').replace(/\s+$/, '');
        if(input.value != '' || /\S/.test(input.value) != false){
              notNull+=1;
            }
      });
      if(notNull === 0){
        swal("No Changes Made", "Please, fill out the form to update your profile.", "error");
        infoValid = false;
      }else{//strip whitespace from values
        email = email.replace(/^\s+/, '').replace(/\s+$/, '');
        fullname = fullname.replace(/^\s+/, '').replace(/\s+$/, '');
        title = title.replace(/^\s+/, '').replace(/\s+$/, '');
        phone = phone.replace(/^\s+/, '').replace(/\s+$/, '');
        personal_info = personal_info.replace(/^\s+/, '').replace(/\s+$/, '');
      }
  // Check the Data
        //check email is not empty
        if(email != "" || /\S/.test(email) != false){
          // Test if the value of input is actually an email
    			var re = /.+\@.+\..+/;
                if(re.test(email)) {
                  formData.email = email;
                }
          else{
            swal("Check Email", "Please check the email is a valid (you@.somewhere) address", "error");
            infoValid = false;
          }
        }
      //Check the name
      if(fullname != "" || /\S/.test(fullname) != false){
        formData.fullname = fullname;
      }
      //Check the title
      if(title != "" || /\S/.test(title) != false){
          formData.title = title;
      }
      //check the phone number
      if(phone != "" || /\S/.test(phone) != false){
        //Test is the value is a phone number
        var phone_re = /^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/;
        if(phone_re.test(phone)){
              formData.phone = phone;
        }else{
          swal("Check Phone Number", "Please, check that the phone number is a valid 7, 10 or 11 digit number (ex: 1-123-456-7890)", "error");
          infoValid = false;
        }
      }
  //Check personal information
      if(personal_info != "" || /\S/.test(personal_info) != false){
          formData.personal_info =personal_info;
      }
			if(infoValid != false ) {
				$.ajax({
					type: "POST",
					url: action,
					data: formData,
          beforeSend: function( xhr ) { spinner.removeClass('hide');},
					error: function(response){
			  		spinner.addClass("hide");
					if(response.status == 404) {
							swal("Service is not available at the moment.", ' Please check your internet connection or try again later.', "error")
						}
					},
			}).done(function(response){
          spinner.addClass("hide");
					if(response == 'success') {
		 			// Add success class to form
			 			swal("Your Changes have been made.", "Thanks!", "success");
              $("#content").load(location.href+" #content>*","");
					}else{
						// Add error class to form
						swal("Something went wrong...", "We're working on it!", "error");
					}
			 	});
			}
    });
});
