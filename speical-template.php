<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()):
    while (have_posts()) : the_post();
?>
    <article class="post page">
        <h2><?php the_title(); ?></h2>
        
        <!-- info-box -->
        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna neque, pharetra vel lorem nec, luctus varius enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi ipsum velit, cursus eu fermentum vel, rutrum ut nulla. </p>
        </div><!-- /info-box -->
        
        <?php the_content(); ?>
    </article>
        
<?php
    endwhile;

else:
        echo '<p>No content found</p>';
endif;

get_footer();

?>