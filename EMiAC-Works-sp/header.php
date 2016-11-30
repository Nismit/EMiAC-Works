<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage EMiAC-Works-sp
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<title></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/common/css/general.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="all">
<?php wp_head(); ?>
<!--
Thank You Watching this Code.
You're GEEK.
-->
</head>
<body id="top">

<?php include( 'svgdefs.php' ); ?>

<div class="header bottomLayer">
	<a href="javascript:;" class="header-searchBtn"><svg class="header_btn"><use xlink:href="#icon-search"/></svg></a>

	<div class="header-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<svg version="1.1" id="logoLayer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="40px" viewBox="0 0 300 90" enable-background="new 0 0 300 90" xml:space="preserve">
				<g>
					<g>
						<polygon fill="#FF8C32" points="50.609,33.064 23.042,48.977 23.004,37.329 40.537,27.207 		"/>
						<polygon fill="#FA5600" points="77.849,38.943 37.478,62.296 27.429,56.473 67.803,33.122 		"/>
					</g>
					<polyline fill="#FF8C32" points="31.945,76.023 39.843,71.46 30.707,66.188 30.71,66.195 8.901,53.594 8.893,17.871 1.001,22.428 
						1.001,58.161 	"/>
					<g>
						<polyline fill="#FF8C32" points="16.791,22.421 16.791,31.543 25.926,26.268 25.921,26.268 47.729,13.676 78.679,31.536 
							78.679,22.423 47.729,4.555 		"/>
						<polyline fill="#FA5600" points="8.89,53.59 16.792,58.154 16.791,47.605 16.788,47.609 16.791,22.428 47.729,4.555 39.839,0 
							8.89,17.868 		"/>
						<polyline fill="#FA5600" points="62.892,67.273 62.892,58.154 53.756,63.427 53.759,63.427 31.949,76.023 1.001,58.161 
							1.001,67.273 31.949,85.141 		"/>
						<polyline fill="#FF8C32" points="70.789,36.101 62.892,31.543 62.892,42.094 62.894,42.086 62.892,67.27 31.951,85.141 
							39.843,89.697 70.791,71.826 		"/>
						<polyline fill="#FA5600" points="47.729,13.637 39.831,18.196 48.967,23.472 48.963,23.467 70.771,36.06 70.78,71.786 
							78.674,67.23 78.674,31.498 		"/>
					</g>
				</g>
				<g>
					<path d="M95.977,25.942v17.092h7.988v3.498h-7.988v17.097h11.354v3.43H92.546V22.511h14.255v3.431H95.977z"/>
					<path d="M125.973,67.059h-3.896l-7.061-37.353h-0.136v37.353h-3.429V22.511h5.147l7.326,39.271h0.131l7.392-39.271h5.215v44.548
						h-3.433V29.374H133.1L125.973,67.059z"/>
					<path d="M141.391,26.536h3.435v4.62h-3.435V26.536z M144.826,34.85h-3.435v32.208h3.435V34.85z"/>
					<path d="M167.633,67.059h-3.434l-1.779-11.416h-9.038l-1.719,11.416h-3.426l6.791-44.546h5.809L167.633,67.059z M153.906,52.209
						h7.984l-3.895-25.872h-0.133L153.906,52.209z"/>
					<path d="M184.622,37.424V30.43c0-2.84-2.304-5.149-5.144-5.149c-2.842,0-5.149,2.309-5.149,5.149v28.708
						c0,2.836,2.308,5.148,5.149,5.148c2.84,0,5.144-2.312,5.144-5.148V53.07h3.433v6.068c0,4.744-3.826,8.576-8.576,8.576
						c-4.752,0-8.58-3.832-8.58-8.576V30.43c0-4.75,3.828-8.579,8.58-8.579c4.75,0,8.576,3.829,8.576,8.579v6.601L184.622,37.424z"/>
					<path d="M226.531,67.059h-4.086l-3.104-17.488h-0.132l-3.102,17.488h-4.09l-7.986-44.546h3.434l6.534,36.825h0.133l3.433-19.402
						l-3.103-17.421h3.427l6.533,36.824h0.133l6.534-36.824h3.437L226.531,67.059z"/>
					<path d="M236.076,41.648c0-3.958,3.168-7.125,7.13-7.125c3.957,0,7.123,3.167,7.123,7.125v18.608c0,3.962-3.166,7.126-7.123,7.126
						c-3.962,0-7.13-3.164-7.13-7.126V41.648z M239.508,60.266c0,2.036,1.646,3.689,3.698,3.689c2.046,0,3.694-1.653,3.694-3.689V41.648
						c0-2.047-1.648-3.694-3.694-3.694c-2.052,0-3.698,1.647-3.698,3.694V60.266z"/>
					<path d="M264.176,37.955h-2.438c-2.247,0-3.967,1.777-3.967,4.023v25.081h-3.429V34.85h2.378l0.592,2.509
						c1.119-1.713,3.369-2.835,6.862-2.835L264.176,37.955L264.176,37.955z"/>
					<path d="M273.055,50.95h-2.305v16.108h-3.432V22.905l3.432-0.394V47.52h2.443l5.752-12.669h3.419L275.9,49.236l6.464,17.822h-3.419
						L273.055,50.95z"/>
					<path d="M295.195,57.484c0-1.85-1.117-2.767-1.117-2.767l-7.123-5.946c0,0-2.321-1.912-2.321-5.407v-1.98
						c0-3.762,3.104-6.861,6.876-6.861c3.764,0,6.854,3.099,6.854,6.861v2.973l-3.433,0.394v-3.367c0-1.913-1.508-3.43-3.423-3.43
						c-1.917,0-3.434,1.517-3.434,3.43v1.98c0,1.843,1.124,2.766,1.124,2.766l7.123,5.942c0,0,2.314,1.908,2.314,5.41v2.781
						c0,3.953-3.168,7.117-7.129,7.117c-3.958,0-7.135-3.164-7.135-7.117V57.09l3.438-0.392v3.565c0,2.037,1.646,3.69,3.697,3.69
						c2.042,0,3.688-1.653,3.688-3.69V57.484L295.195,57.484z"/>
				</g>
			</svg>
		</a>
	</div>

	<a href="javascript:;" class="header-menuBtn"><svg class="header_btn header_btn-right"><use xlink:href="#icon-list-ul"/></svg></a>
</div><!-- /.header -->

<div class="search bottomLayer">
	<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input placeholder="検索キーワードを入力してください" name="s" id="s" type="text" class="search-input_text input_style_reset" >
		<input type="submit" value="Search" class="search-input_submit input_style_reset"><svg class="search-icon"><use xlink:href="#icon-search"/></svg>
	</form>
</div><!-- /.search -->

