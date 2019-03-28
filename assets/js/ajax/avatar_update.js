document.addEventListener("DOMContentLoaded", function(){
  var str, filename, name, file;
  function error_report() {
    $("#profile_summary").load(location.href+" #profile_summary>*","");
    $("#update_avatar").val(''); $('.file-types small').text('png, jpg, gif, svg'); $('#avatar_file i').text('add_a_photo'); $('.avp').addClass('hide');

  }
	$('#avatar_file').click(function () {
		if($('#update_avatar').prop('files')[0]){
      $('form#avatarUpdate').submit();
    }else{
			$('#update_avatar').trigger('click');
		}
  });
	$('.exit_avatar_upload').click(function() { $("#update_avatar").val(""); $('.file-types small').text('png, jpg, gif, svg'); $('#avatar_file i').text('add_a_photo'); $('.avp').addClass('hide');});
	$("#update_avatar").change(function() {
		$('#avatar_file i').text("cloud_upload");
        file_data = $('#update_avatar').prop('files')[0];
				str = $("#update_avatar").val();
				filename = str.split('\\').pop().split('/').pop(); //with extension
				name= (str.split('\\').pop().split('/').pop().split('.'))[0]; //without extension
		$('.file-types small').text(filename);
	});

  //Send form to update
  $('form#avatarUpdate').on("submit", function(e){
  e.preventDefault();
      action = $(this).attr("action"),
      form_data = new FormData();
      formData = {};
      formData.name = name;
      formData.filename = filename;
      formData.file = form_data.append('file', file_data);
      console.log(formData);
  if($('#update_avatar').val() != "") {
    $.ajax({
      cache: false,
      contentType: false,
      processData: false,
      type: "POST",
      url: action,
      data: form_data,
      error: function(response){
      if(response.status == 404) {
          swal("Service is not available at the moment.", ' Please check your internet connection or try again later.', "error", function () {
              $("#profile_summary").load(location.href+" #profile_summary>*","");});
              $("#update_avatar").val(''); $('.file-types small').text('png, jpg, gif, svg'); $('#avatar_file i').text('add_a_photo');
        }
      },
  }).done(function(response){
      if(response == 'success') {
        //reload the section
          $("#profile_summary").load(location.href+" #profile_summary>*","");
            $("#update_avatar").val(''); $('.file-types small').text('png, jpg, gif, svg'); $('#avatar_file i').text('add_a_photo'); $('.avp').addClass('hide');
      }else
          if(response == 'upload'){
          //alert of problem and reload the section
          swal("Unable to upload your image...", "Please, try again.", "error");
          error_report();
          }else if(response == "image"){
          swal("Not an image file...", "Please, select an image.", "error");
          error_report();
        }else if(response == 'file'){
          swal("No File!", "You must select an image file.", 'error');
          error_report();
        }else{
          //alert of problem and reload the section
          swal("Something went wrong...", "We're working on it!", "error");
          error_report();
        }
      });
    }
  });
});
