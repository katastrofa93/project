const pathForgot = '../sys/ForgotPassword.php';
const formForgot = document.querySelector('.formForgot');
const sendForgot = document.querySelector('.sendForgot');

const forgot = new ToFetch(pathForgot, formForgot, sendForgot);
forgot.event();
forgot.close();