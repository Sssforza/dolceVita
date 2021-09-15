// services stage show
export function serviceStageShow () {
    if(document.querySelector('.serviceStage')) {
        const commonParent = document.querySelector('.serviceStage');
        let stages = commonParent.querySelectorAll('.serviceStageItem_js');
        let btns = commonParent.querySelectorAll('.serviceStageBtn_js');
        let parent;
		btns.forEach((item) => {
            item.addEventListener("click", (e) => {
                parent = item.closest('.serviceStageItem_js');
                parent.classList.toggle('show');
            });
        });
	}
}
// tabs service reviews
export function tabsServiceReviews () {
	if(document.querySelector('.serviceReviews_js')) {
		let wrapper = document.querySelector('.serviceReviews_js');
		let tabs = wrapper.querySelectorAll('.serviceReviewsItem_js');
		let texts = wrapper.querySelectorAll('.serviceReviewsText_js');
		tabs.forEach((item) => {
			item.addEventListener( "click" , (e) => {
				let thisShow = item.getAttribute('data-people');
				tabs.forEach((i) => {
					i.classList.remove('active');
				});
				item.classList.add('active');
				texts.forEach((elem) => {
					elem.classList.add('hide');
					elem.classList.remove('show');
					if (elem.getAttribute('data-review') === thisShow) {
						elem.classList.remove('hide');
						elem.classList.add('show');
					}
				});
			});
		});
	}
};
// items service testimony
export function itemServiceTestimony () {
	if(document.querySelector('.serviceTestimony_js')) {
        $('.serviceTestimony__list .serviceTestimonyAbout_js').on('click', shoppingСard);
		function shoppingСard(){
			$('.serviceTestimony__list .serviceTestimonyAbout_js').not($(this)).removeClass('show');
			if($(this).hasClass('show')) {
				$(this).removeClass('show');
			} else {
				$(this).addClass('show');
			}
			$('.serviceTestimony__list .serviceTestimony__text').not($(this).next()).slideUp(500);
			$(this).next().slideToggle(500);
		}
	}
};
// service anchor scroll
export function serviceScrollTo () {
	if(document.querySelector('.anchorScroll_js')) {
        const anchors = document.querySelectorAll('.anchorScroll_js');
        const headerHeight = document.querySelector('.header_js').offsetHeight;

        anchors.forEach((anchor) => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault()
                const dopIndent = 30;
                const dataAnchor = anchor.getAttribute('data-anchor');
                const element = document.getElementById(dataAnchor);
                const scrollTo = element.getBoundingClientRect().top + window.pageYOffset - dopIndent - headerHeight;

                window.scrollTo({
                    top: scrollTo,
                    behavior: 'smooth'
                });
            });
        });
	};
};