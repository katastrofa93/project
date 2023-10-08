<?php
    require 'db.php';
    $email = $_POST['email'];
    $send = $_POST['send'];
    

    class Forgot {
        public $email;
        public $connect;
        public $id;
        public $subject;
        public $message;
        public $headers;
        public function message($answer){
            $message = array($answer);
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        public function check(){
            $sel = "SELECT * FROM registration WHERE email = '$this->email';";
            if($result = $this->connect->query($sel)){
                foreach($result as $key => $value){
                    
                }
                if($this->email != ''){
                    if($this->email == $value['email']){
                        $result = mail($this->email, $this->subject, $this->message, $this->headers);
                        if($result){
                            $this->message('A link for password recovery has been sent to your email');
                        }else{
                            $this->message('Error');
                        }
                    }else{
                        $this->message('the user with the email '.$this->email.' does not exist');
                    }
                }else{
                    $this->message('The password recovery field is empty');
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