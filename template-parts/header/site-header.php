<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<nav class="dal-topbar">
	<div class="dal-topbar-container">
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'footer',
				'menu_class'      => 'language-menu',
				'container_class' => 'language-menu-container',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</div>
</nav>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
