// tabs specificity of the doctor
export function tabsSpecificityDoctor () {
	if(document.querySelector('.team_js')) {
		let wrapper = document.querySelector('.team_js');
		let tabs = wrapper.querySelectorAll('.teamItem_js');
		let elements = wrapper.querySelectorAll('.teamPeopleList_js');
		tabs.forEach((item) => {
			item.addEventListener( "click" , (e) => {
				let thisShow = item.getAttribute('data-choice');
				tabs.forEach((i) => {
					i.classList.remove('active');
				});
				item.classList.add('active');
				elements.forEach((elem) => {
					elem.classList.add('hide');
					elem.classList.remove('show');
					if (elem.getAttribute('data-specificity') === thisShow) {
						elem.classList.remove('hide');
						elem.classList.add('show');
					}
				});
			});
		});
	}
};
// aiming at the doctor
export function aimingAtTheDoctor () {
	if(document.querySelector('.teamPeopleLink_js')) {
		let name = document.querySelectorAll('.teamPeopleLink_js');
		name.forEach((item) => {
			item.onmouseover = function(e) {
				item.closest(".teamPeople__item").classList.add('hover');
			};
			item.onmouseout = function(e) {
				item.closest(".teamPeople__item").classList.remove('hover');
			}
		});
	}
};
