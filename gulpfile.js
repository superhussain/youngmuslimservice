// Project specific variables
var url = 'http://localhost:7888/yms/website/'; // Local dev URL. Change as needed.

// Load plugins
var gulp = require('gulp'),
	stylus = require('gulp-stylus'),
	jeet = require('jeet'),
	nib = require('nib'),
	autoprefixer = require('autoprefixer-stylus'),
	sourcemaps = require('gulp-sourcemaps'),
	minifyCss = require('gulp-minify-css'),
	rename = require('gulp-rename'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload;

// error log
function errorLog(error) {
  console.error.bind(error);
  this.emit('end');
}

// Styles
gulp.task('styles', function(){
	gulp.src('./styl/*.styl')
	.pipe(sourcemaps.init())
  .pipe(stylus({
		use: [autoprefixer('last 7 versions'), jeet()]
		// use: [autoprefixer('last 7 versions'), jeet(), nib()]
  }))
  .on('error', errorLog)
  .pipe(sourcemaps.write())
	.pipe(gulp.dest('./'))
	.pipe(reload({ stream : true }))
	// ---------------------------------------
	// Uncomment next 3 lines for minified css
	// ---------------------------------------
	// .pipe(rename({ suffix: '.min' }))
	// .pipe(minifyCss())
	// .pipe(gulp.dest('./'))
});

// Browser Sync
gulp.task('browser-sync', function(){
	browserSync({
		proxy: url
		})
});

// Watch!
gulp.task('watch', ['browser-sync'], function(){
	gulp.watch('./styl/**/*.styl', ['styles']);
	gulp.watch(['./**/*.php', '!./functions.php', '!./inc/*.php']).on('change', reload);
});

gulp.task('default', ['styles', 'watch']);