/**
 * Gulpfile.
 *
 * A simple implementation of Gulp.
 *
 * Implements:
 * 			1. Sass to CSS conversion
 * 			2. JS concatenation
 * 			3. Watch files
 *
 * @since 1.0.0
 */

 /**
  * Configuration.
  *
  * Project Configuration for gulp tasks.
  *
  * Edit the variables as per your project requirements.
  */

var project             = 'rock'; 					// The directory name for your theme.

var src 				= './src/'; 				// The raw theme: custom scripts, SCSS source files, PHP files, images.
var build 				= './build/'; 				// A temporary directory containing a development version of your theme.

var bower				= './bower_components/'; 	// Bower packages
var composer			= './vendor/';				// Composer packages
var modules				= './node_modules/';		// npm packages				 

var jsVendorSRC         = './assets/js/vendors/*.js'; // Path to JS vendors folder
var jsVendorDestination = './assets/js/'; // Path to place the compiled JS vendors file
var jsVendorFile        = 'vendors'; // Compiled JS vendors file name
// Default set to vendors i.e. vendors.js


var jsCustomSRC         = './assets/js/custom/*.js'; // Path to JS custom scripts folder
var jsCustomDestination = './assets/js/'; // Path to place the compiled JS custom scripts file
var jsCustomFile        = 'custom'; // Compiled JS custom file name
// Default set to custom i.e. custom.js

var styleWatchFiles     = './assets/css/**/*.scss'; // Path to all *.scss files inside css folder and inside them
var vendorJSWatchFiles  = './assets/js/vendors/*.js'; // Path to all vendors JS files
var customJSWatchFiles  = './assets/js/custom/*.js'; // Path to all custom JS files


/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp         = require('gulp'); // Gulp of-course

// CSS related plugins.
var sass         = require('gulp-sass'); // Gulp pluign for Sass compilation
var autoprefixer = require('gulp-autoprefixer'); // Autoprefixing magic
var minifycss    = require('gulp-uglifycss'); // Minifies CSS files

// JS related plugins.
var concat       = require('gulp-concat'); // Concatenates JS files
var uglify       = require('gulp-uglify'); // Minifies JS files

// Utility related plugins.
var rename       = require('gulp-rename'); // Renames files E.g. style.css -> style.min.css
var sourcemaps   = require('gulp-sourcemaps'); // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css)
var notify       = require('gulp-notify'); // Sends message notification to you
var merge 			= require('merge-stream');


/**
 * Task: Copy Bower Packages
 *
 * Copy all Bower packages.
 *
 * This task does the following:
 * 		1. Get the Hybrid Core package and copy to build.
 *		2. Get TGM Plugin Activator and copy to build.
 */
gulp.task('copyBower', function() {
	var bootstrapCSS = gulp.src('./bower_components/bootstrap/dist/css/**/*.*')
		.pipe(gulp.dest('./build/css/'));

	var bootstrapJS = gulp.src('./bower_components/bootstrap/dist/js/**/*.*')
		.pipe(gulp.dest('./build/js/'));

	var jquery = gulp.src('./bower_components/jquery/dist/**/*.*')
		.pipe(gulp.dest('./build/js/'));	

	return merge (bootstrapCSS, bootstrapJS);

});





/**
 * Task: Copy Composer Packages
 *
 * Copy all Composer packages.
 *
 * This task does the following:
 * 		1. Get the Hybrid Core package and copy to build.
 *		2. Get TGM Plugin Activator and copy to build.
 */

gulp.task( 'copyComposer', function() {
	
	var hybridcore = gulp.src( './vendor/justintadlock/hybrid-core/**/*.*' )
		.pipe( gulp.dest ( './build/library/'));

	var tgmpa = gulp.src( './vendor/tgmpa/tgm-plugin-activation/class-tgm-plugin-activation.php' )
		.pipe( gulp.dest( './build/class/'));

	var kirki = gulp.src( './vendor/kirki/**/*.*' )
		.pipe( gulp.dest( './build/inc/'));	

	return merge(hybridcore, tgmpa, kirki);
}); 

/**
 * Task: Copy Src
 *
 * Copy all files from SRC folder.
 */

gulp.task( 'copySRC', function() {
	
	gulp.src( './src/**/*.*' )
		.pipe( gulp.dest ( './build/'));
	
}); 


 /**
  * Watch Tasks.
  *
  * Watches for file changes and runs specific tasks.
  */

 gulp.task( 'default', [ 'copyBower', 'copyComposer', 'copySRC' ], function () {
 
 });