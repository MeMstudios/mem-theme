<?php
/**
 * Template Name: Videos Template
 *
 * Bootstrap Cards mufux
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$args = array( 'post_type' => 'video', 'posts_per_page' => 15 );
$loop = new WP_Query( $args );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="row">
						<?php
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
						<div class="col-md-4">

							<div class="card">
								<a>
								<div class="card-img-top">
									<iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php the_field('youtube_id');?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
								<div class="card-block">
									<h2 class="card-title"><?php the_title(); ?></h2>
									<p class="card-text"><?php the_field('video_description'); ?></p>
								</div>
								</a>
							</div>

						</div>
					<?php endwhile; ?>

				</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
