<?php
	$imageurl = null;
if (in_category('video')) {
	$youtube_url = get_field('youtube_url');
	$youtube_id = substr($youtube_url, strpos($youtube_url, "=") + 1);
	$imageurl = "http://img.youtube.com/vi/".$youtube_id."/maxresdefault.jpg";
}

//the_post_thumbnail_url()
?>
<section id="page-title" class="page-title" style="<?php echo (!$imageurl ? "" : "background:url('".$imageurl."');"); ?> background-size: cover; background-position-y:40%;">
	<div class="container">

		<?php tokopress_breadcrumb(); ?>

		<?php if( is_front_page() ) { ?>

			<h1><?php _e( 'Home', 'tokopress' ); ?></h1>

		<?php } elseif ( is_home() ) { ?>

			<h1><?php echo get_post_field( 'post_title', get_queried_object_id() ); ?></h1>

		<?php } elseif ( is_category() ) { ?>

			<h1><?php printf( __( '%s', 'tokopress' ), single_cat_title( '', false ) ); ?></h1>

		<?php } elseif ( is_tag() ) { ?>

			<h1><?php printf( __( 'Tags: %s', 'tokopress' ), single_tag_title( '', false ) ); ?></h1>

		<?php } elseif ( is_tax() ) { ?>

			<h1><?php single_term_title(); ?></h1>

		<?php } elseif ( is_author() ) { ?>

			<h2 class="loop-title fn n"><?php the_author_meta( 'display_name', get_query_var( 'author' ) ); ?></h1>

		<?php } elseif ( is_search() ) { ?>

			<h1><?php echo esc_attr( get_search_query() ); ?></h1>

		<?php } elseif ( is_day() ) { ?>

			<h1><?php echo get_the_time( __( 'F d, Y', 'tokopress' ) ); ?></h1>

		<?php } elseif ( is_month() ) { ?>

			<h1><?php echo get_the_time( __( 'F Y', 'tokopress' ) ); ?></h1>

		<?php } elseif ( is_year() ) { ?>

			<h1><?php echo get_the_time( __( 'Y', 'tokopress' ) ); ?></h1>

		<?php } elseif ( is_archive() ) { ?>

				<?php if( is_post_type_archive( 'project' ) ) { ?>

					<h1><?php _e( 'Projects', 'tokopress' ); ?></h1>

				<?php } elseif ( class_exists( 'woocommerce' ) && is_post_type_archive( 'product' ) ) { ?>

					<h1><?php _e( 'Shop', 'tokopress' ); ?></h1>

				<?php } else { ?>

					<h1><?php _e( 'Archives', 'tokopress' ); ?></h1>

				<?php } ?>

		<?php } elseif ( is_single() ) { ?>

			<h1><?php the_title(); ?></h1>

		<?php } elseif ( is_page() ) { ?>

			<h1><?php the_title(); ?></h1>

		<?php } elseif( is_404() ) { ?>

			<h1><?php _e( '404 - Not Found', 'tokopress' ); ?></h1>

		<?php } ?>

	</div>
</section>
