var config = {
        url: 'agi.local.mfos.co.uk',
        themeName: 'agi',
        themeDesc: 'AGI WP Project',
        autoprefixer: ['last 2 versions', 'IE 10'],
        stylelintConfig: base + '.stylelintrc.json'
    },

    gulp                = require('gulp'),
    plugins             = require('gulp-load-plugins')(),
    composer            = require('gulp-composer'),
    gutil               = require('gulp-util'),

    // Linting
    postcss             = require('gulp-postcss'),
    reporter            = require('postcss-reporter'),
    syntax_scss         = require('postcss-scss'),
    stylelint           = require("stylelint"),

    //cleancss            = require('postcss-clean'),
    cleancss            = require('gulp-clean-css'),
    autoprefixer        = require('autoprefixer'),

    runSequence         = require('run-sequence'),
    pngquant            = require('imagemin-pngquant'),
    browserSync         = require('browser-sync'),
    del                 = require('del'),
    reload              = browserSync.reload,

    base = './',
    core = 'public_html/wp',
    themeRoot = 'public_html/app/themes/' + config.themeName,
    themeDevelopment = 'public_html/app/themes/' + config.themeName + '/src',
    themeDistribution = 'public_html/app/themes/' + config.themeName + '/dist',

    paths = {
        dev: {
            dir: themeDevelopment,
        },
        styles: {
            src: themeDevelopment + '/styles',
            dest: themeDistribution + '/styles',
        },
        scripts: {
            src: themeDevelopment + '/scripts',
            dest: themeDistribution + '/scripts',
        },
        svgIcons: {
            src: themeDevelopment + '/images/svg-icon-sprite/icons/*',
            dest: themeDistribution + '/images',
        },
        images: {
            src: themeDevelopment + '/images/imgs/**/*.{jpg,png,svg,gif}',
            dest: themeDistribution + '/images',
            icon: themeDevelopment + '/meta/e1-meta-icon.png',
        }
    };

/**
 *--------------------------------------------------------------------------
 * General development dependancy tasks
 *--------------------------------------------------------------------------
 */

// Scripts - Library JS
gulp.task('scripts.lib', function() {
    return gulp.src(paths.scripts.src + '/libs/*.js')
        .pipe(plugins.order([
            '/classie.js',
            '/jquery.sticky-kit.min.js',
            '/slick.min.js'
          ]))
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.concat('scripts.lib.js'))
        .pipe(plugins.changed(paths.scripts.dest))
        .pipe(plugins.uglify())
        .pipe(plugins.rename('scripts.lib.min.js'))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(reload({ stream: true }))
});

//Scripts - Custom JS
gulp.task('scripts.custom', function() {
    return gulp.src(paths.scripts.src + '/custom/*.js')
        .pipe(plugins.order([
            '/global.js',
            '/svg-line.js'
        ]))
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.concat('scripts.custom.js'))
        .pipe(plugins.changed(paths.scripts.dest))
        .pipe(plugins.uglify())
        .pipe(plugins.rename('scripts.custom.min.js'))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(reload({ stream: true }))
});

// Scripts - Single File (not concat) JS
gulp.task('scripts.single', function() {
    return gulp.src(paths.scripts.src + '/*.js')
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.changed(paths.scripts.dest))
        .pipe(plugins.uglify())
        .pipe(plugins.rename({
            suffix: ".min"
        }))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(paths.scripts.dest));
});

// Scripts - All
gulp.task('scripts', function () {
    runSequence('scripts.lib', 'scripts.custom', 'scripts.single');
});




gulp.task('styles', function() {

    var postProcessors = [

        autoprefixer({
            browsers: config.autoprefixer,
            cascade: false
        })

    ];


    return gulp.src(paths.styles.src + '/*.scss')
        .pipe(plugins.changed(paths.styles.dest))
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.sass({
            errLogToConsole: true,
            outputStyle: 'expanded'
        }).on('error', plugins.notify.onError({
            title: 'Sass Error',
            subtitle: '<%= error.relativePath %>:<%= error.line %>',
            message: '<%= error.messageOriginal %>',
            open: 'file://<%= error.file %>',
            onLast: true,
            icon: paths.images.icon
        })))
        .pipe(postcss(postProcessors))
        .pipe(cleancss( {
	        restructuring: false,
	        format: 'uglify',
	        keepSpecialComments: 0
	        }))
        .pipe(plugins.rename('style.min.css'))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(reload({ stream: true }))
});


// Images - Image optimisation
gulp.task('images', function () {
    return gulp.src(paths.images.src)
        //.pipe(plugins.changed(paths.images.dest))
        .pipe(plugins.imagemin({
            progressive: true,
            interlaced: true,
            optimizationLevel: 7,
            use: [pngquant({ quality: '65-80'})]
        }))
        .pipe(gulp.dest(paths.images.dest))
        .on('end', function(){ gutil.log(gutil.colors.white.bgMagenta.bold('  Images Optimised')); })
});

// SVG Sprites
gulp.task('svg-icon-sprite', function () {
     gulp.src(paths.svgIcons.src)
        .pipe(plugins.svgSprite({
            mode: {
                css: {
                    spacing: {
                        padding: 5
                    },
                    dest: themeDistribution + '/styles',
                    layout: 'packed',
                    bust: false,
                    sprite: '../../dist/images/sprite.svg',
                    render: {
                        scss: {
                            dest:  '../../src/styles/sprites/_sprite.scss'
                        }
                    }
                }
            },
            svg: {
                xmlDeclaration: false,
                doctypeDeclaration: false
            }
        }))
        .pipe(gulp.dest(base));
});


/**
 *--------------------------------------------------------------------------
 * Project Build dependancy tasks
 *--------------------------------------------------------------------------
 */

// Run Composer - get WP and plugins - dependancy
gulp.task("composer", function () {
    return composer();
});
// Run Composer update - to update the lock file if changes have been made - dependancy
gulp.task("composerupdate", function () {
     return composer('update');
});

// Clean files
gulp.task('clean', function(cb) {
    return del([
        paths.styles.dest,
        paths.scripts.dest,
        paths.images.dest,
        themeDevelopment + '/styles/sprites/_sprite.scss'
    ]).then(paths => {
        gutil.log(gutil.colors.white.bgRed.bold(' Done! --Files/Folders deleted -- ', paths.join('\n')))
    });
});

// Theme build task - dependancy
gulp.task('themebuild', function(done) {
    runSequence(
        'svg-icon-sprite',
        'styles',
        'scripts',
        'images',
        function() {
            done();
            gutil.log(gutil.colors.white.bgMagenta.bold('  Theme build complete!  '))
        });
});

// Build, watch, start BrowserSync
gulp.task('build', ['watch'], function () {
    // watch files
    var files = [
        paths.styles.srcall,
        paths.scripts.src + '/**/*.js',
        themeRoot + '/**/*.php',
        themeRoot + '/views/**/*.twig'
    ];

    // initialize browsersync
    browserSync.init(files, {
        // browsersync with a php server
        proxy: config.url,
        notify: false,
        logPrefix: config.themeDesc
    });
});

// Watch - This task will watch our SCSS, JS, Image files and compile
gulp.task('watch', ['themebuild'],  function() {
    gulp.watch(paths.images.src, ['images']);
    gulp.watch(paths.styles.src + '/**/*.scss', ['styles']);
    gulp.watch(paths.scripts.src + '/libs/*.js', ['scripts.lib']);
    gulp.watch(paths.scripts.src + '/custom/*.js', ['scripts.custom']);
    gulp.watch(paths.scripts.src + '/*.js', ['scripts.single']);
    gulp.watch(paths.svgIcons.src, ['svg-icon-sprite']);
    gutil.log(gutil.colors.white.bgCyan.bold(' READY! -- Watching files -- '));
});


/**
 *--------------------------------------------------------------------------
 * BUILD PROJECT TASKS
 *--------------------------------------------------------------------------
 */

// New Theme build task - run the first time
gulp.task('newbuild', function(done) {
    runSequence(
        'composer',
        function() {
            done();
            gutil.log(gutil.colors.white.bgMagenta.bold('  New build complete!  '));
        }
    );
});

// Default task - run to start development
gulp.task('default', ['build']);