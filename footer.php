    <footer class="site-footer">
        
        <!-- footer-widgets -->
        <div class="footer-widgets clearfix">
            
            <?php
            for ($i = 1; $i <= 4; $i++) {
                if (is_active_sidebar('footer' . $i)): ?>
                    <div class="footer-widget-area">
                    <?php dynamic_sidebar('footer' . $i); ?>
                    </div>
                <?php endif;
            } ?>

        </div>
        
        <nav class="site-nav">
            <?php
            $args = array('theme_location' => 'footer');
            ?>

            <?php wp_nav_menu($args); ?>
        </nav>
        
        <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

    </footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>