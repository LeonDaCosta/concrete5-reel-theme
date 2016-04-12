var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');


gulp.task('default', ['sass:watch','styles','script']);

gulp.task('production', ['styles']);

gulp.task('styles', function() {
  console.log('Styles task');
});

gulp.task('scripts', function() {
  console.log('Scripts task');
});

gulp.task('compress', function() {
  return gulp.src('src/themes/reel/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('build/themes/reel/js'));
});

gulp.task('sass', function () {
  return gulp.src('src/themes/reel/sass/**/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('src/themes/reel/css'));
});

gulp.task('scss', function () {
  return gulp.src('src/themes/reel/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('src/themes/reel/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('src/themes/reel/sass/**/*.sass', ['sass']);
  gulp.watch('src/themes/reel/scss/**/*.scss', ['scss']);
});
