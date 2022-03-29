<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TechToday
 */

?>

<article id="post-<?php the_ID(); ?>" class="blog-single-post">
	<section class="grid-x">
		<div class="blog-post-img cell large-3">
			<?php techtoday_website_theme_post_thumbnail(); ?>
		</div>
		<div class="cell large-9">
			<?php
			if ( is_singular() ) :
				the_title( '<h3 class="entry-title post-title">', '</h3>' );
			else :
				the_title( '<h4 class="entry-title post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta blog-post-date">
					<?php
					techtoday_website_theme_posted_on();
					techtoday_website_theme_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			<div class="blog-post-content">
				<?php the_excerpt(); ?>
				<button id="submit"><a  href="<?php the_permalink() ?>">Read More</a></button>
			</div>
		</div>
		<header class="entry-header ">
		
		</header><!-- .entry-header -->
		
		
	</section>

</article>
