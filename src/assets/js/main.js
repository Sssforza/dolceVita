//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /assets/js/blocks  _popups.js
import {moreStage, popupClose} from "./blocks/_popups.js";

//📁 /assets/js/blocks  _pageLoad.js
import {headerShow, headerGray} from "./blocks/_pageLoad.js";

//📁 /assets/js/blocks  _animPageScroll.js
import {animMainLines, animReviewsLines, sectionBonusSystem, sectionConsultPractice, usefulBlog} from "./blocks/_animPageScroll.js";

//📁 /assets/js/blocks  _header.js
import {headerServices} from "./blocks/_header.js";

//📁 /assets/js/blocks  _sliders.js
import {sliderMain, sliderEquipment, sliderSpecialists} from "./blocks/_sliders.js";

//📁 /assets/js/blocks  scrollbar.js
import {specialistsNavScroll} from "./blocks/scrollbar.js";

//📁 /assets/js/blocks  services.js
import {popupMoreStageDate, servicesAttendance} from "./blocks/services.js";

//📁 /assets/js/blocks  team.js
import {tabsSpecificityDoctor, aimingAtTheDoctor} from "./blocks/team.js";

//📁 /assets/js/blocks  map.js
import {map} from "./blocks/map.js";

document.addEventListener("DOMContentLoaded", function () {

    // header top 0
    headerShow();

    // header gray theme
    headerGray();

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

    // popup close
    popupClose();

    // moreStage
    moreStage();

    // popupMoreStageDate
    popupMoreStageDate();

    // services attendance all cards
    servicesAttendance();

    // tabs specificity of the doctor
    tabsSpecificityDoctor();

    // aiming at the doctor
    aimingAtTheDoctor();

    // map
    map();

});