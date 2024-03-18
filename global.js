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

function changeTab(index) {
    // Changement de tab pour la partie d'affichage des onglets
    const tabs = document.querySelectorAll('.tab-header div');
    const indicator = document.querySelector('.tab-indicator');
    const tabWidth = tabs[0].offsetWidth;
    indicator.style.left = (index * tabWidth) + 'px';

    for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active');
    }
    tabs[index].classList.add('active');

    // Changement de tab pour la partie des contenus des onglets
    const tabContents = document.querySelectorAll('.project-info');
    tabContents.forEach(function(tabContent) {
        tabContent.classList.remove('active');
    });
    tabContents[index].classList.add('active');
}


/*<div id="carousel_project_python" className="carousel slide carouselExampleCaptions" style="display: none">
    <div className="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" className="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
    </div>
    <div className="carousel-inner">
        <div className="carousel-item active">
            <img src="image/calculator.png" className="d-block picture_project" alt="calculatrice"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Calculatrice</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-eye"></i>
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
        <div className="carousel-item">
            <img src="image/time-bomb.png" className="d-block picture_project" alt="démineur"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Démineur</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
        <div className="carousel-item">
            <img src="image/la-cyber-securite.png" className="d-block picture_project" alt="secure"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Generate-password</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
        <div className="carousel-item">
            <img src="image/rope.png" className="d-block picture_project" alt="pendu"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Pendu</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
        <div className="carousel-item">
            <img src="image/firewall.png" className="d-block picture_project" alt="casse-brique"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Casse-Brique</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
    </div>
    <button className="carousel-control-prev" type="button" data-bs-target="#carousel_project_python"
            data-bs-slide="prev">
        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Previous</span>
    </button>
    <button className="carousel-control-next" type="button" data-bs-target="#carousel_project_python"
            data-bs-slide="next">
        <span className="carousel-control-next-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Next</span>
    </button>
</div>



<div id="carousel_project_web" className="carousel slide carouselExampleCaptions" style="display: none">
    <div className="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" className="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
    </div>
    <div className="carousel-inner">
        <div className="carousel-item active">
            <img src="image/sport-car.png" className="d-block picture_project" alt="voiture"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Auto-école de Mormal</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-eye"></i>
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
        <div className="carousel-item">
            <img src="image/boutique.png" className="d-block picture_project" alt="shop"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>SuperMarkit</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
    </div>
    <button className="carousel-control-prev" type="button" data-bs-target="#carousel_project_web" data-bs-slide="prev">
        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Previous</span>
    </button>
    <button className="carousel-control-next" type="button" data-bs-target="#carousel_project_web" data-bs-slide="next">
        <span className="carousel-control-next-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Next</span>
    </button>
</div>



<div id="carousel_project_c++" className="carousel slide carouselExampleCaptions" style="display: none">
    <div className="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" className="active" aria-current="true" aria-label="Slide 1"></button>
    </div>
    <div className="carousel-inner">
        <div className="carousel-item active">
            <img src="image/donjon.png" className="d-block picture_project" alt="donjon"/>
            <div className="carousel-caption d-none d-md-block">
                <h5>Dungeon and Monsters</h5>
                <div className="icon-project">
                    <i className="fa-solid fa-eye"></i>
                    <i className="fa-solid fa-download"></i>
                    <i className="fa-solid fa-info"></i>
                </div>
            </div>
        </div>
    </div>
    <button className="carousel-control-prev" type="button" data-bs-target="#carousel_project_web" data-bs-slide="prev">
        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Previous</span>
    </button>
    <button className="carousel-control-next" type="button" data-bs-target="#carousel_project_web" data-bs-slide="next">
        <span className="carousel-control-next-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Next</span>
    </button>
</div>*/
