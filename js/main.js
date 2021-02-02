var hamburger;
var bars;
var navbar;
/*var likey;*/
window.onload = function() {
    
    AOS.init({
        duration: 1200,
        once: true,
    })
    
    
    /*NAVBAR-SCROLL*/
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', scroller);
    
    function scroller() {
        var position = window.pageYOffset;

        if (position > 90) {
            navbar.classList.add('scrolldown');
        } else {
            navbar.classList.remove('scrolldown');
        }
    }
    /*NAVBAR-SCROLL-END*/
    
    
    /*LOADER*/
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 4000);
    /*LOADER-END*/
    
    
    
    
    /*HAMBURGER*/
    hamburger = document.getElementById('hamburger');
	bars = hamburger.getElementsByTagName('div');
	mnav = document.getElementById('mnav');
    
    function hamburgerMenu() {
		for (var b = 0; b < bars.length; b++) {
			bars[b].classList.toggle('clicked');
		}
		navbar.classList.toggle('navbar-open');
		mnav.classList.toggle('mnav');
	}
	
	hamburger.addEventListener	('click', hamburgerMenu);
    /*HAMBURGER-END*/
    
    
    
    
    /*DROPDOWN*/
    const cbox = document.querySelectorAll(".menu-item-has-children");

    for (let i = 0; i < cbox.length; i++) {
     cbox[i].addEventListener("click", function() {
       cbox[i].classList.toggle("active");
     });
 }
    /*DROPDOWN-END*/
}



var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        /*autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        }*/
    });

