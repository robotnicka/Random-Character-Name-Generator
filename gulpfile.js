var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('styles', function() {
    gulp.src('assets/sass/**/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});

gulp.task('sass', function () {
 return gulp.src('assets/sass/**/*.scss')
  .pipe(sass())
  .pipe(sourcemaps.init())
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function() {
  // place code for your default task here
  gulp.watch('assets/sass/**/*.scss', ['sass']);
});
