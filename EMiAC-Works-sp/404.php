<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
get_header(); ?>

<main class="bottomLayer">

	<ul class="breadcrumb">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
		<li>404 Not Found</li>
	</ul>

	<div class="titleBlock">
		<h1 class="titleBlock-headline">404 Not Found.</h1>
	</div><!-- /.title -->


	<p>ごめんなさい。。お探しの記事が見つかりませんでした。</p>



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