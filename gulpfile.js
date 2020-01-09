(function () {
    "use strict";

    var
		gulp = require("gulp"),
		less = require("gulp-less"),
		eslint = require("gulp-eslint"),
        minifyCSS = require("gulp-minify-css"),
        ngAnnotate = require("gulp-ng-annotate");

    //compile js files
    gulp.task("lint", function () {
        return gulp.src([
			"gulpfile.js",
			".Scripts/app/*.js",
			".Scripts/app/controllers/*.js",
            ".Scripts/app/services/*.js"
        ])
		.pipe(eslint({
            "globals": {
                "_": true,
                "angular": true,
                "document": true,
                "module": true,
                "require": true,
                "window": true
            },
            "rules": {
                "no-underscore-dangle": 0
            }
        }))
		.pipe(eslint.format());
    });

    //less for css
    gulp.task("less", function () {
        return gulp.src("./Styles/less/bootstrap.less")
            .pipe(less())
            .pipe(gulp.dest("./Styles"));
    });

    //minify css
    gulp.task("minifyCSS", ["less"], function () {
        return gulp.src([
			"./Styles/*.css"
        ])
		.pipe(minifyCSS())
		.pipe(gulp.dest("./Styles/min-css"));
    });

    //angular dependency injection
    gulp.task("ngannotate", ["lint"], function () {
        // copy json files to ngannotate folder
        gulp.src([
            "./Scripts/app/*.json",
            "./Statics/app/**/*.json"
        ])
		.pipe(gulp.dest("./ngannotate"));

        // dependency injection added if needed.
        return gulp.src([
            "./Scripts/app/*.js",
            "./Scripts/app/**/*.js"
        ])
		.pipe(ngAnnotate())
		.pipe(gulp.dest("./ngannotate"));
    });

    //main program
    gulp.task("default", function () {
        gulp.start("minifyCSS", "ngannotate");
    });
})();
