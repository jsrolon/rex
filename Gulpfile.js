'use strict';

var gulp = require('gulp');

// run gulp tasks in sequence
var runSequence = require('run-sequence');

// auto reload browser on changes
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

// style-related things
var sass = require('gulp-sass');
var concatCss = require('gulp-concat-css');

// don't merge the streams!!11!!
var merge = require('merge-stream');

var paths = {
	css: ['css/**/*.css'],
	js: ['js/**/*.js'],
	html: ['./*.html'],
    php: ['./*.php'],
    sass: ['sass/**/*.scss']
};

gulp.task('sass', function () {
    var sassStream = gulp.src(paths.sass)
    .pipe(sass().on('error', sass.logError))
    .pipe(concatCss('sass.css'))

    var cssStream = gulp.src(paths.css)
        .pipe(concatCss('css.css'))

    return merge(sassStream, cssStream)
        .pipe(concatCss("style.css"))
        .pipe(gulp.dest('./'))
});

gulp.task('watch', function() {
    gulp.watch(paths.sass, ['sass', reload]);
    gulp.watch(paths.js, reload);
    gulp.watch(paths.html, reload);
    gulp.watch(paths.php, reload);
});

gulp.task('sync', function() {
    browserSync.init({
        injectChanges: true,
        proxy: {
            target: 'http://local.wordpress.dev'
        }
    });
});

gulp.task('default', function() {
    runSequence('sass', 'sync', 'watch');
});
