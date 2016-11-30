<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage EMiAC-Works
 * @since 2.0
 */
$catParent = get_the_category();
$count = null;
$count = count($catParent);
if($count > 1){
    $catParent = $catParent[1];
}else{
    $catParent = $catParent[0];
}

//親カテゴリの存在チェック
if($catParent->category_parent !== 0){
	$parentCatArray = get_terms('category','child_of='.$catParent->category_parent);
	$parentID = $catParent->category_parent;
}else{
//自身が親カテゴリの場合
	$categoryid = get_cat_ID(single_cat_title('',false));
	$parentID = $categoryid;
	$parentCatArray = get_terms('category','child_of='.$categoryid);
}
get_header(); ?>

<main>
	<div class="contents clearfix">
		<div class="contents-main">


		<div class="category-list">
			<p class="category-parent">Category : <?php $catParentName = get_category($parentID); echo $catParentName->cat_name; ?></p>
			<ul class="category-child">
			<?php foreach ($parentCatArray as $key): ?>
				<li><a href="<?php echo esc_url(get_category_link($key->term_id)); ?>"><?php echo esc_html($key->name); ?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>

		<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 

				get_template_part('content','list');
		?>

		<?php endwhile; else: endif; ?>

		<?php 
			if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
			} 
		?>

	</div><!-- /.contents-main -->

	<?php get_sidebar(); ?>

	</div><!-- /.contents -->
</main>




<?php get_footer(); ?>
