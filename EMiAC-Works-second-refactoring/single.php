<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */

get_header(); ?>

<main>
	<div class="contents clearfix">
		<div class="contents-main">

			<?php
				while ( have_posts() ) : the_post();
					get_template_part('content','single');
				endwhile;
			?>

	</div><!-- /.contents-main -->

	<?php get_sidebar(); ?>

	</div><!-- /.contents -->
</main>

<?php get_footer(); ?>
