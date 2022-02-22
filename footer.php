<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cool-mat
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">

        <div class="footer-copyright">
            © <?php echo date("Y"); ?> cool mat. All Rights Reserved
        </div>

        <div class="footer-social">
            <a href="#">
                <img src="<?php bloginfo('template_url') ?>/assets/facebook-icon.svg." class="social-link">
            </a>
            <a href="#">
                <img src="<?php bloginfo('template_url') ?>/assets/instagram-icon.svg." class="social-link">
            </a>
        </div>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>