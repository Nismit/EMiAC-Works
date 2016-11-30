<?php
/**
 * The Template for displaying all single posts
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
					echo '<li>'.$value->cat_name.'</li>';
				}
			}
		?>
	</ul>

	<?php
		while ( have_posts() ) : the_post();
			get_template_part('content','single');
		endwhile;
	?>
	
</main>

<?php get_footer(); ?>
