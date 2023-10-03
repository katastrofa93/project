<?php
    require '../sys/db.php';
    $email = htmlentities(trim($_POST['email']));
    //написать подписку
    class Subscribe{
        public $email;
        public $connect;
        function __construct($email, $connect){
            $this->email = $email;
            $this->connect = $connect;
        }
        function message($request){
            $message = array($request);
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        function insert(){
            $insert = "INSERT INTO subscribe (email) VALUES ('$this->email')";
            if($this->connect->query($insert)){
                $this->message('Thank for subscribe');
                //отправить письмо на почту
            }else{
                $this->message($this->connect->error);
            }
        }
        function compare($email, $fetchEmail){
            if($email != ''){
                if($email != $fetchEmail){
                    $this->insert();
                }else{
                    $this->message('User with email '.$email.' just subscribed');
                }
            }else{
                $this->message('Field subscribe is not just empty');
            }
        }
        function select(){
            $sel = "SELECT * FROM subscribe WHERE email = '$this->email'";
            if($result = $this->connect->query($sel)){
                $value = $result->fetch_assoc();
                $this->compare($this->email, $value['email']);
            }else{
                $this->message($this->connect->error);
            }
        }
    }

   $subscribe = new Subscribe($email, $connect);
   $subscribe->select();
    
    
?>