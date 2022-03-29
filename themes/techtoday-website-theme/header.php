<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechToday
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<!-- functions for opening a body with site content -->
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- Creating a topbar for store nav links and contact -->
	<div class="top-bar">
		<div class="top-bar-home">
			<a href="emailto:portfolio@pranavgera.com">
				<span>
					<i class="fa fa-envelope"></i>
				</span>
				<span>Email: info@techtoday.com</span><br>
			</a><a href="tel:xxxxxxxxx"><span><i class="fa fa-phone"></i></span><span>Phone:
					(+1)-123-456-1890</span></a>
		</div>
		<div class="top-bar-title">
			<!-- Store nav called in dynamically -->
			<?php
			wp_nav_menu( array( 
				'theme_location' => 'my-store-menu', 
				'container_class' => 'custom-menu-class' ) ); 
			?>
		</div>
	</div>
	<div class="content">
	</div>
	<!-- Main header containing site logo and primary menu -->
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e( 'Skip to content', 'techtoday' ); ?></a>
		<header id="mainHeader">
			<div id="logo">
				<?php
				the_custom_logo();
			?>
			</div>
			<div>
				<!-- calling in primary menu -->
				<?php
		wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
		?>
			</div>
		</header>