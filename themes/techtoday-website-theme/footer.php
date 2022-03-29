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
	<div class="footer large-12">
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
		<section class="contentMenu">
		<h3>OTHER</h3>
			<?php dynamic_sidebar('policy-menu');?>
		</section>
		<section class="contentMenu" >
		<h3>CONTACT US</h3>
			<?php dynamic_sidebar( 'contact-menu');?>
			<?php dynamic_sidebar( 'social-menu');?>
		</section>
	</div>
	<article class="large-12">
		<?php
					$test_args = array( 
								'post_type' => 'post',         
								'post_status'=> 'publish',         
								'posts_per_page' => 3 );
								
						$test_query = new WP_Query($test_args); 
						
						if($test_query->have_posts()){         
								while ($test_query->have_posts()){             
										$test_query->the_post();  
							?>
							<section class="grid-x">
		<div class="blog-post-img cell large-3">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="cell large-9">
			<?php
			if ( is_singular() ) :
				the_title( '<h3 class="entry-title post-title-new">', '</h3>' );
			else :
				the_title( '<h class="entry-title post-title-new"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
			<?php endif; ?>
			<div class="blog-post-content">
				<?php the_excerpt(); ?>
				<button id="submit"><a  href="<?php the_permalink() ?>">Read More</a></button>
			</div>
		</div>
		<header class="entry-header ">
		
		</header><!-- .entry-header -->
		
		
	</section>
								<?php
								}   
								wp_reset_postdata();   
						} 
				?>
		</article>
	
</footer><!-- #colophon -->
<div class="sub-footer">
Copyright ©2021 All rights reserved | TECHTODAY
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>