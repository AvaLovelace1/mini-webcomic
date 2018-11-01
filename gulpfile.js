var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var pkg = require('./package.json');
var connect = require('gulp-connect-php');

// Copy third party libraries from /node_modules into /vendor
gulp.task('vendor', function() {

  // Bootstrap
  gulp.src([
      './node_modules/bootstrap/dist/**/*',
      '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
      '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
    .pipe(gulp.dest('./vendor/bootstrap'))

  // jQuery
  gulp.src([
      './node_modules/jquery/dist/*',
      '!./node_modules/jquery/dist/core.js'
    ])
    .pipe(gulp.dest('./vendor/jquery'))

})

// Default task
gulp.task('default', ['vendor']);

// Configure the connect-sync task
gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync.init({
      proxy: '127.0.0.1:8000'
    });
  });
});

// Dev task
gulp.task('dev', ['connect-sync'], function() {
  gulp.watch('./css/*.css', browserSync.reload);
  gulp.watch('./php/*.php', browserSync.reload);
  gulp.watch('./*.php', browserSync.reload);
});
