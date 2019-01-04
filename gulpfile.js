'use strict';

let gulp     = require('gulp');
let rename   = require('gulp-rename');
let jshint   = require('gulp-jshint');
let stylish  = require('jshint-stylish');
let minifyJS = require('gulp-minify');
let cleanCSS = require('gulp-clean-css');

function lint_js(cb) {
	gulp
		.src([
			'assets/js/*.js',
			'!assets/js/*.min.js'
		])
		.pipe(jshint())
		.pipe(jshint.reporter(stylish))
		.pipe(jshint.reporter('fail'));

	cb();
}

function minify_js(cb) {
	gulp
		.src([
			'assets/js/*.js',
			'!assets/js/*.min.js'
		])
		.pipe(minifyJS({
			ext:{
				min:'.min.js'
			}
		}))
		.pipe(gulp.dest('assets/js/'));

	cb();
}

function clean_css(cb) {
	gulp
		.src([
			'assets/css/*.css',
			'!assets/css/*.min.css'
		])
		.pipe(cleanCSS({
			compatibility: 'ie8',
			level: 2
		}))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('assets/css/'));

	cb();
}

gulp.task('default', gulp.series([minify_js, clean_css]));
gulp.task('lint', gulp.series([lint_js]));
