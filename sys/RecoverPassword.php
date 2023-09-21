<?php
    require 'db.php';
    //класс востановления пароля
    class Recover{
        public $email;
        public $connect;
        public $password;
        public $repeatPassword;
        function __construct($email, $password, $repeatPassword, $connect){
            $this->email = $email;
            $this->password = $password;
            $this->repeatPassword = $repeatPassword;
            $this->connect = $connect;
        }
        function message($request){
            $message = array(
                $request,
            );
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        function update(){//метод обновления пароля
            $upd = "UPDATE registration SET password = '$this->repeatPassword' WHERE email = '$this->email'";
            if($this->connect->query($upd)){
                $this->message('Пароль сменен');
            }else{
                $this->message($this->connect->error);
            } 
        }
        function match(){//метод сравнивая
            if(isset($this->email)){
                if($this->password != ''){
                    if(password_verify($this->password, $this->repeatPassword)){
                        $this->update();
                    }else{
                        $this->message('Пароли не совпадают');
                    }
                }else{
                    $this->message('Поле пароль не должно быть пустым');
                }
            }else{
                $this->message('Что-то пошло не так');
            }
        }
    }

    $recover = new Recover(htmlentities(trim($_GET['email'])), htmlentities(trim($_POST['pass'])),password_hash(htmlentities(trim($_POST['rep_pass'])), PASSWORD_DEFAULT), $connect);
    $recover->match();
    

?>