const { series, src, dest, watch } = require("gulp"),
  sass = require("gulp-sass"),
  minifyCSS = require("gulp-csso"),
  babel = require("gulp-babel"),
  concat = require("gulp-concat"),
  merge = require("gulp-merge"),
  notify = require("gulp-notify"),
  browserSync = require("browser-sync").create(),
  localSiteUrl = "dev.bluvida.com";

function css() {
  return src("./assets/src/sass/main.scss")
    .pipe(sass())
    .pipe(
      sass({
        includePaths: ["./node_modules/bootstrap/scss/"],
      })
    )
    .pipe(minifyCSS())
    .pipe(concat("main.min.css"))
    .pipe(dest("./assets/dist/css/"))
    .pipe(browserSync.stream())
    .pipe(
      notify({ message: "CSS main.min.css has been compiled.", onLast: true })
    );
}

function js() {
  return src("./assets/src/js/main.js"")
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(concat("main.min.js"))
    .pipe(dest("./assets/dist/js/"))
    .pipe(
      notify({ message: "JS main.min.js has been compiled.", onLast: true })
    )
		.pipe(browserSync.stream({ once: true }));
}

function browser() {
  browserSync.init({
    proxy: localSiteUrl,
    injectChanges: true,
    files: [
      "./**/*.php",
      "./assets/src/sass/**/*.scss",
      "./assets/src/js/**/*.js",
    ],
  });

  watch("./assets/src/sass/**/*.scss", css);
  watch("./assets/src/js/**/*.js", js).on("change", browserSync.reload);
}

function copy() {
  var fontawesomewebfonts = src(
    "./node_modules/@fortawesome/fontawesome-pro/webfonts/**/*"
  ).pipe(dest("./assets/dist/webfonts"));
  return merge(fontawesomewebfonts);
}

exports.css = css;
exports.js = js;
exports.copy = copy;
exports.default = series(css, js, browser);
