<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      $image = $image[0]; ?>
      <?php else :
      $image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
      <?php endif; ?>
    <div class="jumbotron" style="background-image: url('<?php echo $image; ?>')" >

      <div class="container">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-left')); ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-center')); ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-right')); ?>
        </div>
      </div>

<?php get_footer(); ?>
