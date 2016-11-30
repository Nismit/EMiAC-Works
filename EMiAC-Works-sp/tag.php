<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
get_header(); ?>

<main class="bottomLayer">

	<ul class="breadcrumb">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
		<li><?php single_tag_title(); ?>のタグが付いた記事一覧</li>
	</ul>

	<div class="titleBlock">
		<h1 class="titleBlock-headline"><?php single_tag_title(); ?>の記事一覧</h1>
	</div><!-- /.title -->

	<ul class="contents-list">

		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>

		<?php endwhile; else:?>
		<li>
			<p><?php single_tag_title(); ?> は見つかりませんでした。<br />
			記事が消えた、もしくはタグを変更している可能性があります。</p>
		</li>
		<?php endif; ?>

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


