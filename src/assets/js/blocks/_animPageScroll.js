// header services
export function animMainLines () {
    if(document.querySelector('.mainLines_js')) {
        const mainLines = document.querySelector('.mainLines__svg');
        const mainLinesTop = document.querySelector('.mainLines_js').offsetTop;
        const mainLinesHeight = document.querySelector('.mainLines_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (mainLinesTop - mainLinesHeight - headerHeight)){
                mainLines.classList.add('show')
            }
        });
    }
}