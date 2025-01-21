'use strict';

const gulp        = require('gulp');
const sass        = require('gulp-sass')(require('sass'));

gulp.task('maincss', function(){
    return gulp.src('./assets/scss/main.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./assets/stylesheets'));
});

gulp.task('editorcss', function(){
    return gulp.src('./assets/scss/editor-style-block.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./assets/stylesheets'));
});

gulp.task('watch', function(){
    gulp.watch('./assets/scss/**/*.scss', gulp.parallel('maincss', 'editorcss'));
});

// Default.
gulp.task('default', gulp.series('watch'));

// Build. Same main css file, just minify for production
gulp.task('build', function(){
    return gulp.src('./assets/scss/main.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./assets/stylesheets'));
});
