<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechToday
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer">
		<section>
		<?php
			the_custom_logo();
		?>
			<p>At TECHTODAY, our purpose is to enrich lives through technology. We do that by leveraging our unique customers’ everyday needs, whether they come to us online, visit our stores or invite us into their homes.
</p>
		</section>
		<section class="contentMenu">
		<h3>MY ACCOUNT</h3>
		<?php
			wp_nav_menu( array( 
				'theme_location' => 'my-store-menu', ) ); 
			?>
		</section>
		<section>
		<h3>OTHER</h3>
			<?php dynamic_sidebar('policy-menu');?>
		</section>
		<section>
		<h3>CONTACT US</h3>
			<?php dynamic_sidebar( 'contact-menu');?>
			<?php dynamic_sidebar( 'social-menu');?>
		</section>
	</div>
</footer><!-- #colophon -->
<div class="sub-footer">
Copyright ©2021 All rights reserved | TECHTODAY
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>