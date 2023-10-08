const formRegistration = document.querySelector('.reg__form');
const sendRegistration = document.querySelector('.registration');
const pathRegistration = '../sys/Registration.php';

const reg = new ToFetch(pathRegistration, formRegistration, sendRegistration);
reg.event();
log.close();