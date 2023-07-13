<?php get_header(); ?>

<?php 
  $image = get_field( 'profile-hero' );
  $size = $image['sizes']['large'];
  $alt = $image['alt'];
  $title = $image['title'];

  $icon = get_field( 'profile-icon' );
  $iconSize = $icon['sizes']['large'];
  $iconAlt = $icon['alt'];
  $iconTitle = $icon['title'];
?>

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
        <div class="blog__content--single">
            
          <aside class="blog__sidebar">
            <img src="<?php echo $iconSize; ?>" class="blog__sidebar--profileImage" alt="<?php echo $iconAlt; ?>" title="<?php echo $iconTitle; ?>" >
              <a class="btn__back" href="<?php echo esc_url( home_url() ) ; ?>/blog">Back to Blogs</a>
          </aside>

          <section class="blog__main">
            <header class="blog__header">
            
                <?php if ( 'post' == get_post_type() ) : ?>
                  <h1 class="blogHeading"><?php the_title(); ?></h1>

                <div class="post-details">
                  <time><?php echo get_the_date(); ?></time>

                  <?php the_category(', ') ?>
                </div><!-- post-details -->

                <?php endif; ?>
            </header><!-- .entry-header -->

            <img src="<?php echo $size; ?>" class="blog__hero--image" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" >

            <div class="wrapper">
              <?php the_content(); ?>
            </div>
            
          </section>
            
        </div> <!-- blog__content--single -->
      </div> <!-- post -->
    </section> <!-- container -->

  <!-- ============================================== -->

<?php get_footer( 'blog' ); ?>

  
