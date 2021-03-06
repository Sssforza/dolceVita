// anim main lines
export function animMainLines () {
    if(document.querySelector('.mainLines_js')) {
        const mainLines = document.querySelector('.mainLines__svg');
        const mainLinesTop = document.querySelector('.mainLines_js').offsetTop;
        const mainLinesHeight = document.querySelector('.mainLines_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (mainLinesTop - mainLinesHeight - headerHeight)){
                mainLines.classList.add('show');
            }
        });
    }
}

// anim reviews lines
export function animReviewsLines () {
    if(document.querySelector('.reviews_js')) {
        const mainLines = document.querySelector('.reviews__svg');
        const mainLinesTop = document.querySelector('.reviews_js').offsetTop;
        const mainLinesHeight = document.querySelector('.reviews_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (mainLinesTop - mainLinesHeight - headerHeight)){
                mainLines.classList.add('show');
            }
        });
    }
}

// anim bonus system
export function sectionBonusSystem () {
    if(document.querySelector('.bonusCard_js')) {
        const bonusCard = document.querySelector('.bonusCard_js');
        const bonusCardTop = document.querySelector('.bonusCard_js').offsetTop;
        const bonusCardHeight = document.querySelector('.bonusCard_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (bonusCardTop - bonusCardHeight - headerHeight)){
                bonusCard.classList.add('show');
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
                mainLines.classList.remove('hide');
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
                mainLines.classList.remove('top');
            }
        });
    }
}