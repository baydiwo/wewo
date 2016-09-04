<?php
$args = array(
	'post_status'=>'publish',
	'post_type'=> 'post',
	'posts_per_page'=>1,
	'orderby'=>'date',
	'order'=>'DESC',
	'ignore_sticky_posts' => true,
	'cat' => !52
	);
$the_recent_post = new WP_Query( $args );
?>

<?php if( $the_recent_post->have_posts() ) : ?>

			<div class="row">

				<div class="col-md-12">

					<?php if ( have_posts() ) : ?>

						<div class="main-wrapper">

							<?php do_action( 'tokopress_before_content' ); ?>

							<?php while ( $the_recent_post->have_posts() ) : ?>
								<?php $the_recent_post->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-single blog-home clearfix' ); ?>>

									<div class="inner-post">
										<?php if( has_post_thumbnail() ) : ?>
											<div class="post-thumbnail">
												<?php the_post_thumbnail(); ?>
											</div>
										<?php endif; ?>

										<div class="col-md-9 col-md-push-3">
											<div class="post-summary">
												<a class="recent-post-nav" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><h1 class="post-title"><?php the_title(); ?></h1></a>

												<?php the_content(); ?>

												<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'tokopress' ) . '</span>', 'after' => '</p>' ) ); ?>
											</div>
										</div>

										<div class="col-md-3 col-md-pull-9">
											<div class="post-meta">
												<ul class="list-post-meta">
													<li>
														<div class="post-date"><time><?php echo tokopress_get_post_date(); ?></time></div>
													</li>
													<li>
														<div class="post-term-category"><?php echo tokopress_get_post_terms( array( 'taxonomy' => 'category', 'before' => '<p>' . __( 'Posted Under', 'tokopress' ) . '</p>' ) ); ?></div>
													</li>
													<li>
														<div class="post-author">
															<?php echo tokopress_get_post_author(); ?>
														</div>
													</li>

													<li>
														<div class="post-term-tags"><?php echo tokopress_get_post_terms( array( 'before' => '<p>' . __( 'Tags', 'tokopress' ) . '</p>' ) ); ?></div>
													</li>

												</ul>
											</div>
										</div>
									</div>

								</article>

							<?php endwhile; ?>

							<?php do_action( 'tokopress_after_content' ); ?>

						</div>

					<?php else : ?>

						<?php get_template_part( 'content', '404' ); ?>

					<?php endif; ?>

				</div>
			</div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
