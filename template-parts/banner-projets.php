<?php
// banner
if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            
                <section class="banner " style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    <div class=" animated flipInY duration6"> 
                        <header class="banner__header rellax" data-rellax-speed="8">
                            <h2 class="banner__header__title "><?php  the_title(); ?></h2>
                        </header>
                        <main class="banner__main rellax" data-rellax-speed="8">
                            <?php  the_content(); ?>
                        </main>
                        <footer class="banner__footer rellax" data-rellax-speed="8">
                            <nav class="banner__footer__nav " >
                                <a class="banner__footer__nav__link" href="#sujets">En savoir plus</a>
                               
                            </nav>
                        </footer>
                    </div>
                </section>

           <?php
        endwhile;
endif;

