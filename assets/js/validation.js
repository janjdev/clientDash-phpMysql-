 document.addEventListener("DOMContentLoaded", function(){
 var fields =  document.querySelectorAll('input.form-control'),
     re = /.+\@.+\..+/,
     msg = document.createElement('small'),
    empty = msg,
    invalid = msg,
    emailValid = false,
    inputValid = false;

   msg.classList = 'form-text-error';
   empty ='This field is required.';
   invalid ='This email doesn\'t look right.';
   $(fields).removeClass('form-control-success');

 function validatefields(x){
       Array.prototype.forEach.call(x, function(field) {
           if(field.dataset.type === "expression"){
             if(field.value != '' || /\S/.test(field.value) != false){
               if ((re.test(field.value))) {
                  emailValid = true;
                  $(field).parent().children('small.form-text-error').remove();
                  $(field).removeClass('form-control-danger');
                  $(field).removeClass('form-control-warning');
                  $(field).addClass('form-control-success');
                }else{
                  emailValid = false;
                  $(field).removeClass('form-control-success');
                  $(field).removeClass('form-control-warning');
                  if(! $(field).hasClass('form-control-danger')){
                  $(field).addClass('form-control-danger');
                  }
                    msg.innerText = invalid
                    $(field).parent().append(msg);
                }
            }else{
                  emailValid = false;
                  msg.innerText = empty;
                  $(field).parent().append(msg);
                }
          }
          if(field.dataset.type === "data"){
            field.value = field.value.replace(/^\s+/, '').replace(/\s+$/, '');
            if(field.value != '' || /\S/.test(field.value) != false){
              inputValid = true;
              $(field).parent().children('small.form-text-error').remove();
              $(field).removeClass('form-control-danger');
              $(field).removeClass('form-control-warning');
              $(field).addClass('form-control-success');
            }
            else{
              inputValid = false;
              $(field).removeClass('form-control-success');
              $(field).removeClass('form-control-danger');
              if(!$(field).hasClass('form-control-warning')){
                $(field).addClass('form-control-warning');
              }
                msg.innerText = empty;
                $(field).parent().append(msg);
          }
      }
      //console.log(emailValid, inputValid);
    });
  }

function keyValidate(){
          Array.prototype.forEach.call(fields, function(field) {
            field.addEventListener('keyup', function(){
              validatefields(fields);
              if(emailValid != false && inputValid != false){
          $('.btn-block').prop('disabled', false);
        }
        else {
          $('.btn-block').prop('disabled', true);
        }
        if(emailValid){
          $('body.pass-req .btn-block').prop('disabled', false);
        }
        else {
            $('body.pass-req .btn-block').prop('disabled', true);
        }
      });
    });
  }
  function blurValidate() {
    Array.prototype.forEach.call(fields, function(field) {
      field.addEventListener('blur', function () {
        validatefields(fields);
        if(emailValid != false && inputValid != false){
          $('.btn-block').prop('disabled', false);
          }
          else {
            $('.btn-block').prop('disabled', true);
          }
          if(emailValid){
            $('body.pass-req .btn-block').prop('disabled', false);
          }else {
              $('body.pass-req .btn-block').prop('disabled', true);
          }
      });
    });
  }
keyValidate(fields);
blurValidate(fields);
});
