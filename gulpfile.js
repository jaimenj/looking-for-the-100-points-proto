'use strict'

const gulp = require("gulp");
const { parallel } = require("gulp");
const sass = require("gulp-sass");
const cleanCss = require("gulp-clean-css");
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const fs = require('fs-extra');

function css() {
    return gulp.src('./scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        //.pipe(cleanCss())
        .pipe(rename('style.css'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./css'));
}

function js() {
    fs.copy('./node_modules/bootstrap/dist/js/bootstrap.min.js', './js/bootstrap.min.js');
    fs.copy('./node_modules/bootstrap/dist/js/bootstrap.min.js.map', './js/bootstrap.min.js.map');
    return gulp.src([
            './js/main.js',
        ])
        .pipe(sourcemaps.init())
        //.pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'));
}

function watchAll() {
    gulp.watch(['./scss/*', './js/*'], parallel('css', 'js'));
}

exports.css = css;
exports.js = js;
exports.watch = watchAll;
exports.default = this.watch;