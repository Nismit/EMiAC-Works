<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
$categoryLoops = get_the_category();
get_header(); ?>

<main class="bottomLayer">

	<ul class="breadcrumb">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
		<?php
			foreach ($categoryLoops as $value) {
				if( $value->parent == 0  ){
					echo '<li><a href="'.esc_url( home_url( '/' ) ).'category/'.$value->slug.'/">'.$value->cat_name.'</a></li>';
				}else{
					$parentCategory = get_category( $value->parent );
					echo '<li><a href="'.esc_url( home_url( '/' ) ).'category/'.$parentCategory->slug.'/'.$value->slug.'/">'.$value->cat_name.'</a></li>';
				}
			}
		?>
	</ul>

	<div class="titleBlock">
		<h1 class="titleBlock-headline"><?php echo single_cat_title('',false); ?>の記事一覧</h1>
	</div><!-- /.title -->

	<ul class="contents-list">

		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>

		<?php endwhile; else: endif; ?>

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
