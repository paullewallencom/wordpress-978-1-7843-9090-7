<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Daily Cooking Custom
 */
?><!DOCTYPE html> <!-- HEADER SECTION -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'daily-cooking-custom' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<h2 class="site-description"><?php bloginfo('description'); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'daily-cooking-custom' ); ?></button>
			<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	
<!-- MAIN SECTION -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part('content', get_post_format());
				?>

			<?php endwhile; ?>

			<?php daily_cooking_custom_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part('content', 'none'); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<!-- SIDEBAR SECTION -->

<div id="secondary" class="widget-area" role="complementary">
	<?php if(is_active_sidebar('sidebar-1')) dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

<!-- FOOTER SECTION -->
	
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'daily-cooking-custom' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'daily-cooking-custom' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'daily-cooking-custom' ), 'Daily Cooking Custom', '<a href="http://karol.cc/" rel="designer">Karol K.</a>, <a href="https://themeisle.com/" rel="designer">ThemeIsle</a>, and <a href="http://underscores.me/" rel="designer">_S</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
