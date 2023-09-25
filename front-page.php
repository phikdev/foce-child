<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img class='logo' data-0="top:300px;" data-100="top:500px;" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>  " alt="logo Fleurs d'oranger & chats errants"/>
            <video id="background-video" autoplay loop muted poster>
<source src="https://course.oc-static.com/projects/D%C3%A9veloppeur+Web/DWP+IW_P9+Studio+d'animation/Studio+Koukaki-vide%CC%81o+header+sans+son+(1).mp4" type="video/mp4">
<img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"/>
</video> 
        </section>
        <section id="story" class="story" >
            <h2><span class="visible">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php
                    get_template_part('template-parts/swiper');
                    ?>
                </div>
            </article>
            <article id="place">
                <div>
                    
                    <h3>Le Lieu</h3>
                     
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="cloud visible">
                        <img class="big" src="<?php echo get_theme_file_uri('assets/image/big_cloud.png'); ?>" alt="gros nuage"> 
                        <img class="little" src="<?php echo get_theme_file_uri('assets/image/little_cloud.png'); ?>" alt="petit nuage"> 
                    </div>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2><span class="visible">Studio Koukaki</span></h2>
            <div>
                <p><span>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</span></p>
                <p><span>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</span></p>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js">

        </script>
        <script>
            var s = skrollr.init();
        </script>
        
    </main><!-- #main -->
    

<?php

get_footer();

