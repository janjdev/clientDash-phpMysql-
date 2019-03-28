document.addEventListener("DOMContentLoaded", function(){
  $('#PassUpdate').click(function() {

  var  fields =  document.querySelectorAll('input.form-control.passup'),
    re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}$/,
    msg = document.createElement('small'),
    emptyField = 'Password is required!',
    badValue = 'Password must be 8 characters exactly, and must include an upper case letter, lower case letter and number.',
    match = 'Passwords must match.',
    passValid = true,
    spinner = $('#nb-global-spinner');
    msg.classList = 'form-text error';
    $('.exit_pass_update').click(function() { $(fields).val(''); $('.passUpdate').addClass('hide'); });
    $(fields).keyup(function() {
          if ($(this).val() != '' || /\S/.test($(this).val()) != false) {
            if((re.test($(this).val()))){
              if(fields[0].value == fields[1].value){
                passValid = true;

                $(this).removeClass('form-control-danger');
                $(this).removeClass('form-control-warning');
                $(this).addClass('form-control-success');
                $('.btn-block').prop('disabled', false);
             }else{
                  passValid = false;
                  if(!$(this).hasClass('form-control-warning')){
                    $(this).addClass('form-control-warning');
                  }
                
                 $('.btn-block').prop('disabled', true);
                  msg.innerText = match;
                  $(this).parent().append(msg);
                }
           }else {
               passValid = false;

               $('.btn-block').prop('disabled', true);
               $(this).addClass('form-control-warning');
               msg.innerText = badValue;
               $(this).parent().append(msg);
               }
           }else {
             passValid = false;

             $('.btn-block').prop('disabled', true);
             $(this).addClass('form-control-danger');
             msg.innerText = emptyField;
             $(this).parent().append(msg);
               }
         });
      });
  });
