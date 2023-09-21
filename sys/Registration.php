<?php
    require '../sys/db.php';
    $login = htmlentities(trim($_POST['login']));
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['pass']));
    $rep_password = password_hash(htmlentities(trim($_POST['pass_rep'])), PASSWORD_DEFAULT);
    $checkbox = $_POST['check'];
    $date = date('d F o H:i');

    function message($request){
        $message = array(
            $request,
        );
        echo json_encode($message, JSON_UNESCAPED_UNICODE);
    }
    
    $sel = "SELECT * FROM registration WHERE email = '$email'";
    if($result = $connect->query($sel)){
        $value = $result->fetch_assoc();
        if($login != ''){
            if($email != ''){
                if($email != $value['email']){
                    if($password !=''){
                        if(password_verify($password,$rep_password )){
                            if(!empty($checkbox)){
                                $insert = "INSERT INTO registration (login, email, password, dTime) VALUES('$login', '$email', '$rep_password', '$date')";
                                if($connect->query($insert)){
                                    message('Your are registrated');
                                }else{
                                    message('Что то пошло не так');
                                }
                            }else{
                                message('checkbox is empty');
                            }
                        }else{
                            message('password not match');
                        }
                    }else{
                        message('field password is empty');
                    }
                }else{
                    message('a user with this email '.$email.' is already registered');
                }
            }else{
                message('field EMAIL is empty');
            }
        }else{
            message('field LOGIN is empty');
        }
    }else{
        message($connect->error);
    }
?>