<?php
/**
 * The template used for displaying loop content
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
?>
<li>
	<a href="<?php the_permalink(); ?>">
		<article class="contents-list_article">
			<div class="article-eyeCatch">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div><!-- /.eyeCatch -->

			<div class="article-headLine">
				<header>
					<p class="date"><svg class="contents-list-calendar"><use xlink:href="#icon-calendar"/></svg><time pubdate="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y/m/d' ); ?></time></p>
					<h1><?php the_title(); ?></h1>
				</header>
			</div><!-- /.article-headLine -->
		</article>
	</a>
</li>