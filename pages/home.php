
<?php
session_start();
    echo '
    <section class="home">
        <article class="home__banner">';
       
        if($_SESSION['login']){
            echo '<h2>Здравствуйте '.$_SESSION['login'].' </h4>';
        }else{
            echo '<h2>Здравствуйте</h4>';
        }
                  
        echo '</article>
        <div class="container">
            <section class="home__section">
                <div class="home__head">
                    <h3>Select a category</h3>
                </div>
                <div class="home__carts">
                    
                </div>
            </section>
        </div>
    </section>
    ';
?>
