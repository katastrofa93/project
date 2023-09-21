let modal = document.querySelector('.message');
const pathLogin = '../sys/Login.php';
const formLogin = document.querySelector('.login__form');
const sendLogin = document.querySelector('.loginSend');

const log = new ToFetch(pathLogin, formLogin, sendLogin);
log.event();

