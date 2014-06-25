<?php
if(isset($do_query)):
    $q = new WP_Query(
        array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'tmpl-home.php'
        )
    );
    $q->the_post();
endif;
?>

<section class="slideshow-block grey">
    <div class="holder">
        <div class="slideshow">
          <div class="mask">
            <div class="slideset">
                <div class="slide slide-home">
                    <h2><?php the_field( 'home.ourpromises.heading' ); ?></h2>
                    <h3><span><?php the_field( 'home.ourpromises.title' ); ?></span></h3>
                    <p><?php the_field( 'home.ourpromises.tagline' ); ?></p>
                    <?php /*a href="#" class="read-more">READ MORE</a>*/ ?>
                </div>
                <?php if( have_rows( 'home.ourpromises.promises' ) ):
                    $count = count(get_field('home.ourpromises.promises'));
                    while ( have_rows( 'home.ourpromises.promises' ) ) : the_row(); ?>
                        <div class="slide">
                            <h2><?php the_sub_field('home.ourpromises.promises.heading') ?></h2>
                            <h3><?php the_sub_field('home.ourpromises.promises.title') ?></h3>
                            <p><?php the_sub_field('home.ourpromises.promises.tagline') ?></p>
                            <?php /*a href="#" class="read-more">READ MORE</a> */ ?>
                            <span class="counter"><?php echo $count--; ?></span>
                        </div>
                    <?php endwhile; endif; ?>
            </div>
            <div class="pagination">&nbsp;</div>
          </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata();
