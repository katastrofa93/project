<?php

echo '

    <div class="container">
        <section class="login__column">
            <div class="login__block">
                <span>Log In</span>
                <form action="" method="post" class="login__form" enctype="multipart/form-data">
                    <div class="login__name">
                        <label for="">Your name:</label>
                        <input type="text" name="login" class="name-login">
                    </div>
                    <div class="login__password">
                        <label for="">Your password:</label>
                        <input type="password" name="password">
                    </div>
                    <div class="login__submit">
                        <input type="submit" name="submit" class="loginSend" value="send">
                    </div>
                    <span class="message" style="color: red"></span>
                </form>
                <ul class="login__actions">
                    <li class="login__actions-li"><a href="/registration">Registration</a></li>
                    <li class="login__actions-li"><a href="/forgotpassword">Forgot password</a></li>
                </ul>
                <div>
                     <span class="message" style="color: red"></span>
                </div> 
            </div>
        </section>
    </div>

';

?>