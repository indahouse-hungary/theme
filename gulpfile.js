'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify-es').default;
var imagemin = require('gulp-imagemin');
var rename = require('gulp-rename');
var imageResize = require('gulp-image-resize');

sass.compiler = require('node-sass');

gulp.task('styles', function() {
    return gulp.src([
            './node_modules/owl.carousel2/dist/assets/owl.carousel.css',
            './node_modules/owl.carousel2/dist/assets/owl.theme.default.min.css',
            './node_modules/lightbox2/dist/css/lightbox.min.css',
            './assets/style/*.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(concat('all.min.css'))
        .pipe(csso())
        .pipe(gulp.dest('./assets/style'));
});

gulp.task('images', function() {
    return gulp.src(['./images/volunteers/*']) // ez atmereti az onkentes kepeket
        .pipe(imageResize({
            width : 500,
            height : 500,
            crop : false,
            upscale : true
        })).pipe(gulp.dest('./images/volunteers')).on('end', function() {
            return gulp.src(['./images/construction/*']) // thumbnail generalas az epitkezos kepekre
                .pipe(imageResize({
                    width : 200,
                    height : 112,
                    crop : true,
                    upscale : true
                }))
                .pipe(imagemin())
                .pipe(gulp.dest('./images/construction/thumbnails'))
        }).on('end', function() {
            return gulp.src(['./images/*/*'])
                .pipe(imagemin())
                .pipe(gulp.dest('./images'))
        });

});

gulp.task('scripts', function() {
    return gulp.src([
            './assets/js/main.js'
        ])
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./assets/js')).on('end', function() {
            return gulp.src([
                './node_modules/jquery/dist/jquery.min.js',
                './node_modules/popper.js/dist/umd/popper.min.js',
                './node_modules/bootstrap/dist/js/bootstrap.min.js',
                './node_modules/jarallax/dist/jarallax.min.js',
                './node_modules/owl.carousel2/dist/owl.carousel.min.js',
                './node_modules/lightbox2/dist/js/lightbox.min.js',
                './assets/js/main.min.js'
            ])
            .pipe(concat('all.min.js'))
            .pipe(gulp.dest('./assets/js'))
        });
});

gulp.task('styles:watch', function() {
    gulp.watch('./assets/style/*.scss', gulp.series('styles'));
});

gulp.task('scripts:watch', function() {
    gulp.watch('./assets/js/main.js', gulp.series('scripts'));
});

gulp.task('default', gulp.parallel('styles', 'scripts', 'images'));
