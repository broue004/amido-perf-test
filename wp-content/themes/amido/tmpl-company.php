<?php
/*
 * Template Name: Company
 */
get_header(); ?>
    <section class="intro">
        <div class="holder">
            <h1><span><?php the_title() ?></span></h1>
            <div class="btn-holder">
                <a href="#" class="btn-plus">Plus</a>
            </div>
        </div>
    </section>
    <div id="main">
    <div class="slideshow-area">
        <div class="holder">
            <header class="intro-text">
                <h2><?php the_field('company.timeline.title') ?></h2>
                <p><?php
                    $val = get_field('company.timeline.subtitle');
                    $val = str_replace(array('{Y}', '{y}'), count(get_field('company.timeline')), $val);
                    echo $val;
                    ?></p>
            </header>
            <div class="business-info">
                <div class="mask">
                    <div class="slideset">
                        <?php
                            if( have_rows( 'company.timeline' ) ):
                                while( have_rows( 'company.timeline' ) ): the_row(); ?>
                                    <div class="slide">
                                        <div class="title-area">
                                            <div class="title-holder"><em class="year"><?php the_sub_field('company.timeline.year') ?></em><?php the_sub_field('company.timeline.subtitle') ?></div>
                                        </div>
                                        <div class="post">
                                            <a href="#" class="photo">
                                                <?php echo wp_get_attachment_image(get_sub_field('company.timeline.image'), 'timeline-year-photo') ?>
                                                <span class="hover">&nbsp;</span>
                                            </a>
                                            <div class="description">
                                                <?php the_sub_field('company.timeline.description') ?>
                                            </div>
                                        </div>
                                    </div>
                          <?php endwhile;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="pagination">
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
                        <li><a href="#">11</a></li>
                        <li><a href="#">12</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <?php $do_query = true;

        include('includes/inc-our-promises.php');
        include('includes/inc-senior-team.php');
        include('includes/inc-contact-summary.php'); ?>
    </div>
<?php
get_footer();