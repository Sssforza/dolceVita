//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /assets/js/blocks  _popups.js
import {moreStage} from "./blocks/_popups.js";

//📁 /assets/js/blocks  _animPageLoad.js
import {headerShow} from "./blocks/_animPageLoad.js";

//📁 /assets/js/blocks  _animPageScroll.js
import {animMainLines, animReviewsLines, sectionBonusSystem, sectionConsultPractice, usefulBlog} from "./blocks/_animPageScroll.js";

//📁 /assets/js/blocks  _header.js
import {headerServices} from "./blocks/_header.js";

//📁 /assets/js/blocks  _sliders.js
import {sliderMain, sliderEquipment, sliderSpecialists} from "./blocks/_sliders.js";

//📁 /assets/js/blocks  scrollbar.js
import {specialistsNavScroll} from "./blocks/scrollbar.js";

//📁 /assets/js/blocks  services.js
import {popupMoreStageDate} from "./blocks/services.js";

document.addEventListener("DOMContentLoaded", function () {

    // moreStage
    moreStage();

    // header top 0
    headerShow();

    // next anim main lines
    animMainLines();

    // next anim reviews lines
    animReviewsLines();

    // next anim card and phone bonus system
    sectionBonusSystem();

    // next section consult practice
    sectionConsultPractice();

    // useful blog translateY 0
    usefulBlog();

    // header services
    headerServices();

    // slider main page
    sliderMain();

    // slider main page equipment
    sliderEquipment();

    // slider main page specialists
    sliderSpecialists();

    // specialists nav scroll
    specialistsNavScroll();

    // moreStage
    moreStage();

    // popupMoreStageDate
    popupMoreStageDate();

});