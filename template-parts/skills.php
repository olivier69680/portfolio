<?php

// skills
$skills_query = new WP_query(
    [
        'post_type'     => 'page',
        'post_parent'   => 41, // Pages enfants de la page qui a pour id 41
        'orderby'       => 'menu_order',
        'order'         => 'ASC',
        'posts_per_page' => -1 // tous les résultats des enfants de la page compétences
        
    ]
);

if ( $skills_query->have_posts() ) :
    ?>
    <main >
        <div class="skills   animated pop duration4 eds-on-scroll  " id="skills">
            <?php
            while ( $skills_query->have_posts() ) :
                $skills_query->the_post();
            ?> 
            
            <div class="skill">
            <h3 class="skill__name"><?php the_title(); ?></h3>
            <div class="skill__description">
                <?php the_content(); ?>
            </div>
        
        </div>
    <?php
        
    endwhile;

    wp_reset_postdata();
    ?>
        </div>
    </main>
    <?php
endif;