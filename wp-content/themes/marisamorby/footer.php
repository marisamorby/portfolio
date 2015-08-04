<?php
/**
 * The default footer template
 *
 * @package     WordPress
 * @subpackage  Hoverboard
 * @since       0.1.0
 */
?>

    <footer class="site-credits">
        <p>
            All content copyright &copy; 
            <a href="<?php echo home_url('/'); ?>" 
               rel="home"><?php bloginfo('name', 'display'); ?></a>
        </p>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
