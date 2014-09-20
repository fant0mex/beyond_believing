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
      <div class="activities">
        <div class="row">
          <div class="col-sm-2">
            <i class="fa fa-desktop fa-5x"></i>
          </div>
          <div class="col-sm-4">
            <h4>DESIGN</h4>
            <p>
              Donec id elit non mi porta gravida at eget metus.
              Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
          </div>
          <div class="col-sm-2">
            <i class="fa fa-heart fa-5x"></i>
          </div>
          <div class="col-sm-4">
            <h4>COSPLAY</h4>
            <p>
              Donec id elit non mi porta gravida at eget metus.
              Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <i class="fa fa-camera-retro fa-5x"></i>
          </div>
          <div class="col-sm-4">
            <h4>PHOTOGRAPHY</h4>
            <p>
              Donec id elit non mi porta gravida at eget metus.
              Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
          </div>
          <div class="col-sm-2">
            <i class="fa fa-video-camera fa-5x"></i>
          </div>
          <div class="col-sm-4">
            <h4>VIDEO</h4>
            <p>
              Donec id elit non mi porta gravida at eget metus.
              Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
            </p>
          </div>
        </div>
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
