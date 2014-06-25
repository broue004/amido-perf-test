<article class="article">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
    <a href="<?php the_permalink(); ?>" class="photo">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }
        ?>
        <span class="hover">&nbsp;</span>
    </a>
    <p><?php the_excerpt() ?></p>
    <div class="meta"><?php the_author(); ?>, <?php the_date(); ?></div>
    <a href="<?php the_permalink(); ?>" class="read">READ ARTICLE</a>
</article>