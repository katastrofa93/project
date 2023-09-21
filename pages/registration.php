<?php
    echo '
    
        <div class="container">
            <section class="reg__column">
                <div class="reg__block">
                    <span>Registration</span>
                    <form action="" method="post" class="reg__form" enctype="multipart/form-data">
                        <div class="reg__name">
                            <label for="">Your name:</label>
                            <input type="text" name="login">
                            
                        </div>
                        <div class="reg__name">
                            <label for="">Your email:</label>
                            <input type="email" name="email">
                            
                        </div>
                        <div class="reg__name">
                            <label for="">Your password:</label>
                            <input type="password" name="pass">
                            
                        </div>
                        <div class="reg__name">
                            <label for="">Repeat your password:</label>
                            <input type="password" name="pass_rep">
                            
                        </div>
                        <div class="reg__checkbox">
                            <label for="">Privacy Policy:</label>
                            <input type="checkbox" name="check">
                            
                        </div>
                        <div class="reg__submit">
                            <input type="submit" name="submit" class="registration" value="send">
                        </div>
                    </form>
                    <div>
                        <span class="message" style="color: red"></span>
                    </div> 
                </div> 
            </section>
        </div>
    
    ';

?>