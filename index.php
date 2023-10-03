<?php
    session_start();
    require 'sys/Rout.php';
    $url = key($_GET);
    $routing = new Rout();
    $routing->addRout('/', 'home.php');
    $routing->addRout('/login', 'login.php');
    $routing->addRout('/PrivacyPolicy', 'PrivacyPolicy.php');
    $routing->addRout('/registration', 'registration.php');
    $routing->addRout('/forgot-password', 'forgotPassword.php');
    $routing->addRout('/passwordrecovery', 'passwordRecovery.php');

    function enterExit(){
        if($_SESSION['login']){
            echo '
            <li class="header__li">
                <span class="tab icon-exit"></span> 
                <a class="link out" href="../sys/LogOut.php">Log Out</a>
            </li>
            ';
        }else{
            echo '
            <li class="header__li">
                <span class="tab icon-user"></span> 
                <a class="link" href="/login">Log In</a>
            </li>
            ';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/connect/connect.css">
    <title>Cosiness</title>
</head>
<body>
    <div class="wrapper">
        <div class="modal">
            <h2></h2>
        </div>
        <header>
            <div class="container">
                <section class="header__section">
                    <div class="header__logo">
                        <h2>Cosiness</h2>
                    </div>
                    <div class="header__burger">
                        <span class="burger"></span>
                    </div>
                    <div class="header__mobile-menu">
                        <ul class="header__ul">
                            <li class="header__li">
                                <span class="tab icon-home3"></span>    
                                <a class="link" href="/">Home</a></li>
                            <li class="header__li">
                                <span class="tab icon-paragraph-right"></span> 
                                <a class="link" href="/about">About</a></li>
                            <li class="header__li">
                                <span class="tab icon-compass2"></span> 
                                <a class="link" href="/contacts">Contacts</a></li>
                                <?= enterExit(); ?>
                        </ul>
                    </div>
                </section>
                <section class="header__hello">
                    
                </section>
            </div>
        </header>
        <main>
            <div class="goods__list"></div>
            <?php 
                $routing-> routing('/'.$url);  
            ?>
        </main>
        <footer>
            <div class="container">
                <section class="footer__section">
                    <ul class="footer__ul">
                        <li class="footer__li"><a href="/">Home</a></li>
                        <li class="footer__li"><a href="/about">About</a></li>
                        <li class="footer__li"><a href="/contacts">Contacts</a></li>
                        <li class="footer__li"><a href="/PrivacyPolicy">Privacy policy</a></li>
                    </ul>
                    <div class="footer__subscribe">
                        <div class="subscribe-social">
                            <p>Subscribe:</p>
                            <ul class="subscribe-social__ul">
                                <li class="subscribe-social__li"><a href="#" class="icon-vk"></a></li>
                                <li class="subscribe-social__li"><a href="#" class="icon-instagram"></a></li>
                                <li class="subscribe-social__li"><a href="#" class="icon-telegram"></a></li>
                            </ul>
                        </div>
                        <form action="" method="post" class="footer__form" enctype="multipart/form-data">
                            <input type="text" placeholder="Your Email" class="form-email" name="email">
                            <input type="submit" value="Send" class="form-send" name="subscribe">
                        </form>
                    </div>
                    <div class="footer__date">
                        <span><?php echo date('Y'); ?></span>
                    </div>
                </section>
            </div>
        </footer>
    </div>
    <script src="js/autor.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/subscribe.js"></script>
    <script src="js/login.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/recoverPassword.js"></script>
    <script>
        const list = document.querySelector('.home__carts');
        let arrayGoods = [
            { title: 'Зеркало', price: 150, img: 1},
            { title: 'Корзина', price: 50, img: 2 },
            { title: 'Лампа', price: 350, img: 3 },
            { title: 'Картины', price: 250, img: 4 },
            { title: 'Цветы', price: 150, img: 5 },
            { title: 'Подушки', price: 50, img: 6 },
            { title: 'Светильники', price: 350, img: 7 },
            { title: 'Шторы', price: 250, img: 8 },
        ];
            let result = arrayGoods.map((item, index)=>{
                return ` <article class="cart">
                            <img src="images/carts/${item.img}.jpg" alt="cart">
                            <button class="cart__buy">${item.title}: ${item.price}</button>
                    </article>`;
            }).join('');
            list.innerHTML = result;
    </script>
    <script>
        //console.log(formLogin.login);
    </script>
</body>
</html>