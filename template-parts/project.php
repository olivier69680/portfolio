<?php

// skills
$projects_query = new WP_query(
    [
        'post_type'     => 'page',
        'post_parent'   => 77, // Pages enfants de la page qui a pour id 41
        'orderby'       => 'menu_order',
        'order'         => 'ASC',
        'posts_per_page' => -1 // tous les résultats des enfants de la page compétences
        
    ]
);

if ( $projects_query->have_posts() ) :
    ?>
    <main id="sujets" class="posts   ">
            <?php
            while ( $projects_query->have_posts() ) :
                $projects_query->the_post();
            ?> 
            
            <article class="post    animated bounceInLeft duration1 eds-on-scroll  " style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <h4 class="post__title"><?php the_title(); ?></h4>
            </article>
        
        </div>
    <?php
        
    endwhile;

    wp_reset_postdata();
    ?>
       
    </main>
    <?php
endif;