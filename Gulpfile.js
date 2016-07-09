var gulp = require('gulp');

var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var assetsDir = './assets/';
var distDir = './dist/';

gulp.task('lint', function() {
    return gulp.src(['./node_modules/', assetsDir + 'js/*.js'])
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('sass', function() {
    return gulp.src(assetsDir + 'styles/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(distDir + 'css'));
});

gulp.task('scripts', function() {
    return gulp.src(assetsDir + 'js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest(distDir))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(distDir + 'js'));
});

gulp.task('watch', function() {
    gulp.watch(assetsDir + 'js/*.js', ['lint', 'scripts']);
    gulp.watch(assetsDir + 'styles/*.scss', ['sass']);
});

gulp.task('default', ['lint', 'sass', 'scripts']);