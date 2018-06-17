var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('hello', function() {
    console.log('>>>>>>>>>>>');
    console.log('Hello Jacek');
    console.log('<<<<<<<<<<<');
});

var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expanded',
    precision: 8
};

var sassOptionsCompressed = {
    errLogToConsole: true,
    outputStyle: 'compressed',
    precision: 8
};

gulp.task('callsass', function(){
    return gulp.src('scss/HomePage.scss')
        .pipe(sass(sassOptions))
        .on('error',  sass.logError)
        .pipe(gulp.dest('css'));
});

gulp.task('obserwuj',function() {
    gulp.watch('SASS/*.sass', ['callsass'])
        .on('change', function(event) {
            console.log('File ' + event.path + ' was ' + event.type);}
        );
});

gulp.task('styles', function() {
    gulp.src('SASS/**/*.sass')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(concat('styles.min.css'))
        .pipe(gulp.dest('./css/'));
});

gulp.task('lol', function() {
    gulp.src('SASS/**/*.sass')
        .pipe(sass({outputStyle: 'normal'}))
        .pipe(concat('other.css'))
        .pipe(gulp.dest('./css/'));
});
