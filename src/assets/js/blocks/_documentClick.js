// document onclick
export function documentClick () {
    document.onclick = function(e){
        if(document.querySelector('.headerQuest_js')) {
            const parentHeaderSearch = document.querySelector('.headerSearch_js');
            const btnHeaderInput = document.querySelector('.headerQuest_js');
            var headerSearch = $(".headerSearch_js");
            if (headerSearch.has(e.target).length === 0){
                    btnHeaderInput.classList.remove('hide');
			        parentHeaderSearch.classList.remove('show');
            }
        }
        if(document.querySelector('.servicesSelectedInput_js')) {
            const parentListServicesSelected = document.querySelector('.servicesSelected_js');
            const selectedServicesSelected = parentListServicesSelected.querySelector('.servicesSelectedSelected_js');
            const btnServicesSelected = document.querySelector('.banerServices__btn');
            if(selectedServicesSelected.value <= 0) {
                btnServicesSelected.classList.add('disabled');
            } else {
                btnServicesSelected.classList.remove('disabled');
            }
            var containerServicesSelected1 = $(".servicesTabs__item");
            var containerServicesSelected2 = $(".servicesSelectedInput_js");
            if (containerServicesSelected1.has(e.target).length === 0 && containerServicesSelected2.has(e.target).length === 0){
                parentListServicesSelected.classList.remove('open');
            }
        }
    };
}