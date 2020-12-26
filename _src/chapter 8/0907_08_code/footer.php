<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Daily Cooking Custom
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?= esc_url(get_bloginfo('rss2_url')) ?>" class="rss">Posts</a>
			<span class="sep"> | </span>
			<a href="<?= esc_url(get_bloginfo('comments_rss2_url')) ?>" class="rss">Comments</a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'daily-cooking-custom' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'daily-cooking-custom' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'daily-cooking-custom' ), 'Daily Cooking Custom', '<a href="http://karol.cc/" rel="designer">Karol K.</a>, <a href="https://themeisle.com/" rel="designer">ThemeIsle</a>, and <a href="http://underscores.me/" rel="designer">_S</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
