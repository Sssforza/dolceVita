// SliderMain
export function sliderMain () {
    const slickMain = $(".sliderMain_js");

	if (slickMain.length) {
		slickMain.slick({
			fade: true,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 9500,
			speed: 900,
			slidesToShow: 1,
			cssEase: 'ease',
			arrows: true,
			appendArrows: '.sliderMain__arrows',
			prevArrow: '<div class="sliderMain__prev"><svg width="12" height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.4287 1.35986L2.20014 10.2741L10.4287 19.1884" stroke="white" stroke-width="2" stroke-linecap="round"/></svg></div>',
			nextArrow: '<div class="sliderMain__next"><svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.08008 19.1885L9.30865 10.2742L1.08008 1.35991" stroke="white" stroke-width="2" stroke-linecap="round"/></svg></div>',
			dots: true,
			appendDots: '.sliderMain__dots',
			// dotsClass: "sliderMain__dots",
			customPaging : function(slider, i) {
				return `<div class="pie spinner"></div><div class="pie filler"></div><div class="mask"></div>`;
			}
		});
    }
};

// Slider equipment
export function sliderEquipment () {
    const slickEquipment = $(".sliderEquipment_js");

	if (slickEquipment.length) {
		slickEquipment.slick({
			fade: true,
			infinite: true,
			speed: 900,
			slidesToShow: 1,
			cssEase: 'linear',
			arrows: true,
			prevArrow: '<div class="sliderArrow__prev"><svg width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.7988 1L1.79883 25L25.7988 49" stroke="#7C8F99" stroke-width="2" stroke-linecap="round"/></svg></div>',
			nextArrow: '<div class="sliderArrow__next"><svg width="28" height="50" viewBox="0 0 28 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.79883 49L25.7988 25L1.79883 1" stroke="#7C8F99" stroke-width="2" stroke-linecap="round"/></svg></div>',
		});
    }
};

// Slider specialists
export function sliderSpecialists () {
    const slickSpecialists = $(".specialistsFor_js");

	if (slickSpecialists.length) {
		slickSpecialists.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			prevArrow: '<div class="sliderArrow__prev"><svg width="27" height="50" viewBox="0 0 27 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.7988 1L1.79883 25L25.7988 49" stroke="#7C8F99" stroke-width="2" stroke-linecap="round"/></svg></div>',
			nextArrow: '<div class="sliderArrow__next"><svg width="28" height="50" viewBox="0 0 28 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.79883 49L25.7988 25L1.79883 1" stroke="#7C8F99" stroke-width="2" stroke-linecap="round"/></svg></div>',
		});
	}

};
