<?php
    session_start();
    unset($_SESSION['login']);
    echo 'Вы вышли';
    header('location: /');

?>