// header services
export function headerServices () {
    if(document.querySelectorAll('.headerServices_js')) {
        const header = document.querySelector('.header_js');
        $( ".headerServices_js" ).hover(function(){
            document.body.classList.add('openServicesMenu');
            $(this).addClass('active');
            header.classList.add('gray');
        });
        $('.headerServicesClose_js').on('click', function(){
			document.body.classList.remove('openServicesMenu');
            $('.headerServicesClose_js').removeClass('active');
            if(document.querySelector('.main.whiteBg_js') == null){
                header.classList.remove('gray');
            }
		});
    }
}
// header open search input
export function headerSearch () {
    if(document.querySelector('.headerQuest_js')) {
        const parent = document.querySelector('.headerSearch_js');
        const btn = document.querySelector('.headerQuest_js');
        btn.onclick = () => {
			btn.classList.add('hide');
			parent.classList.add('show');
		};
    }
}
// header menu selection
export function menuSelection () {
    if(document.querySelector('.servicesMain_js')) {
        let wrapper = document.querySelector('.headerServicesMenu_js');
        let mainSelected = wrapper.querySelectorAll('.servicesMain_js');
        let middleSelected = wrapper.querySelectorAll('.servicesMiddleLink_js');
        let elementsMiddle = wrapper.querySelectorAll('.servicesMiddle_js');
        let elementsDetail = wrapper.querySelectorAll('.servicesDetail_js');
        mainSelected.forEach((item) => {
            item.addEventListener("click", (e) => {
                let thisShow = item.getAttribute('data-services');
                mainSelected.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                middleSelected.forEach((i) => {
                    i.classList.remove('active');
                });
                middleSelected[0].classList.add('active');
                let thisShowDetail = middleSelected[0].getAttribute('data-servicesMiddleDetail');
                elementsMiddle.forEach((elem) => {
                    elem.classList.add('hidden');
                    if (elem.getAttribute('data-servicesMiddle') === thisShow) {
                        elem.classList.remove('hidden');
                    }
                });
                elementsDetail.forEach((elem) => {
                    elem.classList.add('hidden');
                    if (elem.getAttribute('data-servicesDetail') === thisShowDetail) {
                        elem.classList.remove('hidden');
                    }
                });
            });
        });
        middleSelected.forEach((item) => {
            item.addEventListener("click", (e) => {
                let thisShowMiddle = item.getAttribute('data-servicesMiddleDetail');
                middleSelected.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                elementsDetail.forEach((elem) => {
                    elem.classList.add('hidden');
                    if (elem.getAttribute('data-servicesDetail') === thisShowMiddle) {
                        elem.classList.remove('hidden');
                    }
                });
            });
        });
    }
}
// btn scroll up
export function scrollUp () {
    const scrollUp = document.querySelector('.scrollUp_js');
    if(scrollUp) {
        scrollUp.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
}