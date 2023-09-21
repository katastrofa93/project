const formRecover = document.querySelector('.formRecover');
const pathRecover = '../sys/RecoverPassword.php';
const sendRecover = document.querySelector('.recoverSend');
let recover = new ToFetch(pathRecover, formRecover, sendRecover);
recover.event();