var gulp = require('gulp');
var sass = require('gulp-sass');

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
    gulp.watch('scss/*.scss', ['callsass'])
        .on('change', function(event) {
            console.log('File ' + event.path + ' was ' + event.type);}
        );
});