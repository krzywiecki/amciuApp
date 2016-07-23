var gulp = require('gulp');

var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');

const htmlDir = "./templates/*.html";
const stylesDir = "./assets/styles/*.scss";
const assetsDir = './assets/';
const distDir = './dist/';

gulp.task('copyfonts', function() {
   return gulp.src(assetsDir + 'fontello/font/*.{ttf,woff,eof,svg}')
        .pipe(gulp.dest(distDir + 'fontello/font'));
});

gulp.task('icons', function() {
   return gulp.src(assetsDir + 'fontello/css/*.css')
        .pipe(concat('icons.css'))
        .pipe(gulp.dest(distDir + 'fontello/font'));
});

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
    livereload.listen();
    gulp.watch(htmlDir, function(){
        gulp.src(htmlDir).pipe(livereload());
    });
    gulp.watch(stylesDir, function(){
        gulp.src(stylesDir).pipe(livereload());
    });
    gulp.watch(assetsDir + 'js/*.js', ['lint', 'scripts']);
    gulp.watch(assetsDir + 'styles/*.scss', ['sass']);
});

gulp.task('default', ['copyfonts', 'icons', 'lint', 'sass', 'scripts']);