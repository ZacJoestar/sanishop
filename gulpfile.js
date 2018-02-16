var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var path = 'wp-content/themes/sanishop/src/';

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "localhost:8888/sanishop"
    });

    gulp.watch(path + 'scss/**/*.scss', ['sass']);
    gulp.watch("wp-content/themes/**/*.php").on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp.src(path + 'scss/**/*.scss')
        .pipe(sass())
        .on('error', function (err) {
            console.log(err.toString());

            this.emit('end');
        })
        .pipe(gulp.dest(path + 'css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('default', ['serve']);