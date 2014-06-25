<footer id="footer">
    <div class="holder">
        <ul class="social-networks">
            <li><a href="<?php the_field('twitter_link', 'options'); ?>" target="_blank" class="twitter">twitter</a></li>
            <li><a href="<?php the_field('linkedin_link', 'options'); ?>" target="_blank" class="linkedin">linkedin</a></li>
        </ul>
        <div class="frame">
            <?php
            $menu = array (
                'theme_location' => 'footer-menu',
                'container' => null,
                'menu_class' => 'nav',
            );
            wp_nav_menu( $menu )
            ?>
            <address>Registered Company No: 7203090 Registered Address: The Leathermarket, Weston Street, London, SE1 3ER</address>
            <div class="info-area">
                <span class="copyright">&copy; <a href="#">Amido</a> <?php echo date('Y'); ?></span>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>