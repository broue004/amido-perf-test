<?php get_header(); ?>
<section class="intro">
    <div class="holder">
        <h1><span><?php the_field( 'the_team.intro', 'option' ); ?></span></h1>
        <div class="btn-holder">
            <a href="#" class="btn-plus">Plus</a>
        </div>
    </div>
</section>
<div id="main">
    <section class="team-info">
        <div class="holder">
            <header class="intro-text">
                <h2><?php the_field( 'the_team.subtitle', 'option' ); ?></h2>
                <p><?php the_field( 'the_team.tagline', 'option' ); ?></p>
            </header>
            <div style="display:none" id="team-profile">
                <section class="profile grey">
                    <div class="holder">
                        <div class="image-holder">
                            <a href="#"><img src="images/img-38.jpg" alt="Image Description"></a>
                        </div>
                        <div class="description">
                            <h2>PROFILE</h2>
                            <span class="profile"></span>
                            <ul class="social-links">
                                <li><a target="_blank" href="" class="email"></a></li>
                                <li><a target="_blank" href="" class="twitter">TWITTER</a></li>
                                <li><a target="_blank" href="" class="linkedin">LINKEDIN</a></li>
                            </ul>
                            <span class="signature"></span>
                        </div>
                    </div>
                </section>
            </div>
            <ul class="team-members">
                <?php
                $team_count = 0;
                query_posts($query_string . '&meta_key=team_member_sort_order&orderby=meta_value_num&order=asc');
                while ( have_posts() ) : the_post();
                    echo $team_count;
                    if($team_count > 0 && $team_count % 5 ==0) :
                        render_profile_section();
                    endif;
                    ?>
                    <li>
                        <a href="#" class="photo">
                            <?php echo wp_get_attachment_image( get_field('team_member_image'), 'thumbnail' ); ?>
                            <span class="hover">&nbsp;</span>
                        </a>
                        <span class="author"><?php the_title(); ?></span>
                        <span class="rank"><?php the_field( 'job_title' ) ?></span>
                        <a href="#" class="read-profile">READ PROFILE</a>
                        <a href="#" class="close-profile">CLOSE PROFILE</a>
                        <div class="info hidden">
                            <section class="profile grey">
                                <div class="holder">
                                    <div class="image-holder">
                                        <a href=""><?php echo wp_get_attachment_image( get_field('team_member_image'), 'team-member-large') ?></a>
                                    </div>
                                    <div class="description">
                                        <h2><?php the_title(); ?></h2>
                                        <span class="profile"><?php the_content(); ?></span>
                                        <ul class="social-links">
                                            <?php if ( get_field( 'team_member_email' ) ): ?>
                                                <li><a target="_blank" href="mailto:<?php the_field('team_member_email'); ?>" class="email">EMAIL <?php echo explode(' ', get_the_title())[0] ?></a></li>
                                            <?php endif; ?>
                                            <?php if ( get_field( 'team_member_twitter' ) ): ?>
                                                <li><a target="_blank" href="<?php the_field('team_member_twitter') ?>" class="twitter">TWITTER</a></li>
                                            <?php endif; ?>
                                            <?php if ( get_field( 'team_member_linkedin' ) ): ?>
                                                <li><a target="_blank" href="<?php the_field('team_member_linkedin'); ?>" class="linkedin">LINKEDIN</a></li>
                                            <?php endif; ?>
                                        </ul>
                                        <span class="signature"><?php the_title(); ?></span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </li>
                    <?php
                    ++$team_count;
                endwhile;

                ?>
                <?php /*<li class="active">
                    <a href="#" class="photo">
                        <img src="images/img-66.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">ALAN WALSH</span>
                    <span class="rank">Managing Director<br> London</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-12.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">RICH WADSWORTH</span>
                    <span class="rank">Director of Operations<br> Brighton</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-13.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">SIMON EVANS</span>
                    <span class="rank">Chief Technical Officer<br> London</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-14.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">CHRIS GRAY</span>
                    <span class="rank">Director of Tech Ops<br> Brighton</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="profile grey">
        <div class="holder">
            <div class="image-holder">
                <a href="#"><img src="images/img-38.jpg" alt="Image Description"></a>
            </div>
            <div class="description">
                <h2>PROFILE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim ad lorem ipsum dolor sit amet, consectetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim ad lorem ipsum dolor sit amet, consectetur.</p>
                <ul class="social-links">
                    <li><a href="#">EMAIL ALAN</a></li>
                    <li><a href="#">TWITTER</a></li>
                    <li><a href="#">LINKEDIN</a></li>
                </ul>
                <span class="signature">Alan Brady</span>
            </div>
        </div>
    </section>
    <section class="team-info">
        <div class="holder">
            <ul class="team-members">
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-66.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">SEAN MCALINDEN</span>
                    <span class="rank">Technical Consultant<br>London</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-12.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">ANDREW JUTTON</span>
                    <span class="rank">Technical Consultant<br>Brighton</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-13.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">ROB PEARSON</span>
                    <span class="rank">Head of User Experience<br>London</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-14.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">AVRIL O’SHEA</span>
                    <span class="rank">UX Consultant<br>Brighton</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-66.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">RICHARD SLATER</span>
                    <span class="rank">Technical Consultant<br>London</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-12.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">JON FINCH</span>
                    <span class="rank">Technical Consultant<br>Brighton</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-13.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">ANT KOCH</span>
                    <span class="rank">Technical Consultant<br>London</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>
                <li>
                    <a href="#" class="photo">
                        <img src="images/img-14.jpg" alt="Image Description">
                        <span class="hover">&nbsp;</span>
                    </a>
                    <span class="author">PATRICK CREAN</span>
                    <span class="rank">Technical Consultant<br>Brighton</span>
                    <a href="#" class="read-profile">READ PROFILE</a>
                    <a href="#" class="close-profile">CLOSE PROFILE</a>
                </li>*/ ?>
                <?php render_profile_section(); ?>
        </div>
    </section>
    <section class="info">
        <div class="holder">
            <em class="tel"><span><a href="#">CALL US 020 7247 2788</a></span></em>
            <a href="#" class="email">EMAIL US</a>
        </div>
    </section>
</div>
<?php get_footer();
function render_profile_section()
{
    ?>
</ul>
</div>
</section>
<div class="team-profile">PROFILE</div>
<section class="team-info">
    <div class="holder">
        <ul class="team-members">
<?php
}


?>