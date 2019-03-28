document.addEventListener("DOMContentLoaded", function(){
var spinner = document.querySelector('.spinner');
	$('td.name').click(function () {
var name = $(this).attr('data-name'),
		url = $(this).attr('data-url');
		desc = $(this).attr('data-desc');
		$(spinner).removeClass('hide');
		$('.mirror_site').removeClass('hide');
		$('.mirror_site .title').text(name);
		$('.mirror_site iframe').attr('src', url);
		$('.mirror_site .proj_desc').text(desc);
			setTimeout(function () {
			$('.mirrio_site').css('opacity', 1);
			spinner.addClass('hide');
			}, 3500);
	});

	$('.site-close').click(function () {
		$('.mirrio_site').css('opacity', 0);
		$('.mirror_site').addClass('hide');
	})
	$('.updates-avp, #updates-avp').on('click', function () {
		$('.avp').removeClass('hide');
	});
	$('.updates-psw').click(function () {
		$('.psw').removeClass('hide');
	});
	$('.updates-emu').click(function () {
		$('.emu').removeClass('hide');
	});



});
