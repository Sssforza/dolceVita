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