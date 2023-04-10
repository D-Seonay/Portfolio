// SECTION CHANGE VISIBILITY
// Récupère les boutons de section
const sectBtn = document.querySelectorAll('.control');
// Pour chaque bouton le stocker dans la variable btn
sectBtn.forEach(btn => {
    // Si le bouton est cliqué faire :
    btn.addEventListener('click', function(){
        // Retirer la classe active-btn à la balise a avec les classes control et active-btn
        document.querySelector('a.control.active-btn').classList.remove('active-btn');
        // Ajoute la classe active-btn au bouton cliqué
        btn.classList.add('active-btn');
        // Retire la classe active à la balise section avec les classes section et active
        document.querySelector('section.section.active').classList.remove('active');
        // Ajoute la classe active à la balise section#(data-id du btn cliqué)
        document.querySelector(`section#${this.dataset.id}`).classList.add('active');
    })
})

//Toggle theme
const themeBtn = document.querySelector('.theme-btn'); //creation de themeBtn et le liee a la class theme-btn
themeBtn.addEventListener('click',() =>{ //ecouter l'event click sur le btn
    let element = document.body;  // declacrqation de la variable element sur le bloc courant
    element.classList.toggle('light-mode') //active le mode "light-mode" en toggle donc activation <---> desactivation
})


//HAMBURGER MENU
const menuHamburger = document.querySelector(".burger-menu-btn") //faire de menuHamburguer la classe menu-burger
const navLinks = document.querySelector(".nav-links")//

menuHamburger.addEventListener('click',()=>{ //ecoute l'event clisk sur le boutton
    navLinks.classList.toggle('mobile-menu') // ajoute la classe mobile-menu losque le bouton est click sur navLinks soit nav-links
})

//var menu = document.getElementById("menu")
