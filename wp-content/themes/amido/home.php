<?php
get_header(); ?>
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
            <div id="content">
                <?php if(have_posts()) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="article-list">
                            <?php get_template_part('content','postlist'); ?>
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
                <a href="#" class="more-articles">load more articles</a>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <div class="pagination">
            <span>Page 1 of 20</span>
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
            </ul>
        </div>
    </section>
    <section class="info">
        <div class="holder">
            <em class="tel"><span><a href="#">CALL US 020 7247 2788</a></span></em>
            <a href="#" class="email">EMAIL US</a>
        </div>
    </section>
</div>
<?php get_footer(); ?>