var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var paths = {
  sass: './assets/css/*.sass'
};

gulp.task('sass', function () {
  gulp.src('assets/css/*.sass')
    .pipe(sass({
      includePaths: ['sass']
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('browser-sync', function() {
  browserSync.init(["assets/css/*.css", "assets/js/*.js"], {
    server: {
      baseDir: "./"
    }
  });
});

gulp.task('watch', ['sass', 'browser-sync'], function () {
  gulp.watch('./assets/css/**/*.sass', ['sass']);
});
