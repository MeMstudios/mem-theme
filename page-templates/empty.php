<?php
/**
 * Template Name: Masonry Cards
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
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
            <div class="card-columns">
 						<div class="md-col-4">

 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(1)" src=<?php the_field('card_1_image'); ?> alt="Film Image">
 								<div class="card-block">
 									<h2 class="card-title"><?php the_field('card_1_title'); ?></h2>
 									<p class="card-text"><?php the_field('card_1_description'); ?></p>
 								</div>
 								</a>
 							</div>

 						</div>
 						<div class="md-col-4">
 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(2)" src=<?php the_field('card_2_image'); ?> alt="Stills Image">
 								<div class="card-block">
 									<h2 class="card-title"><?php the_field('card_2_title'); ?></h2>
 									<p class="card-text"><?php the_field('card_2_description'); ?></p>
 								</div>
 								</a>
 							</div>
 						</div>
 						<div class="md-col-4">
 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(3)" src=<?php the_field('card_3_image'); ?> alt="Commercials Image">
 								<div class="card-block">
 									<h2 class="card-title"><?php the_field('card_3_title'); ?></h2>
 									<p class="card-text"><?php the_field('card_3_description'); ?></p>
 								</div>
 							</a>
 							</div>
 						</div>

 						<div class="md-col-4">

 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(4)" src=<?php the_field('card_4_image'); ?> alt="Film Image">
 								<div class="card-block">
 									<h2 class="card-title"><?php the_field('card_4_title'); ?></h2>
 									<p class="card-text"><?php the_field('card_4_description'); ?></p>
 								</div>
 								</a>
 							</div>

 						</div>
 						<div class="md-col-4">
 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(5)" src=<?php the_field('card_5_image'); ?> alt="Stills Image">
 								<div class="card-block">
 									<h2 class="card-title"><?php the_field('card_5_title'); ?></h2>
 									<p class="card-text"><?php the_field('card_5_description'); ?></p>
 								</div>
 								</a>
 							</div>
 						</div>
 						<div class="md-col-4">
 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(6)" src=<?php the_field('card_6_image'); ?> alt="Commercials Image">
 								<div class="card-block">
 									<h2 class="card-title"><?php the_field('card_6_title'); ?></h2>
 									<p class="card-text"><?php the_field('card_6_description'); ?></p>
 								</div>
 							</a>
 							</div>
 						</div>
          </div>
 					</div>


 				</main><!-- #main -->

 			</div><!-- #primary -->

 		</div><!-- .row end -->

 	</div><!-- Container end -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src=<?php the_field('card_1_image'); ?> style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src=<?php the_field('card_2_image'); ?> style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src=<?php the_field('card_3_image'); ?> style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src=<?php the_field('card_4_image'); ?> style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src=<?php the_field('card_5_image'); ?> style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src=<?php the_field('card_6_image'); ?> style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <!--
      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <div class="column">
        <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
      </div>

      <div class="column">
        <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Trolltunga">
      </div>

      <div class="column">
        <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
      </div>

      <div class="column">
        <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
      </div
    -->
    </div>
  </div>
 </div><!-- Wrapper end -->

 <script src="<?php echo get_template_directory_uri();?>/js/lightbox.js"></script>
 <?php get_footer(); ?>
