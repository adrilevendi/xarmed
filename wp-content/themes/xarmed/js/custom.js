function $(prop) {
	return jQuery(prop);
}

jQuery(document).ready(function () {
	console.log('sds');

	let homeArmsCarousel = $('.xcarousel__inner').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding: '410px',
		arrows: false,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					centerMode: false
				}
			},
		]
	});

	homeArmsCarousel.on('wheel', (function (e) {
		e.preventDefault(); if (e.originalEvent.deltaY < 0) {
			$(this).slick('slickNext');
		} else {
			$(this).slick('slickPrev');
		}
	}));

	let proudctCarousel = $('#productCarousel').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true

		// centerMode: true,
		// centerPadding: '410px',
		// arrows:false,
	});

	//add to cart

	$('#addToCartBtn').click(function (e) {
		e.preventDefault();
		var filterStDtForm = $('#addToCartForm');
		var params = {
			// async: true,
			url: filterStDtForm.attr('action'),
			data: filterStDtForm.serialize(), // form data
			type: 'POST', // POST
			dataType: 'json',

			success: function (data) {

				console.log(data);
			},
			error: function (e) {
				console.log(e);
			}
		};


		jQuery.ajax(params);
		// return false;
	})
})