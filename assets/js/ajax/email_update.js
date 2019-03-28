document.addEventListener("DOMContentLoaded", function(){

var fields, mailValid,   spinner;
$('.emu').click(function() {
var re = /.+\@.+\..+/,
  msg = document.createElement('small'),
  emptyField = 'An email is required!',
  badValue = 'Please check the email is a valid (you@.somewhere) address.',
  match = 'Emails must match.';
  msg.classList = 'form-text error';
  fields =  document.querySelectorAll('input.form-control.email');
  mailValid = true;
  spinner = $('#nb-global-spinner');
  $('.exit_email_update').click(function() { $(fields).val(''); $('.emu').addClass('hide'); });
  function validatefields(x){
   Array.prototype.forEach.call(x, function(field) {
     if (field.value != '' || /\S/.test(field.value) != false) {
       if((re.test(field.value))){
         if(fields[0].value == fields[1].value){
          mailValid = true;
          $('small.form-text.error').remove();
           $(field).removeClass('form-control-danger');
           $(field).removeClass('form-control-warning');
           $(field).addClass('form-control-success');
           $('.btn-block').prop('disabled', false);
        }else{
             mailValid = false;
             if(!$(field).hasClass('form-control-warning')){
               $(field).addClass('form-control-warning');
             }
             $('small.form-text.error').remove();
            $('.btn-block').prop('disabled', true);
             msg.innerText = match;
             $(field).parent().append(msg);
           }
      }else {
          mailValid = false;
          $('small.form-text.error').remove();
          $('.btn-block').prop('disabled', true);
          $(field).addClass('form-control-warning');
          msg.innerText = badValue;
          $(field).parent().append(msg);
          }
      }else {
        mailValid = false;
        $('small.form-text.error').remove();
        $('.btn-block').prop('disabled', true);
        $(field).addClass('form-control-danger');
        msg.innerText = emptyField;
        $(field).parent().append(msg);
          }
    });
  }

  function keyValidate(){
    Array.prototype.forEach.call(fields, function(field) {
      field.addEventListener('keyup', function(){
        validatefields(fields);
      });
    });
  }
  function blurValidate() {
    Array.prototype.forEach.call(fields, function(field) {
      field.addEventListener('blur', function () {
        validatefields(fields);
      });
    });
  }
  keyValidate(fields);
  blurValidate(fields);
});

  //Send form to update
  $('form#emailUpdate').on("submit", function(e){
    e.preventDefault();
    spinner.removeClass('hide');
    var remail = $("input[name='reMail']").val(),
        action = $(this).attr("action"),
        formData = {};
        formData.email = remail;
    if(mailValid != false ) {
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
          swal({title: "Your Changes have been made.", text: "Thanks!", type: "success"}, function(){
            $(fields).val(''); $('.emu').addClass('hide');
          });
        }else{
          // Add error class to form
          swal({title: "Something went wrong...", text: "We're working on it!", type: "error"}, function () {
              //$("#passForm").load(location.href+" #passForm>*","");
          });

        }
      });
    }
  });
});
