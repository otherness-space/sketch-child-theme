<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sketchchildtheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sketchchildtheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'Sketch child theme' ), 'WordPress' ); ?></a> -->
            <a href="<?php echo esc_url( __( 'https://github.com/otherness-space/sketch-child-theme', 'sketchchildtheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'Sketch child theme' ), '<div class="site-footer-devanagari">दुक</div>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sketchchildtheme' ), 'sketchchildtheme', '<a href="https://github.com/otherness-space/sketch-child-theme" rel="designer"><div class="site-footer-devanagari">दुक</div></a>' );      ?>


		</div><!-- .site-info -->
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
