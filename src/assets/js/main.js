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
import {windowOnload, headerGray} from "./blocks/_pageLoad.js";

//📁 /assets/js/blocks  _animPageScroll.js
import {animGradientBgHeader, animMainLines, animReviewsLines, sectionBonusSystem, sectionConsultPractice, usefulBlog} from "./blocks/_animPageScroll.js";

//📁 /assets/js/blocks  _documentClick.js
import {documentClick} from "./blocks/_documentClick.js";

//📁 /assets/js/blocks  _header.js
import {headerServices, headerSearch, menuSelection} from "./blocks/_header.js";

//📁 /assets/js/blocks  _sliders.js
import {sliderMain, sliderEquipment, sliderSpecialists, sliderSpecialistsPortfolio} from "./blocks/_sliders.js";

//📁 /assets/js/blocks  scrollbar.js
import {scrollbar} from "./blocks/scrollbar.js";

//📁 /assets/js/blocks  index.js
import {usefulBlogHover} from "./blocks/index.js";

//📁 /assets/js/blocks  services.js
import {servicesSelectedDrop, servicesSelectedFetch} from "./blocks/services.js";

//📁 /assets/js/blocks  specialist.js
import {aboutSpecialistShowAll, tabsSpecialistEducation} from "./blocks/specialist.js";

//📁 /assets/js/blocks  team.js
import {tabsSpecificityDoctor, aimingAtTheDoctor} from "./blocks/team.js";

//📁 /assets/js/blocks  price.js
import {tabsPriceServices, interactionCards, clearInput} from "./blocks/price.js";

//📁 /assets/js/blocks  map.js
import {map} from "./blocks/map.js";

document.addEventListener("DOMContentLoaded", function () {

    // window.onload
    windowOnload();

    // header gray theme
    headerGray();

    // anim gradient bg header
    animGradientBgHeader();

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

    // document onclick
    documentClick();

    // header services
    headerServices();

    // header open search input
    headerSearch();

    // header menu selection
    menuSelection();

    // slider main page
    sliderMain();

    // slider main page equipment
    sliderEquipment();

    // slider main page specialists
    sliderSpecialists();

    // slider portfolio specialist
    sliderSpecialistsPortfolio();

    // scrollbar
    scrollbar();

    // useful blog hover
    usefulBlogHover();

    // popup close
    popupClose();

    // moreStage
    moreStage();

    // services selected drop
    servicesSelectedDrop();

    // popup more stage date
    // services attendance all cards
    // services selected fetch
    servicesSelectedFetch();

    // about specialist show all
    aboutSpecialistShowAll();

    // tabs specialist education
    tabsSpecialistEducation();

    // tabs specificity of the doctor
    tabsSpecificityDoctor();

    // aiming at the doctor
    aimingAtTheDoctor();

    // tabs price services
    tabsPriceServices();

    // opening and closing cards
    interactionCards();

    // show clear element and clear
    clearInput();

    // map
    map();

});