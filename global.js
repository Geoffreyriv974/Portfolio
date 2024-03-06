// script pour l'affichage des projet Python
document.getElementById('pythonTitle').addEventListener('click', function() {
    var carousel = document.getElementById('carousel_project_python');
    if (carousel.style.display === 'none' || carousel.style.display === '') {
        carousel.style.display = 'block';
    } else {
        carousel.style.display = 'none';
    }
});


// script pour l'affichage des projet Web
document.getElementById('webTitle').addEventListener('click', function() {
    var carousel = document.getElementById('carousel_project_web');
    if (carousel.style.display === 'none' || carousel.style.display === '') {
        carousel.style.display = 'block';
    } else {
        carousel.style.display = 'none';
    }
});

// script pour l'affichage des projet C++
document.getElementById('C++Title').addEventListener('click', function() {
    var carousel = document.getElementById('carousel_project_c++');
    if (carousel.style.display === 'none' || carousel.style.display === '') {
        carousel.style.display = 'block';
    } else {
        carousel.style.display = 'none';
    }
});

document.querySelector('.menu-burger').addEventListener('click', function () {
    document.querySelector('.menu').classList.toggle('active');
});

// script pour gérer le déroulement de la page
$(document).ready(function () {
    var target = window.location.hash;

    if (target) {
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    }
});