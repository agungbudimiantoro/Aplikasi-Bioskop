M.AutoInit();

$(document).ready(function () {
    $('.sidenav').sidenav();
});

$(document).ready(function () {
    $('.slider').slider({
        interval: 4500,
        duration: 1000
    });
});


$(document).ready(function () {
    $('.parallax').parallax();
});

$(document).ready(function () {
    $('.materialboxed').materialbox();
});

M.textareaAutoResize($('#textarea1'));