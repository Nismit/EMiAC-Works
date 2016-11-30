<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
get_header(); ?>


<main class="bottomLayer">

	<ul class="breadcrumb">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
		<li><?php the_search_query(); ?>の検索結果</li>
	</ul>

	<div class="titleBlock">
		<h1 class="titleBlock-headline"><?php the_search_query(); ?>の検索結果</h1>
	</div><!-- /.title -->

	<ul class="contents-list">

		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>

		<?php endwhile; else:?>
		<li>
			<p><?php the_search_query(); ?> は見つかりませんでした。<br />
			キーワードを変えてもう一度お探しください。</p>
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

