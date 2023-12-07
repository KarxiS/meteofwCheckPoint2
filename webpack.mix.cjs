const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css")

    .sass("resources/sass/app.scss", "public/css")
    .postCss("resources/css/carousel.css", "public/css")
    .postCss("resources/css/contact.css", "public/css")
    .postCss("resources/css/header.css", "public/css")
    .postCss("resources/css/index.css", "public/css")
    .postCss("resources/css/nastaveniaFarieb.css", "public/css")
    .postCss("resources/css/zariadenia.css", "public/css")
    .copyDirectory("resources/images", "public/images")
    .js("resources/js/formSpojme.js", "public/js");
