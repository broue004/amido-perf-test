<div class="article-holder">
    <div class="head">
        <div class="social-area">
            <?php if(function_exists("st_makeEntries")) { echo st_makeEntries(); } ?>
        </div>
        <h3><?php the_title(); ?></h3>
    </div>
    <?php if ( has_post_thumbnail() ) :
        ?>
        <div class="photo">
        <?php the_post_thumbnail(array('class' => 'photo'));
        ?>
        </div>
    <?php endif; ?>

        <?php the_content(); ?>
    <div class="meta"><?php the_author(); ?>, <?php the_date(); ?></div>
    <?php

    $comment_fields =  array(

        'author' =>
            '<div class="row"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
            ( $req ? '<span class="required">*</span>' : '' ) .
            '<div class="input-holder"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' /></div></div>',

        'email' =>
            '<div class="row"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
            ( $req ? '<span class="required">*</span>' : '' ) .
            '<div class="input-holder"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' /></div></div>',

        'url' =>
            '<div class="row"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
            '<div class="input-holder"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '" size="30" /></div></div>',
    );

    $comment_field = '<div class="row"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><div class="input-holder"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div></div>'


    ?>
    <?php comment_form(array('comment_notes_after' => '', 'fields' => $comment_fields, 'comment_field' => $comment_field)); ?>
</div>