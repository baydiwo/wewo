<?php get_header(); ?>

	<?php if( ! of_get_option( 'tokopress_page_title_disable' ) ) : ?>
		<?php get_template_part( 'block-page-title' ); ?>
	<?php endif; ?>

	<div id="main-content">

		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<?php if ( have_posts() ) : ?>

						<div class="main-wrapper">
							<div class="row">

							<?php do_action( 'tokopress_before_content' ); ?>

							<?php
							/**
							 * Mod Class
							 */
							$counter = 1;
							?>

							<?php while ( have_posts() ) : the_post(); ?>

								<?php
								global $tp_post_classes;
								if ( 0 == ( $counter - 1 ) % 3 || 1 == 3 ) {
									$tp_post_classes = 'col-sm-4 first';
								}
								elseif ( 0 == $counter % 2 ) {
									$tp_post_classes = 'col-sm-4 last';
								}
								else {
									$tp_post_classes = 'col-sm-4';
								}
								?>

								<?php if( class_exists( 'Tribe__Events__Main' ) && get_post_type() == 'tribe_events' ) : ?>
									<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?> blog-list tribe-events-list <?php echo $tp_post_classes; ?>">
										<?php tribe_get_template_part( 'list/single', 'event' ) ?>
									</div><!-- .hentry .vevent -->
								<?php else : ?>
									<?php get_template_part( 'content', 'photo' ); ?>
								<?php endif; ?>

							<?php $counter++; endwhile; ?>

							<?php do_action( 'tokopress_after_content' ); ?>

							</div>
						</div>

					<?php else : ?>

						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>

				</div>

				<?php //get_sidebar(); ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
