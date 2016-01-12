var gulp 		 = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	cache 		 = require('gulp-cache'),
	concat 		 = require('gulp-concat'),
	jshint 		 = require('gulp-jshint'),
	minifycss 	 = require('gulp-minify-css'),
	notify 		 = require('gulp-notify'),
	rename 		 = require('gulp-rename'),
	sass 		 = require('gulp-ruby-sass'),
	uglify 		 = require('gulp-uglify');


// Styles
gulp.task('styles', function() {
	return sass('css/style.scss', { style: 'expanded' })
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(gulp.dest('./'))
		.pipe(rename({suffix: '.min'}))
		.pipe(minifycss())
		.pipe(gulp.dest('./'))
		.pipe(notify({ message: 'Styles task complete' }));
});

// Admin Login Styles
gulp.task('admin-styles', function() {
	return sass('admin/**/*.scss', { style: 'expanded' })
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(minifycss())
		.pipe(gulp.dest('admin'))
		.pipe(notify({ message: 'Admin Styles task complete' }));
});

// Scripts
gulp.task('scripts', function() {
  return gulp.src('js/src/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(concat('core.js'))
		.pipe(gulp.dest('js'))
		.pipe(rename({suffix: '.min'}))
		.pipe(uglify())
		.pipe(gulp.dest('js'))
		.pipe(notify({ message: 'Scripts task complete' }));
});

// Default task
gulp.task('default', [], function() {
	gulp.start('styles', 'scripts');
});

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('css/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('js/src/*.js', ['scripts']);

});