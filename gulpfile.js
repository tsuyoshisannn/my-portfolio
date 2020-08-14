var gulp = require('gulp');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');


// 画像圧縮
var paths = {
    srcDir : 'src',
    dstDir : 'dist'
};
// jpg, png, gif画像の圧縮タスク
gulp.task('imagemin', function(){
    var srcGlob = paths.srcDir + '/**/*.+(jpg|jpeg|png|gif)';
    var dstGlob = paths.dstDir;
    gulp.src(srcGlob)
    .pipe(changed(dstGlob))
    .pipe(imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.mozjpeg({progressive: true}),
        imagemin.optipng({optimizationLevel: 5})
    ]
    ))
    .pipe(gulp.dest(dstGlob));
});

// Gulpを使ったファイルの監視
// watch()を使う
// 第一引数は監視したいディレクトリ配下
// 第二引数に変更があった場合に実行するタスクを配列型式で指定
gulp.task('watch', function(){
    gulp.watch(paths.srcDir + '/**/*', ['imagemin']);
});