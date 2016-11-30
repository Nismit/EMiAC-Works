<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */
get_header(); ?>

<main>
	<div class="contents clearfix">
		<div class="contents-main">

		<div class="category-list">
			<p class="category-parent">Search: <?php the_search_query(); ?></p>
		</div>

		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>

		<?php endwhile; else: ?>
		
		<article>
			<p><?php the_search_query(); ?> は見つかりませんでした。<br />
				キーワードを変えてもう一度お探しください。</p>
		</article>

		<?php endif; ?>

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
