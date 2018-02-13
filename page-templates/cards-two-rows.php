<?php
/**
 * Template Name: Six Cards
 *
 * Bootstrap Cards mufux
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<a href="<?php the_field('card_1_link'); ?>" target="_blank">
								<img class="card-img-top" src=<?php the_field('card_1_image'); ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_1_title'); ?></h2>
									<p class="card-text"><?php the_field('card_1_description'); ?></p>
								</div>
							</a>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<a href="<?php the_field('card_2_link'); ?>" target="_blank">
								<img class="card-img-top" src=<?php the_field('card_2_image'); ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_2_title'); ?></h2>
									<p class="card-text"><?php the_field('card_2_description'); ?></p>
								</div>
								</a>
							</div>
						</div>

						<div class="col-md-4">

							<div class="card">
								<a href="<?php the_field('card_3_link'); ?>" target="_blank">
								<img class="card-img-top" src=<?php the_field('card_3_image'); ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_3_title'); ?></h2>
									<p class="card-text"><?php the_field('card_3_description'); ?></p>
								</div>
								</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">

							<div class="card">
								<a href="<?php the_field('card_4_link'); ?>" target="_blank">
								<img class="card-img-top" src=<?php the_field('card_4_image'); ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_4_title'); ?></h2>
									<p class="card-text"><?php the_field('card_4_description'); ?></p>
								</div>
								</a>
							</div>

						</div>
						<div class="col-md-4">

							<div class="card">
								<a href="<?php the_field('card_5_link'); ?>" target="_blank">
								<img class="card-img-top" src=<?php the_field('card_5_image'); ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_5_title'); ?></h2>
									<p class="card-text"><?php the_field('card_5_description'); ?></p>
								</div>
								</a>
							</div>

						</div>
						<div class="col-md-4">

							<div class="card">
								<a href="<?php the_field('card_6_link'); ?>" target="_blank">
								<img class="card-img-top" src=<?php the_field('card_6_image'); ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_6_title'); ?></h2>
									<p class="card-text"><?php the_field('card_6_description'); ?></p>
								</div>
								</a>
							</div>

						</div>
					</div>


				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
