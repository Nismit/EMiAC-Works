<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<aside>
	<h3 class="aside-title">Search</h3>
		<div class="asideInner form">
			<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input name="s" id="s" type="text" placeholder="ブログ内を検索" class="aside-input_text">
				<svg class="aside-input_icon"><use xlink:href="#icon-search"/></svg>
				<input type="submit" class="aside-input_submit" value="Search">
			</form>
		</div><!-- /.asideInner -->

	<h3 class="aside-title">Ads</h3>
		<div class="asideInner">
			<div class="aside-leftAd">
				<a href="http://px.a8.net/svt/ejp?a8mat=2HFF08+FQ792Q+CO4+ZT81D" target="_blank">
				<img border="0" width="125" height="125" alt="" src="http://www22.a8.net/svt/bgt?aid=150205112951&wid=001&eno=01&mid=s00000001642006015000&mc=1"></a>
				<img border="0" width="1" height="1" src="http://www13.a8.net/0.gif?a8mat=2HFF08+FQ792Q+CO4+ZT81D" alt="">
			</div><!-- /.aside-leftAd -->

			<div class="aside-rightAd">
				<a href="http://px.a8.net/svt/ejp?a8mat=2BY558+4BZL9U+50+2HIQIP" target="_blank">
				<img border="0" width="125" height="125" alt="" src="http://www29.a8.net/svt/bgt?aid=141001100262&wid=001&eno=01&mid=s00000000018015036000&mc=1"></a>
				<img border="0" width="1" height="1" src="http://www16.a8.net/0.gif?a8mat=2BY558+4BZL9U+50+2HIQIP" alt="">
			</div>

			<div class="clearfix"></div>

			<div class="aside-leftAd">
				<div style="background-color:#ccc;width:123px;height:123px;border:1px solid #ddd"></div>
			</div>

			<div class="aside-rightAd">
				<a href="http://px.a8.net/svt/ejp?a8mat=2BY558+66O50Y+348+U5TI9" target="_blank">
				<img border="0" width="125" height="125" alt="" src="http://www26.a8.net/svt/bgt?aid=141001100374&wid=001&eno=01&mid=s00000000404005066000&mc=1"></a>
				<img border="0" width="1" height="1" src="http://www15.a8.net/0.gif?a8mat=2BY558+66O50Y+348+U5TI9" alt="">
			</div>

			<div class="clearfix"></div>
			
		</div><!-- /.asideInner -->

	<h3 class="aside-title">Recently Posts</h3>
		<div class="asideInner">
			<?php
			query_posts(array(
				'posts_per_page' => '5',
				'category_name' =>$catName
			));
			if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post clearfix">
				<a href="<?php the_permalink(); ?>" class="left"><?php the_post_thumbnail('thumbnail'); ?></a>
				<a href="<?php the_permalink(); ?>" class="right"><?php the_title(); ?></a>
			</div>

			<?php endwhile; else: 
			endif; wp_reset_query(); ?>
		</div><!-- /.asideInner -->

	<div class="asideInner">
		<div class="aside-ads">
		<?php if(is_single()){ ?>
		<a href="http://www.amazon.co.jp/exec/obidos/ASIN/B005HGCNU2/emiacworks-22/" rel="nofollow" target="_blank"><img src="http://ecx.images-amazon.com/images/I/31hnBQ7y-JL._SX252_.jpg" alt="SteelSeries Sensei マウス 62150" /></a>
		<a href="http://www.amazon.co.jp/exec/obidos/ASIN/B005HGCNU2/emiacworks-22/" rel="nofollow" target="_blank">SteelseriesのSenseiマウスを今使ってます。オススメです(滑り止めあるとよりいいです)</a>
		<?php }else{ ?>
		<!-- 右サイドバー下 -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:252px;height:252px"
		     data-ad-client="ca-pub-6436791468025792"
		     data-ad-slot="9798956069"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<?php } ?>
		</div><!-- /.aside-ads -->

		<?php if(!is_home()){ ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn_cat"><svg class="aside-cat_icon"><use xlink:href="#icon-home"/></svg>Home</a>
		
			<?php if(strstr($url,'/coding') ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/coding" class="btn_cat"><svg class="aside-cat_icon"><use xlink:href="#icon-code"/></svg>Coding</a>

			<?php }else if(strstr($url,'/design') ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/design" class="btn_cat"><svg class="aside-cat_icon"><use xlink:href="#icon-website"/></svg>Design</a>

			<?php }else if(strstr($url,'/other') ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/other" class="btn_cat"><svg class="aside-cat_icon"><use xlink:href="#icon-pencil"/></svg>Other</a>
			<?php }else{} ?>

		<?php } ?>

		<a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Femiac-works.com%2Ffeed%2Fatom%2F'  target='blank' class="btn_cat feedly"><svg class="aside-cat_icon"><use xlink:href="#icon-feedly"/></svg>Feedly</a>
	</div><!-- /.asideInner -->

</aside>
