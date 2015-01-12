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

            <div class="page-header">
              <h1><?php the_title(); ?></h1>
            </div>

          <?php endwhile; else: ?>
            <div class="page-header">
              <h1>Oh No!</h1>
            </div>
            <p>No content is appearing for this page, bummer.</p>

          <?php endif; ?>
        </div>
      </div>

      <!-- <div class="row">
        <div class="genre">
          <ul>
            <a href="#"><li>
              Design
            </li></a>
            <a href="#"><li>
              Video
            </li></a>
            <a href="#"><li>
              Photography
            </li></a>
          </ul>
        </div>
      </div> -->

      <div class="row">

        <?php
          $args = array(
            'post_type'=>'portfolio'
          );
          $the_query = new WP_Query($args);
        ?>

        <?php if (have_posts()) : while($the_query->have_posts()) : $the_query->the_post();?>

        <div class="col-md-4 portfolio-piece cosplay">

          <?php
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumnail-size', true);
          ?>

          <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><span class='blue-overlay'><h3><?php the_title(); ?></h3></span></a>

        </div>

        <?php $portfolio_count = $the_query->current_post + 1; ?>

        <?php if ($portfolio_count % 4 == 0): ?>

        </div>

        <div class="row">

        <?php endif; ?>

        <?php endwhile; endif; ?>

      </div>

<?php get_footer(); ?>