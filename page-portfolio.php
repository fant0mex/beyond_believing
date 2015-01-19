<?php
/*
  Template Name: Portfolio Grid Template
*/
?>
<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php endwhile; else: ?>
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>
            <p>No content is appearing for this page, bummer.</p>
        <?php endif; ?>
        </div>
      </div>

      <div class="row push">
        <div class="genre">
          <ul id="filters">
            <?php
              $terms = get_terms("category"); // get all categories, but you can use any taxonomy
              $count = count($terms); //How many are they?
              if ( $count > 0 ){  //If there are more than 0 terms
                foreach ( $terms as $term ) {  //for each term:
                  echo "<a href='#' data-filter='.".$term->slug."'><li>" . $term->name . "</li></a>\n";
                    //create a list item with the current term slug for sorting, and name for label
                  }
                }
              ?>
          </ul>
        </div>
      </div>

      <?php
        $args = array(
          'post_type'=>'portfolio'
        );
        $the_query = new WP_Query($args);
      ?>



      <?php if ( $the_query->have_posts() ) : ?>

        <div id="isotope-list">
          <div class="row">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post();
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumnail-size', true);
            $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
            $termsString = ""; //initialize the string that will contain the terms
            foreach ( $termsArray as $term ) { // for each term
              $termsString .= $term->slug.' '; //create a string that has all the slugs
            }
          ?>

          <div class="col-md-4 portfolio-piece cosplay <?php echo $termsString; ?>">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><span class='blue-overlay'><h3><?php the_title(); ?></h3></span></a>
          </div>
          <?php endwhile; ?>
          <?php $portfolio_count = $the_query->current_post + 1; ?>
          <?php if ($portfolio_count % 3 == 0): ?>
        </div>
        </div>
        <?php endif; ?>

        <?php endif; ?>

      </div>
    </div>
  </div>
<?php get_footer(); ?>