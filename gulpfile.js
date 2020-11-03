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
    fs.copy('./node_modules/bootstrap/dist/css/bootstrap.min.css', './css/bootstrap.min.css');

    fs.copy('./node_modules/jquery/dist/jquery.min.js', './js/jquery.min.js');
    fs.copy('./node_modules/popper.js/dist/umd/popper.min.js', './js/popper.min.js');
    fs.copy('./node_modules/bootstrap/dist/js/bootstrap.min.js', './js/bootstrap.min.js');
    
    gulp.watch(['./scss/*', './js/*'], parallel('css', 'js'));
}

exports.css = css;
exports.js = js;
exports.watch = watchAll;
exports.default = this.watch;