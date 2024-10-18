
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