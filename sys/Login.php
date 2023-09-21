<?php
    require 'db.php';
    $name = htmlentities(trim($_POST['login']));
    $password = htmlentities(trim($_POST['password']));
    
    class LogiIn {
        public $login;
        public $password;
        public $connect;
        function __construct($login, $password, $connect) {
            $this->login = $login;
            $this->password = $password;
            $this->connect = $connect;
        }
        //функция которая возвращает ответ в виде массива и кодируется в JSON
        function message($request){
            $message = array(
                $request,
            );
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        function compare($fetchLogin, $fetchPassword){
            if($this->login !=''){
                if($this->login == $fetchLogin){
                    if($this->password != ''){
                        if(password_verify($this->password, $fetchPassword)){
                            session_start();
                            $_SESSION['login'] = $fetchLogin;
                            $this->message('Вы вошли');
                        }else{
                            $this->message('Password is not match');
                        }
                    }else{
                        $this->message('Field password is empty');
                    }
                }else{
                    $this->message('User '.$this->login.' not exist');
                }
            }else{
                $this->message('Field login is empty');
            }
        }
        function select(){
            $sel = "SELECT * FROM registration WHERE login = '$this->login'";
            if($result = $this->connect->query($sel)){
                $value = $result->fetch_assoc();
                $this->compare($value['login'], $value['password']);
            }else{
                $this->message($this->connect->error);
            }
        }
    }

    $login = new LogiIn($name, $password, $connect);
    $login->select();

    
?>