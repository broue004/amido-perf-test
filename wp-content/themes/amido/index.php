<?php
get_header();
?>
<section class="intro">
    <div class="holder">
        <h1><span><?php the_field( 'thoughts.intro', 'option' ); ?></span></h1>
        <div class="btn-holder">
            <a href="#" class="btn-plus">Plus</a>
        </div>
    </div>
</section>
<div id="main">
    <section class="article-block holder">
        <header class="intro-text">
            <h2><?php the_field( 'thoughts.subtitle', 'option' ); ?></h2>
            <p><?php the_field( 'thoughts.tagline', 'option' ); ?></p>
        </header>
        <div class="twocolumns">
            <article id="content">
                <?php if(have_posts()) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="article-list">
                            <?php get_template_part('content','full'); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php
                    posts_nav_link(':::', '<< Newer Posts', 'Older Posts >>');
                    ?>
                <?php else : ?>
                    <div class="posts-holder"><p>
                            Sorry that page cannot be found
                        </p></div>
                <?php endif; ?>
            </article>
            <?php get_sidebar(); ?>
        </div>
    </section>
    <section class="info">
        <div class="holder">
            <em class="tel"><span><a href="#">CALL US <?php the_field('phone_number', 'option'); ?></a></span></em>
            <a href="/contact" class="email">EMAIL US</a>
        </div>
    </section>
</div>
<?php
get_footer();
?>