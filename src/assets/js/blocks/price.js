// tabs price services
export function tabsPriceServices () {
	if(document.querySelector('.pagePriceServices_js')) {
		let wrapper = document.querySelector('.pagePriceServices_js');
		let tabs = wrapper.querySelectorAll('.priceNav_js');
		let elements = wrapper.querySelectorAll('.priceList_js');
		tabs.forEach((item) => {
			item.addEventListener( "click" , (e) => {
				let thisShow = item.getAttribute('data-services');
				tabs.forEach((i) => {
					i.classList.remove('active');
				});
				item.classList.add('active');
				elements.forEach((elem) => {
					elem.classList.add('hidden');
					if (elem.getAttribute('data-list') === thisShow) {
						elem.classList.remove('hidden');
					}
				});
			});
		});
	}
};

// opening and closing cards
export function interactionCards () {
	if(document.querySelector('.priceList_js')) {
		$('.priceList_js .priceList__header').on('click', shoppingСard);
		function shoppingСard(){
			$('.priceList_js .priceList__header').not($(this)).removeClass('show');
			if($(this).hasClass('show')) {
				$(this).removeClass('show');
			} else {
				$(this).addClass('show');
			}
			$('.priceList_js .priceList__content').not($(this).next()).slideUp(500);
			$(this).next().slideToggle(500);
		}
	}
};