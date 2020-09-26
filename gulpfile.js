'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify-es').default;
var rename = require('gulp-rename');
var imageResize = require('gulp-image-resize');
var del = require('del');

sass.compiler = require('node-sass');

gulp.task('clean', function(){
    return del('build/**', {force:true});
});

gulp.task('copy', function() {
    return gulp.src([
            './src/*.php',
            './src/screenshot.png',
            './src/include/**',
            './src/images/**',
            './src/assets/**'
        ],{
            base: 'src'
        })
        .pipe(gulp.dest('./build/'));
});

gulp.task('styles', function() {
    return gulp.src([
            './src/style.css',
            './node_modules/owl.carousel2/dist/assets/owl.carousel.css',
            './node_modules/owl.carousel2/dist/assets/owl.theme.default.min.css',
            './node_modules/lightbox2/dist/css/lightbox.min.css',
            './src/style/*.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(concat('style.css'))
        .pipe(csso())
        .pipe(gulp.dest('./build'));
});

gulp.task('images', function() {
    return gulp.src(['./build/images/volunteers/*']) // ez atmereti az onkentes kepeket
        .pipe(imageResize({
            width : 500,
            height : 500,
            crop : false,
            upscale : true
        })).pipe(gulp.dest('./build/images/volunteers')).on('end', function() {
            return gulp.src(['./build/images/construction/*']) // thumbnail generalas az epitkezos kepekre
                .pipe(imageResize({
                    width : 200,
                    height : 112,
                    crop : true,
                    upscale : true
                }))
                .pipe(gulp.dest('./build/images/construction/thumbnails'))
        }).on('end', function() {
            return gulp.src(['./build/images/*/*'])
                .pipe(gulp.dest('./build/images'))
        });

});

gulp.task('scripts', function() {
    return gulp.src([
            './src/js/main.js'
        ])
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('./build/js')).on('end', function() {
            return gulp.src([
                './node_modules/jquery/dist/jquery.min.js',
                './node_modules/popper.js/dist/umd/popper.min.js',
                './node_modules/bootstrap/dist/js/bootstrap.min.js',
                './node_modules/jarallax/dist/jarallax.min.js',
                './node_modules/owl.carousel2/dist/owl.carousel.min.js',
                './node_modules/lightbox2/dist/js/lightbox.min.js',
                './build/js/main.min.js'
            ])
            .pipe(concat('all.min.js'))
            .pipe(gulp.dest('./build/js'))
        });
});

gulp.task('styles:watch', function() {
    gulp.watch('./src/style/*.scss', gulp.series('styles'));
});

gulp.task('scripts:watch', function() {
    gulp.watch('./src/js/main.js', gulp.series('scripts'));
});

gulp.task('watch', function() {
    gulp.watch('./src/**', gulp.series('default'));
});

gulp.task('build', gulp.parallel('styles', 'scripts', 'images'));

gulp.task('default', gulp.series(['clean', 'build', 'copy']));