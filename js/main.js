let hamburger;
let bars;
let navbar;
let fader;
let likey;


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
    navbar = document.getElementById('navbar');
    fader = document.getElementById('fader');
    let body = document.getElementById('tpg');
    let ulList = mnav.querySelectorAll('.menu-item-has-children');
    let activeNav = mnav.getElementsByClassName("active");
    let button = document.getElementById('back-button');
    
    function hamburgerMenu() {
        for (let b = 0; b < bars.length; b++) {
            bars[b].classList.toggle('clicked');
		}
        body.classList.toggle('no-scroll');
		navbar.classList.toggle('navbar-open');
		mnav.classList.toggle('mnav');
        fader.classList.toggle('active');
	}
	
	hamburger.addEventListener('click', hamburgerMenu);
    /*HAMBURGER-END*/
    
    
    /*DROPDOWN*/
    for (let i = 0; i < ulList.length; i++) {
        if (ulList[i].classList.contains('menu-item-has-children')){ 
            ulList[i].addEventListener("click", function () {
                ulList[i].classList.add("active");
                ulList[i].parentNode.classList.add("disable");
                button.classList.remove("disable");
            })
        }
    }
    
    button.addEventListener("click", function (){
        let last = activeNav[activeNav.length-1];
        for (let i = 0; i < ulList.length; i++) {
            if (activeNav.length === 0){
                button.classList.add("disable");
            }else{
                last.classList.remove("active");
                last.parentNode.classList.remove("disable");
            }
        } 

    })
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
document.querySelectorAll('a[href^="#"]').forEach(link => {

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


// direct browser to top right away
if (window.location.hash)
    scroll(0,0);
// takes care of some browsers issue
setTimeout(function(){scroll(0,0);},1);

$(function(){

// if we have anchor on the url (calling from other page)
if(window.location.hash){
    // smooth scroll to the anchor id
    $('html,body').animate({
        scrollTop:$(window.location.hash).offset().top - 500
        },1000,'swing');
    }
});