var gulp = require('gulp');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');
var less = require('gulp-less');
var watch = require('gulp-watch');
var pump = require('pump');

gulp.task('tLessToCss', function(cb) {
	var data = [
        gulp.src('./preproc/less/*.less'),
        less(),
        autoprefixer({
            browsers: ['last 5 versions', '> 1%', 'ie 8', 'ie 7'],
            cascade: true
        }),
        concat('main.css'),
        //cssmin(),
        gulp.dest('./css'),
        browserSync.reload({
            stream: true
        })
    ];
				
	pump(data, cb);		
});
gulp.task('tBrowserSync', ['tLessToCss'], function() {
	browserSync({
		proxy: 'http://golamago',
		browser: 'chrome',
		notify: false,
		minify: false,
		open: false,
	});

	gulp.watch('./preproc/less/*.less', ['tLessToCss']);
    gulp.watch(['./*.php', './js/*.js']).on('change', function(){
        browserSync.reload();
    });
});
gulp.task('default', ['tBrowserSync']);