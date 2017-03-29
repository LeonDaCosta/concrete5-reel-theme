var gulp = require('gulp');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');

gulp.task('css', function(){
//TODO minfy CSS
});

gulp.task('js', function(){
//TODO minfy JS
});

gulp.task('php', function(){
//TODO minfy PHP
});

gulp.task('sass', function () {
  return gulp.src('./themes/reel/sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./themes/reel/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./themes/reel/sass/*.scss', ['sass']);
});

/*
gulp.task('compress', function() {
  return gulp.src('src/themes/reel/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('build/themes/reel/js'));
});
*/

gulp.task('default', ['php','css','sass:watch']);
