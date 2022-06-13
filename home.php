<?php get_header(); ?>

  <!-- HERO
  =================================================== -->
  <section class="hero feature-image" role="banner" data-type="background" data-speed="2">
  
      <section role="banner" data-type="background" data-speed="2">
      <div class="blog__feature--default hero__background"></div> 
        </div> <!-- hero jumbo-image -->
      </section><!-- .section -->
  </section> <!-- hero feature-image -->
  <!-- ============================================== -->

  <!-- CONTENT
  =================================================== -->
    <section class="container">
      <div class="content blog__content">

      <div class="blog__header">
        <h1><?php wp_title( '' ); ?></h1>
      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="blog__post">

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="post-details">
            <?php echo get_the_date(); ?> &nbsp; / &nbsp; <?php the_category(', ') ?>
          </div>
          
          <p><?php the_excerpt(); ?></p>
        </article>

        <!-- <hr class="blog__spacer"> -->

        <?php endwhile; else: ?>

        <p><?php _e( 'Sorry, no pages found' ); ?></p>

        <?php endif; ?>

      </div> <!-- content -->

    </section> <!-- container -->

  
  <!-- ============================================== -->



<?php get_footer( 'blog' ); ?>

  
