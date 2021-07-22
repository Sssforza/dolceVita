//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /assets/js/blocks  _animPageLoad.js
import {headerShow} from "./blocks/_animPageLoad.js";

//📁 /assets/js/blocks  _header.js
import {headerServices} from "./blocks/_header.js";

//📁 /assets/js/blocks  _sliders.js
import {sliderMain} from "./blocks/_sliders.js";

document.addEventListener("DOMContentLoaded", function () {

    // header top 0
    headerShow();

    // header services
    headerServices();

    // slider main page
    sliderMain();

});