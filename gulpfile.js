var gulp       = require('gulp');
var watch      = require('gulp-watch');
var sass       = require('gulp-sass');
var prefix     = require('gulp-autoprefixer');
var plumber    = require('gulp-plumber');
// var sourcemaps = require('gulp-sourcemaps');
// var livereload = require('gulp-livereload');
// var local      = false;

gulp.task('sass', function() {
    return gulp.src([
        'src/scss/style.scss'
    ])
    .pipe(plumber())
    .pipe(prefix({
        browsers: ['last 2 versions'],
        cascade: true
    }))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('default', ['sass']);

gulp.task('watch', function() {
    gulp.watch('src/scss/*.scss', ['sass']);
});
