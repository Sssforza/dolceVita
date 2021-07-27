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

// section consult practice
export function sectionConsultPractice () {
    if(document.querySelector('.sectionConsult_js')) {
        const mainLines = document.querySelector('.sectionConsult__practice');
        const mainLinesTop = document.querySelector('.sectionConsult_js').offsetTop;
        const mainLinesHeight = document.querySelector('.sectionConsult_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (mainLinesTop - mainLinesHeight - headerHeight)){
                mainLines.classList.remove('hide')
            }
        });
    }
}

// useful blog translateY 0
export function usefulBlog () {
    if(document.querySelector('.usefulBlog_js')) {
        const mainLines = document.querySelector('.usefulBlog__list');
        const mainLinesTop = document.querySelector('.usefulBlog_js').offsetTop;
        const mainLinesHeight = document.querySelector('.usefulBlog_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (mainLinesTop - mainLinesHeight - headerHeight)){
                mainLines.classList.remove('top')
            }
        });
    }
}