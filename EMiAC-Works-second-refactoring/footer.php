<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */
?>
<footer>
	<div class="footerInner clearfix">
		<div class="footer-category">
			<h3 class="footer-title">Category</h3>
			<ul class="cat">
				<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'category', 'show_count' => 0, 'hide_empty' => 0 , 'hierarchical' => 1, 'exclude' => 1)); ?>
			</ul>
		</div>

		<div class="footer-tag">
			<h3 class="footer-title">Tag Cloud</h3>
			<?php
				 $tags = get_terms('post_tag', 'hide_empty=1');
			?>
			<ul class="tagsCloud">
			<?php foreach ($tags as $tag) : ?>
				<li><a href="<?php echo get_tag_link($tag->term_id); ?>"><svg class="footer-tag_icon"><use xlink:href="#icon-tag"/></svg><?php echo $tag->name; ?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>

		<div class="footer-social">
			<h3 class="footer-title">Social</h3>
			<ul class="social">
				<li><a href="https://twitter.com/EMiACWorks" target="_blank" class="social_twitter hvr-reveal"><svg class="footer-social_icon"><use xlink:href="#icon-twitter"/></svg>Twitter</a></li>
				<li><a href="https://www.youtube.com/channel/UCJtGHNqVSLTnJF5x3vsUh4Q" target="_blank" class="social_youtube"><svg class="footer-social_icon"><use xlink:href="#icon-youtube-play"/></svg>YouTube</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" target="_blank" class="social_rss"><svg class="footer-social_icon"><use xlink:href="#icon-rss"/></svg>RSS</a></li>
				<li><a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Femiac-works.com%2Ffeed%2Fatom%2F" target="_blank" class="social_feedly"><svg class="footer-social_icon"><use xlink:href="#icon-feedly"/></svg>Feedly</a></li>
			</ul>
			<br>
			<p>Support Browser <small>(Mobile Friendly!)</small></p>
				<ul class="footer-browser">
					<li><svg class="footer-browser_icon"><use xlink:href="#icon-chrome"/></svg>+v35.x</li>
					<li><svg class="footer-browser_icon"><use xlink:href="#icon-firefox"/></svg>+v30.x</li>
					<li><svg class="footer-browser_icon"><use xlink:href="#icon-safari"/></svg>+v6.x</li>
					<li><svg class="footer-browser_icon"><use xlink:href="#icon-IE"/></svg>+9</li>
				</ul>
			<p><small>Design Version 2.5.1</small></p>
		</div>

	</div><!-- /.footerInner -->

	<p class="copy">&copy; EMiAC Works All Rights Reserved.</p>
</footer>

<?php wp_footer(); ?>

<?php if( is_single() ){ ?>
<!-- Facebook SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=330209010520856&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End of Facebook SDK -->
<!-- Hatena SDK -->
<script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<!-- End of Hatena SDK -->
<!-- Twitter SDK -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- End of Twitter SDK -->
<!-- Google Plus SDK -->
<script src="https://apis.google.com/js/platform.js" async defer>{lang: 'ja'}</script>
<!-- End of Google Plus SDK -->
<!-- Pocket SDK -->
<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
<!-- End of Pocket SDK -->
<?php } ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php if( !is_user_logged_in() ): ?>
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
<?php endif; ?>
</body>
</html>