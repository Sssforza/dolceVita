//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /assets/js/blocks  _animPageLoad.js
import {headerShow} from "./blocks/_animPageLoad.js";
//📁 /assets/js/blocks  _header.js
import {headerServices} from "./blocks/_header.js";

document.addEventListener("DOMContentLoaded", function () {

    // header top 0
    headerShow();

    // header services
    headerServices();

});