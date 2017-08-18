var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    runSequence = require('run-sequence'),
    livereload = require('gulp-livereload'),
    minify = require('gulp-minify'),
    critical = require('critical');

var themePath = './public/wp-content/themes/starter/';

var paths = {
    sass: [themePath + 'assets/_sass/**/*.scss'], 
    js: [themePath + 'assets/js/**/*.js']
};

gulp.task('default', function() {
    return gutil.log('Gulp is running!');
});

gulp.task('sass', function(done) {
    return gulp.src(paths.sass)
        .pipe(sass()).on('error', sass.logError)
        .pipe(rename({ suffix: '.min' }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie 8', 'ie 9', '> 1%'],
            cascade: false
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest(themePath + 'assets/css'));
});

gulp.task('compress', function() {
    return gulp.src(paths.js)
        .pipe(minify({
            ext:{
                src:'-debug.js',
                min:'.js'
            },
            ignoreFiles: ['-min.js']
        }))
        .pipe(gulp.dest(themePath + 'assets/js'));
});

gulp.task('critical', function (cb) {
    critical.generate({
        base: './',
        src: 'http://starter-wp.dev/',
        dest: themePath + 'assets/css/critical.min.css',
        minify: true,
        dimensions: [{
            height: 768,
            width: 640
        }, {
            height: 1024,
            width: 768
        }, {
            height: 900,
            width: 1300
        }], 
        ignore: ['@font-face',/url\(/], 
        include: [/^\.contact-form/]
    });
});

gulp.task('watch', function() {
    gulp.watch(paths.sass, ['sass']);
});
