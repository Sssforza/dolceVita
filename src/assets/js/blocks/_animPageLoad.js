// header services
export function headerShow () {
    window.onload = function () {
        if(document.querySelector('.header_js')) {
            const header = document.querySelector('.header_js');
            header.classList.remove('hide');
        }
        if(document.querySelector('.sliderMain_js')) {
            const slideFirstItem = document.querySelector('.sliderMain__item.first');
            const slideTitle = slideFirstItem.querySelector('.sliderMain__title');
            const slideDescription = slideFirstItem.querySelector('.sliderMain__description');
            const slideBtn = slideFirstItem.querySelector('.sliderMain__btn');
            
            // slideTitle.classList.remove('shiftUp');
            // slideDescription.classList.remove('shiftUp');
            // slideBtn.classList.remove('shiftUp');
            setTimeout(function(){
                slideFirstItem.classList.remove('first');
            }, 800);
            // setTimeout(function(){
            //     console.log(slideTitle);
            //     slideTitle.classList.remove('shiftUp');
            //     setTimeout(function(){
            //         console.log(slideDescription);
            //         slideDescription.classList.remove('shiftUp');
            //         setTimeout(function(){
            //             console.log(slideBtn);
            //             slideBtn.classList.remove('shiftUp');
            //         }, 250);
            //     }, 10);
            // }, 1000);
        }
    }
}