<?php
/**
 * The template used for displaying loop content
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */
$cat = get_the_category();
/*$cat = $cat[0];
$cat_name = $cat->cat_name;*/
?>

<article class="singler">
	<div class="data clearfix">
		<div class="date"><svg class="date_icon"><use xlink:href="#icon-calendar"/></svg><?php the_time( 'Y/m/d' ); ?></div>
		<div class="category">
			<svg class="category_icon"><use xlink:href="#icon-drawer"/></svg>
			<ul>
				<?php foreach ($cat as $key): ?>
				<li><a href="<?php echo esc_url(get_category_link($key->cat_ID)); ?>"><?php echo $key->cat_name; ?></a></li>
                <?php endforeach; ?>
			</ul>
		</div>
	</div><!-- /.data -->


    <div class="socialBlock clearfix">
	    <!-- FB --><div class="fbBtn"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-width="100" data-action="like" data-show-faces="false" data-share="false"></div></div><!-- Hatena --><div class="haBtn"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></div><!-- TW --><div class="twBtn"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="ja">ツイート</a></div><!-- G+ --><div class="goBtn"><div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div></div><!-- Pocket --><div class="poBtn"><a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-save-url="<?php the_permalink(); ?>" data-pocket-align="left" data-lang="en"></a></div>
	</div>

	<div class="inner single">
		<h1><?php the_title(); ?></h1>

		<div class="contents-single_eyeCatch">
			<?php the_post_thumbnail(744); ?>
		</div>

		<?php the_excerpt(); ?>

		<div class="adBlock clearfix">
			<div class="left">
				<!-- script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script -->
				<!-- 記事上 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:250px"
				     data-ad-client="ca-pub-6436791468025792"
				     data-ad-slot="7903420461"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<div class="right">
				<!-- script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script -->
				<!-- 記事上 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:300px;height:250px"
				     data-ad-client="ca-pub-6436791468025792"
				     data-ad-slot="7903420461"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div><!-- /.adBlock -->

		<div class="single-content">

                <?php
                       $diff =  human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ;
                       if( strpos( $diff, '年' ) != 0 && str_replace( '年', '', $diff ) >= 1 ) :
                ?>
			<div class="lastModified">
				<p class="taC cautionMod">ご注意</p>

				<p class="taC attention">この記事の最終更新日は<span><?php the_date('Y年n月j日'); ?></span>です。情報が古くなっている可能性があります。<br>
				URLの変更、リンク切れ、コードの書き方や、ライセンス等が変更されている可能性がございますのでご注意ください。</p>
			</div><!-- /.lastModified -->
		<?php endif; ?>

			<?php the_content(); ?>

		</div><!-- /.single-content -->

	</div>

        <div class="socialBlock singleBtm clearfix">
            <p style="padding-bottom: 12px; font-weight:bold;">今後の励みになりますので、良かったらシェアをお願いします。</p>
	    <!-- FB --><div class="fbBtn"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-width="100" data-action="like" data-show-faces="false" data-share="false"></div></div><!-- Hatena --><div class="haBtn"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a></div><!-- TW --><div class="twBtn"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="ja">ツイート</a></div><!-- G+ --><div class="goBtn"><div class="g-plusone" data-size="medium"></div></div><!-- Pocket --><div class="poBtn"><a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-save-url="<?php the_permalink(); ?>" data-pocket-align="left" data-lang="en"></a></div>
		</div>

        <?php wp_related_posts()?>

	<div class="adBlock clearfix">
		<div class="left">
			<!-- script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script -->
			<!-- 記事下 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:300px;height:250px"
			     data-ad-client="ca-pub-6436791468025792"
			     data-ad-slot="9240552864"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<div class="right">
			<a href="http://px.a8.net/svt/ejp?a8mat=2BY558+66O50Y+348+U6ODD" target="_blank">
                <img border="0" width="300" height="250" alt="" src="http://www26.a8.net/svt/bgt?aid=141001100374&wid=001&eno=01&mid=s00000000404005070000&mc=1"></a>
                <img border="0" width="1" height="1" src="http://www17.a8.net/0.gif?a8mat=2BY558+66O50Y+348+U6ODD" alt="">
		</div>
	</div><!-- /.adBlock -->
</article>



<div class="pager-single clearfix">
	<div class="left">
		<?php 
			$prevPost = get_adjacent_post(false,'', true);
			if($prevPost):
		?>
		<div class="imgLeft">
			<a href="<?php echo get_permalink($prevPost->ID);?>"><img src="<?php $thumbUrlPrev = wp_get_attachment_image_src(get_post_thumbnail_id($prevPost->ID),'thumbnail'); echo $thumbUrlPrev[0]; ?>" width="100" height="100" alt=""></a>
		</div>
		<div class="textRight">
			<a href="<?php echo get_permalink($prevPost->ID);?>"><?php echo $prevPost->post_title ;?></a>
		</div>
		<?php else:?>
		<div class="prevNone">
			<p>最後の記事です</p>
		</div>
		<?php endif;?>
	</div>

	<div class="right">
		<?php 
			$nextPost = get_adjacent_post(false,'', false);
			if($nextPost):
		?>
		<div class="imgLeft">
			<a href="<?php echo get_permalink($nextPost->ID);?>"><img src="<?php $thumbUrlNext = wp_get_attachment_image_src(get_post_thumbnail_id($nextPost->ID),'thumbnail'); echo $thumbUrlNext[0]; ?>" width="100" height="100" alt=""></a>
		</div>
		<div class="textRight">
			<a href="<?php echo get_permalink($nextPost->ID);?>"><?php echo $nextPost->post_title ;?></a>
		</div>
		<?php else:?>
		<div class="nextNone">
			<p>最新の記事です</p>
		</div>
		<?php endif;?>
	</div>
</div>
