// header services

export function windowOnload () {
    window.onload = function () {
        //header
        if(document.querySelector('.header_js')) {
            const header = document.querySelector('.header_js');
            header.classList.remove('hide');
        }
        // first slide main slider
        if(document.querySelector('.sliderMain_js')) {
            const slideFirstItem = document.querySelector('.sliderMain__item.first');
            setTimeout(function(){
                slideFirstItem.classList.remove('first');
            }, 800);
        }
        //page specialist twentytwenty
        if (document.querySelector('.twentytwenty_js')) {
            console.log('twentytwenty_js')
            $(".twentytwenty_js").twentytwenty();
        }
        // midnight
        $('.header_js').midnight();
    }
}
// header gray theme
export function headerGray () {
    const main = document.querySelector('.main');
    const header = document.querySelector('.header_js');
    if(main.classList.contains('whiteBg_js')) {
        header.classList.add('gray');
    }
}