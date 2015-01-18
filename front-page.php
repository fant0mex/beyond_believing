<?php get_header();?>

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
            <p class="p1">
              Donec id elit non mi porta gravida at eget metus.
              Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
          </div>
          <div class="col-sm-2">
            <i class="fa fa-heart fa-5x"></i>
          </div>
          <div class="col-sm-4">
            <h4>COSPLAY</h4>
            <p class="p1">
              Donec id elit non mi porta gravida at eget metus.
              Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
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
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix">
      <div class="projects">
        <div class="container">
          <h3>Most Recent Projects</h3>
          <div class="row">
            <div class="container">
              <div class="my-work">
                <?php
                  $args = array(
                  'post_type'=>'portfolio',
                  'posts_per_page' => 1,
                  );

                  $the_query = new WP_Query($args);
                ?>

                <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>

                <div class="col-sm-6 portfolio-piece">

                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumnail-size', true);
                  ?>

                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><span class='blue-overlay'><h2><?php the_title(); ?></h2></span></a>

                </div>

                <?php endwhile; endif; wp_reset_postdata();

                  $args2 = array(
                    'post_type'=>'cosplay',
                    'posts_per_page' => 1,
                    );

                  $query2 = new WP_Query( $args2 );
                ?>

                <?php if (have_posts()) : while ($query2->have_posts()) : $query2->the_post();?>

                <div class="col-sm-6 portfolio-piece">

                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumnail-size', true);
                  ?>

                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><span class='blue-overlay'><h2><?php the_title(); ?></h2></span></a>

                </div>

                <?php endwhile; endif; wp_reset_postdata();

                $args2 = array(
                    'post_type'=>'cosplay',
                    'posts_per_page' => 1,
                    'offset'=>1,
                    );

                  $query2 = new WP_Query( $args2 );
                ?>

                <?php if (have_posts()) : while ($query2->have_posts()) : $query2->the_post();?>

                <div class="col-sm-6 portfolio-piece">

                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumnail-size', true);
                  ?>

                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><span class='blue-overlay'><h2><?php the_title(); ?></h2></span></a>

                </div>

                <?php endwhile; endif; wp_reset_postdata();

                $args = array(
                  'post_type'=>'portfolio',
                  'posts_per_page' => 1,
                  'offset'=> 1,
                  );

                  $the_query = new WP_Query($args);
                ?>

                <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>

                <div class="col-sm-6 portfolio-piece">

                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumnail-size', true);
                  ?>

                  <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><span class='blue-overlay'><h2><?php the_title(); ?></h2></span></a>

                </div>

                <?php endwhile; endif; wp_reset_postdata();

                ?>
              </div>
            </div>
          </div>
            <a href="portfolio" class="see-more">view all my work &nbsp; ></a>
        </div>
      </div>
    </div>

    <div class="container">
      <blockquote>
        We do not need magic to transform our world. We carry all of the power we need inside ourselves already.
      </blockquote>
        <cite>- J.K. Rowling</cite>
    </div>

    <div class="container">
      <div class="latest">
        <h3>Latest Blog Posts</h3>
          <div class="row">

            <?php $the_query = new WP_Query( 'showposts=3' ); ?>
            <?php if (have_posts()) :  while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <?php
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'medium', true);
            ?>
            <div class="col-sm-4 blog-front">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"><h4><?php the_title(); ?></h4></a>

            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
      </div>
      <!-- Example row of columns -->
<!--       <div class="row">
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-left')); ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-center')); ?>
        </div>
        <div class="col-md-4">
          <?php if (dynamic_sidebar('front-right')); ?>
        </div>
      </div> -->

<?php get_footer(); ?>
