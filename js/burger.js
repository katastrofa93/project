const header__burger = document.querySelector('.header__burger');
const header__mobile_menu = document.querySelector('.header__mobile-menu');
const header = document.querySelector('header');
const body = document.querySelector('body');
let switcher = 0;
header__burger.addEventListener('click', ()=>{
    if(body.clientWidth < 1025){
        if(switcher == 0){
            header__mobile_menu.style.transform = `translateY(${header.clientHeight}px)`;
            switcher = 1;
        }else{
            header__mobile_menu.style.transform = `translateY(-100%)`;
            switcher = 0;
        }  
    }   
})


