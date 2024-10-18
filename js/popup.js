// Affichage popup au survol du bouton
$(document).ready(function () {
    $(".myButton").hover(function () {
        // Affiche la popup associée
        $(this).next(".popup").toggle();
    });
});
