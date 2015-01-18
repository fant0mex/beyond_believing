<?php get_header(); ?>
  <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-9 push">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Sidebar</button>
          </p>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--             <div class="page-header">
              <h1><?php the_title(); ?></h1>
            </div> -->
            <?php the_content(); ?>

          <?php endwhile; else: ?>
            <div class="page-header">
              <h1>Oh No!</h1>
            </div>
            <p>No content is appearing for this page, bummer.</p>

          <?php endif; ?>
        </div>

          <?php get_sidebar(); ?>

      </div>

<?php get_footer(); ?>