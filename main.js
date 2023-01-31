// form submission

$(document).ready(function () {

	$('form').submit(function (event) {

		event.preventDefault();

		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function (result) {
				alert('Sent!')
			}
		});
	});
});

// swiper

const swiper = new Swiper('.swiper', {
	slidesPerView: 1.5,
	// spaceBetween: 30,
	slidesPerGroup: 1,
	loop: true,
	// loopFillGroupWithBlank: true,


	// Optional parameters

	// direction: 'vertical',
	// loop: true,

	// If we need pagination
	// pagination: {
	// 	el: '.swiper-pagination',
	// },

	// Navigation arrows
	navigation: {
		nextEl: '.art-switch1',
		prevEl: '.art-switch2',
	},

	// And if we need scrollbar
	// scrollbar: {
	// 	el: '.swiper-scrollbar',
	// },
});