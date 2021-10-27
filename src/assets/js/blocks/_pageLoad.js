// header services

export function windowOnload () {
    window.onload = function () {
        //header
        if(document.querySelector('.header_js')) {
            const header = document.querySelector('.header_js');
            header.classList.remove('hide');
        }
        // drop header about list
        if(document.querySelector('.headerAbout_js')) {
            let positionElem = document.querySelector(".headerAboutPosition_js");
            let list = document.querySelector('.headerAboutList_js');
            let distance = positionElem.getBoundingClientRect();
            let positionRight = distance.right;
            let ListWidth =  document.querySelector('.headerAboutList_js').offsetWidth;
            list.style.left = (positionRight - (ListWidth / 2)) + 'px';
            $( ".headerAboutHover_js" ).hover(function(){
                    $( ".headerAboutList_js" ).addClass( "open" );
                }, function(){
                    $( ".headerAboutList_js" ).removeClass( "open" );
            });
            $( ".headerAbout__content" ).hover(function(){
                $( ".headerAboutList_js" ).addClass( "open" );
            }, function(){
                $( ".headerAboutList_js" ).removeClass( "open" );
            });
        }
        // first slide main slider
        if(document.querySelector('.sliderMain_js')) {
            const slideFirstItem = document.querySelector('.sliderMain__item.first');
            const slideDots = document.querySelector('.sliderMain__dots.stop');
            setTimeout(function(){
                slideFirstItem.classList.remove('first');
            }, 800);
            setTimeout(function(){
                slideDots.classList.remove('stop');
            }, 5500);
        }
        // anim service lines
        if(document.querySelector('.serviceLines')) {
            const serviceLines = document.querySelector('.serviceLines');
            serviceLines.classList.add('show');
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