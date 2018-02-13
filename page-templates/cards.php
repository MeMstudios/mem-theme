<?php
/**
 * Template Name: Homepage Cards
 *
 * Bootstrap Cards mufux
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$images = array();
for ($i=1; $i <= 3; $i++){
	$img_obj = get_field('card_'.$i.'_image');
	$images[$i] = $img_obj['sizes']['large'];
}

?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<a href="<?php the_field('card_1_link'); ?>">
								<img class="card-img-top" src=<?php echo $images[1]; ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_1_title'); ?></h2>
									<p class="card-text"><?php the_field('card_1_description'); ?></p>
								</div>
							</a>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<a href="<?php the_field('card_2_link'); ?>">
								<img class="card-img-top" src=<?php echo $images[2]; ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_2_title'); ?></h2>
									<p class="card-text"><?php the_field('card_2_description'); ?></p>
								</div>
								</a>
							</div>
						</div>

						<div class="col-md-4">

							<div class="card">
								<a href="<?php the_field('card_3_link'); ?>">
								<img class="card-img-top" src=<?php echo $images[3]; ?>>
								<div class="card-block">
									<h2 class="card-title"><?php the_field('card_3_title'); ?></h2>
									<p class="card-text"><?php the_field('card_3_description'); ?></p>
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
