// Add your functions
$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
});

$(window).scroll(function(){
	var h_scroll = $(this).scrollTop();
	if (h_scroll > 30) {
		$('.mainheader').addClass('mainheader__fixed')
	} else {
		$('.mainheader').removeClass('mainheader__fixed')
	}
})

AOS.init();

// if ($(document).width() > 960) {
// 	$(window).scroll(function(){
// 		var h_scroll = $(this).scrollTop();
// 		if (h_scroll > 30) {
// 			$('.mobilemenu').addClass('mainheader__fixed')
// 		} else {
// 			$('.mainheader').removeClass('mainheader__fixed')
// 		}
// 	})
// }