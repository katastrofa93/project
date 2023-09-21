<?php
    $connect = new mysqli('localhost', 'root', '', 'project_4');
    //$create_db = 'CREATE DATABASE project_4';
    /*$create_table = 'CREATE TABLE registration (id INTEGER AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(45), email VARCHAR(45), password VARCHAR(60), photo VARCHAR(45), dTime VARCHAR(30))';*/
    
    $create_table = 'CREATE TABLE subscribe (id INTEGER AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(45))';
    if($connect->query($create_table)){
        echo 1;
    }
?>