const { src, dest, series } = require('gulp');
const del = require('del');
const sass = require('gulp-sass')(require('sass'));





function clearOutputFolder(cb) {
    return del('output/**');
}

function copy(cb) {
    return src('public/**')
        .pipe(dest('output/'));
}

function useSass(cb) {
    return src('./scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('./output/css/'));
}


exports.default = series(clearOutputFolder, copy, useSass);