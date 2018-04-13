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
 $args = array( 'post_type' => 'still','orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 15 );
 $loop = new WP_Query( $args );
 $slide = 1;

 ?>

 <div class="wrapper" id="full-width-page-wrapper">

 	<div class="<?php echo esc_attr( $container ); ?>" id="content">

 		<div class="row">

 			<div class="col-md-12 content-area" id="primary">

 				<main class="site-main" id="main" role="main">

 					<div class="row">
            <div class="card-columns">
              <?php
              while ( $loop->have_posts() ) : $loop->the_post();
                $image_obj = get_field('image');
                $image = $image_obj['sizes']['large'];
              ?>

 							<div class="card">
 								<a>
 								<img class="card-img-top" onclick="openModal();currentSlide(<?php echo $slide ?>)" src=<?php echo $image; ?> alt=<?php echo $image_obj['alt']; ?>>
 								<div class="card-block">
 									<h2 class="card-title"><?php the_title(); ?></h2>
                  <p class="card-text"><?php the_field('image_description'); ?></p>
 								</div>
 								</a>
              </div>

            <?php
              $slide++;
              endwhile; ?>
          </div>
        </div>





 				</main><!-- #main -->

 			</div><!-- #primary -->

 		</div><!-- .row end -->

 	</div><!-- Container end -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
      <?php
        while ( $loop->have_posts() ) : $loop->the_post();
          $image_obj = get_field('image');
          $image = $image_obj['sizes']['large'];
      ?>
      <div class="mySlides">

        <img src=<?php echo $image; ?> >
      </div>
    <?php endwhile; ?>



      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
  </div>
 </div><!-- Wrapper end -->

 <script src="<?php echo get_template_directory_uri();?>/js/lightbox.js"></script>

 <script>
  var modal = document.getElementById('myModal');
  window.onclick = function(event){
    if (event.target == modal) {
      closeModal();
    }
  }
 </script>
 <?php get_footer(); ?>
