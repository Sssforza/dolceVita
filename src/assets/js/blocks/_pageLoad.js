// header services
export function headerShow () {
    window.onload = function () {
        if(document.querySelector('.header_js')) {
            const header = document.querySelector('.header_js');
            header.classList.remove('hide');
        }
        if(document.querySelector('.sliderMain_js')) {
            const slideFirstItem = document.querySelector('.sliderMain__item.first');
            setTimeout(function(){
                slideFirstItem.classList.remove('first');
            }, 800);
        }
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