<?php
    if(isset($_GET['email']) && isset($_GET['recover'])){
        echo
        '
        <div class="container">
            <section class="main__section">
                <article class="main__article">
                    <div class="main__div">
                        <div class="main__text">
                            <h2>Recover password</h2>
                            <p>entering your new password</p>
                        </div>
                        <form action="" method="post" class="formRecover">
                            <input type="text" name="pass" placeholder="Your new password">
                            <input type="text" name="rep_pass" placeholder="Repeat your new password">
                            <input type="submit" value="send" name="send" class="recoverSend">
                        </form>
                        <div>
                            <span class="message" style="color: red"></span>
                        </div> 
                    </div>
                </article>
            </section>
        </div>
        ';
    }
?>