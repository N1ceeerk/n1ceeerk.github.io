<?php 
/*
Template Name: Портфолио
*/
 ?>


<?php get_header(); ?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center header-text-title">Portfolio</h2>
        <hr class="star-primary">
        <div class="row">

          

          <?php 
            // параметры по умолчанию
            $posts = get_posts( array(
              'numberposts' => 6,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
              setup_postdata($post);
                ?> 
                <div class="col-sm-4 portfolio-item">
                  <a class="portfolio-link" href="<?php the_permalink(); ?>">
                    <div class="caption">
                      <div class="caption-content">
                        <?php the_title(); ?><br><?php the_excerpt(); ?>
                      </div>
                    </div>
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </a>
                </div>
        
                <?php 
            }

            wp_reset_postdata(); // сброс
           ?>
           </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>   
