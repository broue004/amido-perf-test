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
    <section class="team-info">
        <div class="holder">
            <header class="intro-text">
                <h2><?php the_field( 'home.seniorteam.heading' ); ?></h2>
                <p><?php the_field( 'home.seniorteam.tagline' ); ?></p>
            </header>
            <?php if(get_field('home.seniorteam.link')) : ?>
                <a href="<?php the_field('home.seniorteam.link'); ?>" class="team-amido"><?php the_field('home.seniorteam.link_text'); ?></a>
            <?php endif; ?>
            <ul class="team-members">
                <?php if( have_rows( 'home.seniorteam.senior_team_members' ) ):
                    while ( have_rows( 'home.seniorteam.senior_team_members' ) ) : the_row();
                        $team_member = get_sub_field('home.seniorteam.senior_team_members_team_member');
                        $team_member_id = $team_member[0]->ID;
                        ?>
                        <li>
                            <a href="<?php the_field('home.seniorteam.link'); ?>" class="photo">
                                <?php
                                $image = get_field('team_member_image', $team_member_id);
                                echo wp_get_attachment_image( $image, 'thumbnail' );

                                ?>
                                <span class="hover">&nbsp;</span>
                            </a>
                            <span class="author"><?php echo get_the_title($team_member_id); ?></span>
                            <span class="rank"><?php the_field( 'job_title' , $team_member_id); ?></span>
                            <a href="<?php the_field('home.seniorteam.link'); ?>" class="read-profile">READ PROFILE</a>
                        </li>
                    <?php
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </section>
<?php wp_reset_postdata();