'use strict';

var gulp = require('gulp');

// run gulp tasks in sequence
var runSequence = require('run-sequence');

// auto reload browser on changes
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

var paths = {
	css: ['css/**/*.css'],
	js: ['js/**/*.js'],
	html: ['./*.html']
};

gulp.task('watch', function() {
    gulp.watch(paths.css, { maxListeners: 999 }, reload);
    gulp.watch(paths.js, { maxListeners: 999 }, reload);
    gulp.watch(paths.html, { maxListeners: 999 }, reload);
});

gulp.task('sync', function() {
    browserSync.init({
        injectChanges: true,
        server: {
        	baseDir: './'
        }
    });
});

gulp.task('default', function() {
    runSequence(
        ['watch', 'sync']
    );
});
