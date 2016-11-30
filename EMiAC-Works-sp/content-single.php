<?php
/**
 * The template used for displaying loop content
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
$noHeadUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = 'http://'.$noHeadUrl;
?>

<article class="single">
	<header>
		<div class="subinformation clearfix">
			<p class="subinformation-date"><svg class="single-calendar"><use xlink:href="#icon-calendar"/></svg><time pubdate="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y/m/d' ); ?></time></p>
		</div><!-- /.subinformation-cat -->

		<h1 class="single-headline"><?php the_title(); ?></h1>
	</header>

	<div class="eyeCatch">
		<?php the_post_thumbnail(744); ?>
	</div><!-- /.eyeCatch -->

	<div class="excerpt">
		<?php the_excerpt(); ?>
	</div><!-- /.excerpt -->

	<div class="ads">
		<!-- スマホ広告コンテンツ上 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:300px;height:250px"
		     data-ad-client="ca-pub-6436791468025792"
		     data-ad-slot="2753038467"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>

	<div class="single-content">
		<?php the_content(); ?>
	</div><!-- /.single-content -->


	<div class="single-share">
		<p>良かったらシェアをお願いします:)</p>

		<ul class="single-share-ul">
			<li><a href="http://twitter.com/share?text=<?php the_title();?>&url=<?php echo rawurlencode($url); ?>&via=EMiACWorks" target="_blank"><svg class="single-share-icon color-twitter"><use xlink:href="#icon-twitter3"/></svg></a></li>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode($url); ?>" target="_blank"><svg class="single-share-icon color-facebook"><use xlink:href="#icon-facebook3"/></svg></a></li>
			<li><a href="https://plus.google.com/share?url=<?php echo $noHeadUrl; ?>" target="_blank"><svg class="single-share-icon color-google"><use xlink:href="#icon-google-plus3"/></svg></a></li>
			<li><a href="http://b.hatena.ne.jp/entry/<?php echo $noHeadUrl; ?>" target="_blank"><svg class="single-share-icon color-hatena"><use xlink:href="#icon-hatena"/></svg></a></li>
			<li><a href="http://getpocket.com/edit?url=<?php echo rawurlencode($url); ?>" target="_blank"><svg class="single-share-icon color-pocket"><use xlink:href="#icon-pocket"/></svg></a></li>
		</ul>
	</div><!-- /.single-share -->

</article><!-- /.single -->

<div class="pager-single">
	<ul>
		<li class="prev">
		<?php 
			$prevPost = get_adjacent_post(false,'', true);
			if($prevPost):
		?>
			<a href="<?php echo get_permalink($prevPost->ID);?>" class="parts_arrow_left"><?php echo $prevPost->post_title ;?></a>
		<?php else:?>
			<p><span>最後の記事です</span></p>
		<?php endif;?>
		</li>
		<li class="next">
		<?php 
			$nextPost = get_adjacent_post(false,'', false);
			if($nextPost):
		?>
			<a href="<?php echo get_permalink($nextPost->ID);?>" class="parts_arrow_right"><?php echo $nextPost->post_title ;?></a>
		<?php else:?>
			<p><span>最新の記事です</span></p>
		<?php endif;?>
		</li>
	</ul>
</div>

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

<?php wp_related_posts(); ?>

