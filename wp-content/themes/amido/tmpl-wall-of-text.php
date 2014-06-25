<?php
/*
 * Template Name: Wall of Text
 */
    get_header();
if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <div id="main" class="holder">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>