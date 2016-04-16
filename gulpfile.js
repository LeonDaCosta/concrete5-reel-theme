var gulp = require('gulp');
var uglify = require('gulp-uglify');

gulp.task('default', ['styles','script']);

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
