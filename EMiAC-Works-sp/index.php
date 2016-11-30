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
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */

get_header(); ?>

<main class="bottomLayer">

	<ul class="contents-list">

		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>
		<?php endwhile; else: endif; ?>

	</ul><!-- /.contents-list -->	
	
	<?php 
		if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		} 
	?>

	<div class="ads">
		<!-- スマホ広告フッター -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:300px;height:250px"
		     data-ad-client="ca-pub-6436791468025792"
		     data-ad-slot="9637176861"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>

</main>

<?php get_footer(); ?>