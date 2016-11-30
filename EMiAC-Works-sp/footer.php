<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
$noHeadUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = 'http://'.$noHeadUrl;
?>
<!-- FOOTER -->
<div class="footer bottomLayer">
	<h2>Social Network/RSS</h2>

	<ul class="list-menu social">
		<li>
			<a href="https://twitter.com/EMiACWorks" target="_blank" class="parts_arrow_right"><svg class="list-menu_icon"><use xlink:href="#icon-twitter3"/></svg><span>Twitter</span></a>
		</li>
		<li>
			<a href="#" class="parts_arrow_right"><svg class="list-menu_icon"><use xlink:href="#icon-facebook3"/></svg><span>Facebook</span></a>
		</li>
		<li>
			<a href="https://ello.co/nismit" target="_blank" class="parts_arrow_right"><svg class="list-menu_icon"><use xlink:href="#icon-ello"/></svg><span>Ello</span></a>
		</li>
		<li>
			<a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Femiac-works.com%2Ffeed%2Fatom%2F" target="_blank" class="parts_arrow_right"><svg class="list-menu_icon"><use xlink:href="#icon-feedly"/></svg><span>Feedly</span></a>
		</li>
		<li>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" target="_blank" class="parts_arrow_right"><svg class="list-menu_icon"><use xlink:href="#icon-feed4"/></svg><span>RSS</span></a>
		</li>
	</ul>

	<h2>TagCloud</h2>

	<?php
		 $tags = get_terms('post_tag', 'hide_empty=1');
	?>
	<ul class="tagsCloud">
	<?php foreach ($tags as $tag) : ?>
		<li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
	<?php endforeach; ?>
	</ul>
	
	<div class="footerEnd">
		<div class="footerPageTop">
			<a href="#top" class="pageTop">Page Top</a>
		</div>

		<p class="copy">&copy; EMiAC Works All Rights Reserved.</p>
	</div><!-- /.footerEnd -->
</div><!-- /.footer -->
<!-- END OF FOOTER -->

<div class="gNav">
	<a href="javascript:;" class="toggle"><svg class="btn ico-toggle"><use xlink:href="#icon-plus"/></svg></a>

	<ul class="menu">
		<li><a href="#top" class="pageTop"><svg class="btn ico-pagetop"><use xlink:href="#icon-arrow-up"/></svg></a></li>
		<li><a href="javascript:;"><svg class="btn ico-share"><use xlink:href="#icon-share-alt"/></svg></a></li>
		<li><a href="javascript:;"><svg class="btn ico-category"><use xlink:href="#icon-list-ul"/></svg></a></li>
	</ul>
</div>

<div class="overlayBlock">
	<a href="javascript:;" class="overlayBlock-close"><svg><use xlink:href="#icon-plus"/></svg></a>

	<div class="menuBlock share">
		<h3>Share</h3>

		<ul>
			<li>
				<a href="http://twitter.com/share?text=<?php the_title();?>&url=<?php echo rawurlencode($url); ?>&via=EMiACWorks" target="_blank" class="parts_arrow_right"><svg class="menuIco color-twitter"><use xlink:href="#icon-twitter3"/></svg><span>Twitter</span></a>
			</li>
			<li>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode($url); ?>" target="_blank" class="parts_arrow_right"><svg class="menuIco color-facebook"><use xlink:href="#icon-facebook3"/></svg><span>Facebook</span></a>
			</li>
			<li>
				<a href="https://plus.google.com/share?url=<?php echo $noHeadUrl; ?>" target="_blank" class="parts_arrow_right"><svg class="menuIco color-google"><use xlink:href="#icon-google-plus3"/></svg><span>Google+</span></a>
			</li>
			<li>
				<a href="http://b.hatena.ne.jp/entry/<?php echo $noHeadUrl; ?>" target="_blank" class="parts_arrow_right"><svg class="menuIco color-hatena"><use xlink:href="#icon-hatena"/></svg><span>はてなブックマーク</span></a>
			</li>
			<li>
				<a href="http://getpocket.com/edit?url=<?php echo rawurlencode($url); ?>" target="_blank" class="parts_arrow_right"><svg class="menuIco color-pocket"><use xlink:href="#icon-pocket"/></svg><span>Pocket</span></a>
			</li>
		</ul>
	</div><!-- /.shareBlock -->

	<div class="menuBlock category">
		<h3>Category</h3>

		<ul>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
			<li class="nest"><a href="javascript:;">Coding<svg class="menuIco ico-close"><use xlink:href="#icon-circle-down"/></svg></a>
				<ul class="child">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/coding/css/" class="parts_arrow_right">CSS</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/coding/jquery/" class="parts_arrow_right">jQuery</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/coding/wordpress/" class="parts_arrow_right">WordPress</a></li>
				</ul>
			</li>
			<li class="nest"><a href="javascript:;">Design<svg class="menuIco ico-close"><use xlink:href="#icon-circle-down"/></svg></a>
				<ul class="child">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/design/webdesign/" class="parts_arrow_right">Webdesign</a></li>
				</ul>
			</li>
			<li class="nest"><a href="javascript:;">Other<svg class="menuIco ico-close"><use xlink:href="#icon-circle-down"/></svg></a>
				<ul class="child">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/other/memo/" class="parts_arrow_right">Memo</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/other/music/" class="parts_arrow_right">Music</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/other/ordinary/" class="parts_arrow_right">Ordinary</a></li>
				</ul>
			</li>
			<li class="nest"><a href="javascript:;">Works<svg class="menuIco ico-close"><use xlink:href="#icon-circle-down"/></svg></a>
				<ul class="child">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/works/film/" class="parts_arrow_right">Film</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/works/launch/" class="parts_arrow_right">Launch</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.categoryBlock -->
</div><!-- /.overlayBlock -->

<?php wp_footer(); ?>
<!-- JS -->
<!--script src="https://code.jquery.com/jquery-2.1.3.min.js"></script-->
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.smooth-scroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/common.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GA TAGS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50349535-1', 'emiac-works.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<!-- End of GA TAGS -->
</body>
</html>
