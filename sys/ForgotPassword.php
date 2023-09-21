<?php
    require 'db.php';
    $email = $_POST['email'];
    $send = $_POST['send'];
    //написать функцию message для JSON формата

    class Forgot {
        public $email;
        public $connect;
        public $id;
        public $subject;
        public $message;
        public $headers;
        public function check(){
            $sel = "SELECT * FROM registration WHERE email = '$this->email';";
            if($result = $this->connect->query($sel)){
                foreach($result as $key => $value){
                    
                }
                if($this->email != ''){
                    if($this->email == $value['email']){
                        $result = mail($this->email, $this->subject, $this->message, $this->headers);
                        if($result){
                            echo 1;
                        }else{
                            echo 0;
                        }
                    }else{
                        echo 'the user with the email '.$this->email.' does not exist';
                    }
                }else{
                    echo 'Поле пустое';
                }
            }
        }
        
    }
    $forgot = new Forgot();
    $forgot->email = $email;
    $forgot->connect = $connect;
    $forgot->subject = 'Востановление пароля';
    $forgot->message ='Ваша ссылка на востановление пароля <a href="http://casefour/passwordrecovery?email='.$forgot->email.'&recover='.password_hash($forgot->email, PASSWORD_DEFAULT).'">Ссылка</a>';
    $forgot->headers = 'Content-type: text/html; charset=utf-8\r\n';
    $forgot->check();

?>