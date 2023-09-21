<?php
//Это то, что приходит на почту
    echo '
    <div class="container">
        <section class="main__section">
            <article class="main__article">
                <div class="main__div">
                    <div class="main__text">
                        <h2>Restore password</h2>
                        <p>to recover your password, enter your email address that you provided during registration</p>
                    </div>
                    <form action="../sys/ForgotPassword.php" method="post" class="form">
                        <input type="text" name="email" placeholder="Your Email">
                        <input type="submit" value="send" name="send">
                    </form>
                    <div>
                        <span class="message" style="color: red"></span>
                    </div> 
                </div>
            </article>
        </section>
    </div>
    ';
?>