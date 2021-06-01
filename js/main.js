let hamburger;
let bars;
let navbar;
let fader;
let likey;


window.onload = function() {
    /*LOADER*/
    let preloader = document.getElementById('preloader');
    let body = document.getElementById('tpg');
    
    preloader.classList.add('hide-preloader');
    setInterval(function() {
        preloader.classList.add('preloader-hidden');
        body.classList.remove('overflow-hidden');
    }, 1500);
    /*LOADER-END*/
    
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
    
    
    
    
    
    /*HAMBURGER*/
    hamburger = document.getElementById('hamburger');
	bars = hamburger.getElementsByTagName('div');
	mnav = document.getElementById('mnav');
    navbar = document.getElementById('navbar');
    fader = document.getElementById('fader');
    
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
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        }
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
            delay: 3000,
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
        let href = window.location.hash.substring(1);

        const scrollTarget = document.getElementById(href);

        const topOffset = document.querySelector('.scrollby').offsetHeight;
            // const topOffset = 0; // если не нужен отступ сверху 
        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - 2 * topOffset;
        
        setTimeout(function() {
            $('html,body').animate({
            scrollTop: offsetPosition
            },1000,'swing');
        }, 1500);
    } 
});


/*TABLE-CLASS-DELETE*/
let tableList = document.querySelectorAll(".wp-block-table")
for (let i = 0; i<tableList.length; i++){
    if (tableList[i].parentElement.classList.contains("table")){
        tableList[i].parentElement.classList.remove("table");
        tableList[i].parentElement.classList.add("table-block");
    }
    if (tableList[i].offsetParent.classList.contains("col-lg-6")){
        tableList[i].offsetParent.classList.remove("col-lg-6");
        tableList[i].offsetParent.classList.add("col-lg-12");
    }
}
/*TABLE-CLASS-DELE-END*/

