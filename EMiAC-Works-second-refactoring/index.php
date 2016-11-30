<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */

get_header(); ?>


<main>
	<div class="contents clearfix">
		<div class="contents-main">
		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>
		<?php endwhile; else: endif; ?>

		<?php 
			if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} 
		?>
		</div><!-- /.contents-main -->
	
	<?php get_sidebar(); ?>

	</div><!-- /.contents -->
</main>

<?php get_footer(); ?>