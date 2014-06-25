<?php
/*
Template Name: Home
*/
get_header(); ?>
<section class="intro">
    <div class="holder">
        <h1><span><?php the_field('home.tagline'); ?></span></h1>
        <p><?php the_field('home.intro'); ?></p>
        <?php if(get_field('home.intro_link')) : ?>
        <a href="<?php the_field('home.intro_link'); ?>"><?php the_field('home.intro_link_text'); ?></a>
        <?php endif; ?>
        <div class="btn-holder">
            <span class="btn-plus">Plus</span>
        </div>
    </div>
</section>
<div id="main">
<section class="services-block holder">
    <header class="intro-text">
        <h2><?php the_field( 'home.ourservices.heading' ); ?></h2>
        <p><?php the_field( 'home.ourservices.tagline' ); ?></p>
    </header>
    <div class="column-holder">
        <?php
            if( have_rows( 'home.ourservices.services' ) ):
                while ( have_rows( 'home.ourservices.services' ) ) : the_row();
                    $link = get_sub_field( 'home.ourservices.services.service_link' );
                    $image = get_sub_field( 'home.ourservices.services.service_image' );
                    $highlight_image = get_sub_field( 'home.ourservices.services.service_highlight_image' );
                    ?>
                    <div class="column">
                        <span class="photo">
                            <div class="holder">
                                <div class="frame">
                                    <img src="<?php echo $image['url']; ?>" class="image-normal" alt="<?php echo $image['alt']; ?>" />
                                    <img src="<?php echo $highlight_image['url']; ?>" class="image-hover" alt="<?php echo $highlight_image['alt']; ?>" />
                                </div>
                            </div>
                        </span>
                        <h3><?php the_sub_field( 'home.ourservices.services.service' );?></h3>
                        <div class="description">
                            <p><?php the_sub_field( 'home.ourservices.services.service_description'); ?></p>
                            <?php if($link) : ?>
                            <a href="<?php echo $link; ?>" class="find-more"><?php the_sub_field( 'home.ourservices.services.service_link_text' ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
<?php include('includes/inc-contact-summary.php'); ?>
<?php include('includes/inc-our-promises.php'); ?>

<?php include('includes/inc-senior-team.php'); ?>
</div>
<?php get_footer(); ?>