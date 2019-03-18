<?php wp_footer(); ?>


    <footer >
        <div class="footerContainer">


            <div class="footerLeftPart">

                <div class="footer-social">
                    <img class="logo" src="<?php echo bloginfo('template_url'); ?>/images/actualite/logoRealHome"  alt="logo">
                    <?php  wp_nav_menu(array( 'theme_location' => 'menu-secondaire')); ?>
                </div>

                <div class="footerLeftPartTwo">
                    <h3>Menu</h3>
                    <?php  wp_nav_menu(array( 'theme_location' => 'menu-principal')); ?>
                </div>
            </div>

        <div class="footerRight">
                <h3>Contact</h3>
        </div>
        </div>

    </footer>
</body>
</html>
