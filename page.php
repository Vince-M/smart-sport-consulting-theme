<?php get_header(); ?>

  <!-- HERO
  =================================================== -->
  <section class="hero feature-image" role="banner" data-type="background" data-speed="2">
    <div class="container-fluid">
      <section role="banner" data-type="background" data-speed="2">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="hero__background" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: top; background-size: cover; " >
        </div> <!-- hero jumbo-image -->
      </section><!-- .section -->
    </div> <!-- container-fluid -->

  </section> <!-- hero feature-image -->
  <!-- ============================================== -->

  <!-- CONTENT
  =================================================== -->

    <section class="container">
      <div class="content">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else: ?>

      <p><?php _e( 'Sorry, no pages found' ); ?></p>

      <?php endif; ?>

      </div> 
    </section> 

  <!-- ============================================== -->

<?php get_footer(); ?>

  
