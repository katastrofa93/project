const formSubscribe = document.querySelector('.footer__form');
const srcSubscribe = '../sys/Subscribe.php';
const sendSubscribe = document.querySelector('.form-send');

const subscribe = new ToFetch(srcSubscribe, formSubscribe, sendSubscribe);
subscribe.event();
    
    


