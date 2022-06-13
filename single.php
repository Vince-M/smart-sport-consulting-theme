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

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="blog__header">
            
            <?php if ( 'post' == get_post_type() ) : ?>
              <?php the_title(); ?>
            <div class="post-details">
            <i class="fa fa-clock-o"></i> <time><?php echo get_the_date(); ?></time>
            
            <i ></i> <?php the_category(', ') ?>

            </div><!-- post-details -->

            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="blog__content--single">
            
          <aside class="blog__sidebar">
            <img class="blog__sidebar--profileImage" src="<?php the_field( 'profile-image' ); ?>" alt="">
          </aside>

          <section class="blog__main">
            <img class="blog__hero--image" src="<?php the_field( 'profile-hero' ); ?>" alt="">
            <?php the_content(); ?>
          </section>
            
        </div> <!-- blog__content--single -->
      </div> <!-- post -->

    </section> <!-- container -->

  <!-- ============================================== -->

<?php get_footer( 'blog' ); ?>

  
