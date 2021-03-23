var hamburger;
var bars;
var navbar;
var likey;
window.onload = function() {
    
    AOS.init({
        duration: 1200,
        once: true,
    })
    
    
    /*NAVBAR-SCROLL*/
    /*const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', scroller);
    
    function scroller() {
        var position = window.pageYOffset;

        if (position > 90) {
            navbar.classList.add('scrolldown');
        } else {
            navbar.classList.remove('scrolldown');
        }
    }*/
    /*NAVBAR-SCROLL-END*/
    
    
    /*LOADER*/
    /*document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 4000);*/   
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

    let swiperMain = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1500,
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
            delay: 8000,
            disableOnInteraction: false,
        }*/
    });


let swiperAchievements = new Swiper('.swiper-container-achivements', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      speed: 1500,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
    autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    
    });

/*SMOOTH-SCROLL*/
document.querySelectorAll('a[href^="#"').forEach(link => {

    link.addEventListener('click', function(e) {
        e.preventDefault();

        let href = this.getAttribute('href').substring(1);

        const scrollTarget = document.getElementById(href);

        const topOffset = document.querySelector('.scrollby').offsetHeight;
        // const topOffset = 0; // если не нужен отступ сверху 
        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - topOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});
/*SMOOTH-SCROLL-END*/