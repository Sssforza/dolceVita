let lg = 1025 //1024
let xs = 541 //540

// tabs price services
export function tabsPriceServices () {
	if(document.querySelector('.pagePriceServices_js')) {
		let wrapper = document.querySelector('.pagePriceServices_js');
		let tabs = wrapper.querySelectorAll('.priceNav_js');
		let elements = wrapper.querySelectorAll('.priceList_js');
		let nav = document.querySelectorAll('.priceNav_js');
		let content = document.querySelectorAll('.priceList_js');
		let selection = document.querySelector('.pagePriceSelection_js');
		let search = document.querySelector('.priceSearch_js');
		
		if (window.screen.availWidth < lg) {
			nav.forEach((item) => {
				item.classList.remove('active');
			});
			content.forEach((item) => {
				item.classList.remove('hidden');
				item.classList.add('hide');
			});
			tabs.forEach((item) => {
				item.addEventListener( "click" , (e) => {
					let thisShow = item.getAttribute('data-services');
					let thisName = item.innerHTML;
					selection.innerHTML = thisName;
					wrapper.classList.add('list');
					search.classList.add('hidden');
					tabs.forEach((i) => {
						i.classList.remove('active');
					});
					item.classList.add('active');
					elements.forEach((elem) => {
						elem.classList.add('hide');
						if (elem.getAttribute('data-list') === thisShow) {
							elem.classList.remove('hide');
						}
					});
				});
			});
			selection.addEventListener( "click" , (e) => {
				selection.innerHTML = '';
				wrapper.classList.remove('list');
				search.classList.remove('hidden');
				nav.forEach((item) => {
					item.classList.remove('active');
				});
				content.forEach((item) => {
					item.classList.add('hide');
				});
			});
		} else {
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
	}
}

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

// show clear element and clear
export function clearInput () {
	if(document.querySelector('.priceSearchInput_js')) {
		const parent = document.querySelector('.priceSearch_js');
		const input = parent.querySelector('.priceSearchInput_js');
		const clear = parent.querySelector('.clearInput_js');
		input.addEventListener('keyup', logKey);
		function logKey(e) {
			if(input.value.length >= 3){
				clear.classList.add('show');
			} else {
				clear.classList.remove('show');
			}
		}
		clear.onclick = () => {
			clear.classList.remove('show');
			input.value = "";
		};
	}
};