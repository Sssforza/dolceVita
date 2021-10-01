"use strict";

import gulp from "gulp";

const requireDir = require("require-dir"),
    paths = {
        styles: {
            src: [
                "./src/assets/scss/**/*.{scss,sass}",
                "!./src/assets/scss/modules/*.{scss,sass}",
                "./src/assets/scss/blocks/**/*.{scss,sass}"
            ],
            dist: "./public_html/dist/css/",
            watch: [
                "./src/assets/scss/**/*.{scss,sass}"
            ]
        },
        scripts: {
            src: [
                "./src/assets/js/**/*.js",
                "!./src/assets/js/modules/*.js",
                "!./src/assets/js/blocks/*.js",
            ],
            dist: "./public_html/dist/js/",
            watch: [
                "./src/assets/js/**/*.js"
            ]
        },
        modules: {
            src: "./src/assets/js/modules/**/*",
            dist: "./public_html/dist/js/modules/",
            watch: [
                "./public_html/src/js/modules/**/*"
            ]
        },
        images: {
            src: [
                "./src/img/**/*.{jpg,jpeg,png,gif,tiff,svg}",
                "!./src/img/favicon/*.{jpg,jpeg,png,gif,tiff}"
            ],
            dist: "./public_html/dist/img/",
            watch: "./src/img/**/*.{jpg,jpeg,png,gif,svg,tiff}"
        },
        favicons: {
            src: "./src/img/favicon/*.{jpg,jpeg,png,gif}",
            dist: "./public_html/dist/img/favicons/",
        },
        fontgen: {
            src: "./src/fonts/*.{ttf,otf}",
            dist: "./public_html/dist/fonts/",
            watch: "./src/fonts/*.{ttf,otf}"
        }
    };

requireDir("./gulp-tasks/");

export { paths };

export const development = gulp.series(
    gulp.parallel(["styles", "scripts", "modules", "images", "favicons", "fontgen", "fontgen2"]),
    gulp.parallel("serve"));

export const prod = gulp.series("clean",
    gulp.parallel(["styles", "scripts", "modules",  "images", "favicons", "fontgen","fontgen2"]));

export const jc = gulp.series(
    gulp.parallel(["styles", "scripts"]),
    gulp.parallel("serveJc"));

export default development;

