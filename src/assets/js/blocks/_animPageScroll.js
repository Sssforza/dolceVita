// anim gradient bg header
export function animGradientBgHeader () {
    if(document.querySelector('.gradientHeader_js')) {
        const header = document.querySelector('.header_js');
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        const text = document.querySelector('.gradientHeader_js').offsetTop;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (text - headerHeight)){
                header.classList.add('gradient');
            } else {
                header.classList.remove('gradient');
            }
        });
    }
}

// anim main lines
export function animMainLines () {
    if(document.querySelector('.mainLines')) {
        const mainLines = document.querySelector('.mainLines__svg');
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        let clientHeight = document.documentElement.clientHeight/2 - headerHeight;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = mainLines.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                mainLines.classList.add('show');
            }
        });
    }
}

// anim reviews lines
export function animReviewsLines () {
    if(document.querySelector('.reviews_js')) {
        const reviewsSvg = document.querySelector('.reviews__svg');
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        let clientHeight = document.documentElement.clientHeight/2 - headerHeight;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = reviewsSvg.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                reviewsSvg.classList.add('show');
            }
        });
    }
    if(document.querySelector('.serviceReviewsSvg_js')) {
        const serviceReviewsLines = document.querySelector('.serviceReviewsSvg_js');
        const serviceReviewsLinesTop = document.querySelector('.serviceReviews_js').offsetTop;
        const serviceReviewsLinesHeight = document.querySelector('.serviceReviews_js').offsetHeight;
        const headerHeight = document.querySelector('.header_js').offsetHeight;
        window.addEventListener('scroll', function() {
            if(pageYOffset > (serviceReviewsLinesTop - serviceReviewsLinesHeight - headerHeight)){
                serviceReviewsLines.classList.add('show');
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
        const consultPractice = document.querySelector('.sectionConsult__practice');
        let clientHeight = document.documentElement.clientHeight/2;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = consultPractice.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                consultPractice.classList.remove('hide');
            }
        });
    }
}

// useful blog translateY 0
export function usefulBlog () {
    if(document.querySelector('.usefulBlog_js')) {
        const usefulBlog = document.querySelector('.usefulBlog__list');
        let clientHeight = document.documentElement.clientHeight/2;
        let clientRectTop;
        window.addEventListener('scroll', function() {
            clientRectTop = usefulBlog.getBoundingClientRect().top;
            if(clientRectTop < clientHeight) {
                usefulBlog.classList.remove('top');
            }
        });
    }
}