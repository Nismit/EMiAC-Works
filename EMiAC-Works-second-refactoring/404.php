<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */

get_header(); ?>

<main>
	<div class="contents clearfix">
		<div class="contents-main">

			<article class="page">
				<div class="page-inner">
					<h1 class="err">404 Not Found.</h1>

					<div class="notfound">
						<img src="<?php bloginfo('template_url'); ?>/common/img/404.jpg" width="744" height="497" alt="404 Not Found.">

						<p>お探しの記事が見つかりませんでした。</p>


						<div class="searchBox">
							<p>検索すると、見つかる可能性があります。。</p>
							<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input name="s" id="s" type="text">
								<input type="submit" value="Search">
							</form>
						</div>
					</div>
				</div>
			</article>
			
		</div><!-- /.contents-main -->

	<?php get_sidebar(); ?>

	</div><!-- /.contents -->
</main>


<?php get_footer(); ?>
