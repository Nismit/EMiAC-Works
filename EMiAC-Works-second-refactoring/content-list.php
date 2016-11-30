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
$noHeadUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = 'http://'.$noHeadUrl;
?>

			<article class="contents-list">
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

				<div class="inner">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="contents-list_eyeCatch">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(744); ?></a>
					</div>

			        <div class="contents-list_social clearfix">
			         	<ul>
			         		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="share-facebook"><svg class="list-share_icon"><use xlink:href="#icon-facebook"/></svg>Facebook</a></li>
			         		<li><a href="http://twitter.com/share?text=<?php the_title();?>&url=<?php the_permalink(); ?>&via=EMiACWorks" target="_blank" class="share-twitter"><svg class="list-share_icon"><use xlink:href="#icon-twitter"/></svg>Twitter</a></li>
			         		<li><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" target="_blank" class="share-hatena"><svg class="list-share_icon"><use xlink:href="#icon-hatena"/></svg>はてブ</a></li>
			         		<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="share-google"><svg class="list-share_icon"><use xlink:href="#icon-google-plus"/></svg>Google+</a></li>
			         		<li><a href="http://getpocket.com/edit?url=<?php the_permalink(); ?>" target="_blank" class="share-pocket"><svg class="list-share_icon"><use xlink:href="#icon-pocket"/></svg>Pocket</a></li>
			         	</ul>
			        </div>


					<?php the_excerpt(); ?>

					<div class="btn_continue">
						<a href="<?php the_permalink(); ?>"><span>続きを読む</span><em>&gt;</em></a>
					</div>
				</div>
			</article>


