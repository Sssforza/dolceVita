// about specialist show all
export function aboutSpecialistShowAll () {
    // if(document.querySelector('.aboutSpecialist__list')) {
    //     let elem = document.querySelector('.aboutSpecialistShow_js');
    //     let list = document.querySelector('.aboutSpecialist__list');
    //     let height;
    //     let parent;
    //     elem.addEventListener( "click" , () => {
    //         height = list.scrollHeight;
    //         list.style.height = height + "px";
    //         elem.classList.add('hidden');
    //         parent = elem.closest(".aboutSpecialist_js");
    //         parent.classList.add('show');
    //     });
    // }
    // $('.aboutSpecialistShow_js').on('click', function() {
	// 	$('.aboutSpecialist__list').next().slideToggle(500);
	// });

}
// tabs specialist education
export function tabsSpecialistEducation () {
	if(document.querySelector('.aboutSpecialist_js')) {
		let wrapper = document.querySelector('.aboutSpecialist_js');
		let tabs = wrapper.querySelectorAll('.aboutSpecialistTab_js');
		let elements = wrapper.querySelectorAll('.aboutSpecialistWrapper_js');

        //let height;
		tabs.forEach((item) => {
			item.addEventListener( "click" , (e) => {
				let thisShow = item.getAttribute('data-tab');
				tabs.forEach((i) => {
					i.classList.remove('active');
				});
				item.classList.add('active');
				elements.forEach((elem) => {
					elem.classList.add('hide');
					if (elem.getAttribute('data-list') === thisShow) {
						elem.classList.remove('hide');
					}
                    // if(wrapper.classList.contains('show')) {
                    //     console.log(9)
                    //     let list = document.querySelector('.aboutSpecialist__list');
                    //     let height = elem.scrollHeight;
                    //     list.style.height = height + "px";
                    //     console.log(height)
                    // }
				});
			});
		});
	}
};