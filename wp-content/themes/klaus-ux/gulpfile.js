var domain = 'http://klaus.in.ua.local/'; //local url
var path_to_theme = '/wp-content/themes/klaus-ux/'; //url with trailing slash

//NPM-MODULES
//--------------------------------------------------
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require("gulp-rename");
//var browserSync = require('browser-sync');
var imagemin = require('gulp-imagemin');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');

var jade = require('gulp-jade');
var changed = require('gulp-changed');

var util = require('gulp-util');

var critical = require('critical');

//TASK: gulp
//--------------------------------------------------
gulp.task('default', ['less', 'js', 'jade'], function () {
	gulp.start(/*'browser-sync',*/ 'watch');
});

//TASK: gulp watch
//--------------------------------------------------
gulp.task('watch', function() {
	gulp.watch(['./less/**/*.less', './home-2/less/**/*.less'], ['less']);
	gulp.watch(['./js/**/*.js', '!./js/scripts.min.js'], ['js']);
    gulp.watch('./ajax-content/jade/**/*.jade', ['jade']);
});

//TASK: gulp img
//--------------------------------------------------
gulp.task('img', function() {
	gulp.src(['./{img,css}/**/*.{png,jpg,jpeg,gif}', './screenshot.png'])
	.pipe(plumber())
	.pipe(imagemin({progressive: true}))
	.pipe(gulp.dest("./"));
});

//TASK: gulp less
//--------------------------------------------------
gulp.task('less', function () {
	gulp.src(['./less/style.less', './less/plugins.less'])
	.pipe(plumber())
	.pipe(less())
	.pipe(cleanCSS())
	.pipe(rename({extname: ".min.css"}))
	.pipe(autoprefixer({grid: true, browsers: ['>2%']}))
	.pipe(cleanCSS({compatibility: 'ie10', keepSpecialComments: 1}))
	.pipe(gulp.dest('./css'))
});


//TASK: gulp js
//--------------------------------------------------
gulp.task('js', function() {
	return gulp.src(['./js/plugins/**/*.js', './js/custom.js'])
	.pipe(plumber())
	.pipe(concat('./scripts.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest("./js"));
});

//TASK: gulp jade
//--------------------------------------------------
gulp.task('jade', function() {
    gulp.src('./ajax-content/jade/**/*.jade')
        .pipe(plumber())
        .pipe(changed('./ajax-content/', {extension: '.html'}))
        .pipe(jade({
            pretty: true
        }))
        .pipe(gulp.dest('./ajax-content/'))
});

//TASK: gulp browser-sync
//--------------------------------------------------
//http://www.browsersync.io/docs/options/
// gulp.task('browser-sync', function() {
// 	//watch files
// 	var files = [
// 		'./**/*.css',
// 		'./js/**/*.js',
// 		'./**/*.php',
// 		'./**/*.html'
// 	];

	//initialize browsersync
	// browserSync.init(files, {
	// 	proxy: domain,
		//port: 8080, //default: 3000
		//tunnel: true, //tunnel the browsersync server through a random Public URL
		//tunnel: "olgax", //attempt to use the custom URL: "http://olgax.localtunnel.me"
// 		injectChanges: true, //inject CSS changes
// 		notify: false
// 	});
// });

//TASK: gulp critical-css
//before run this task you need comment next code in functions.php:
//add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );
//--------------------------------------------------
gulp.task('critical', function() {
    critical.generate({
        src: domain,
        dest: 'css/critical.css.php',
        minify: true,
        pathPrefix: path_to_theme + this.base
    });
});