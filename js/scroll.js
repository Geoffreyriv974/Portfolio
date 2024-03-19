// script pour gérer le déroulement de la page
$(document).ready(function () {
    var target = window.location.hash;

    if (target) {
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    }
});
