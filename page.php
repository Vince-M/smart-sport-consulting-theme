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

      </div> <!-- content -->

    </section> <!-- container -->

  
  <!-- ============================================== -->

    <!-- NEWS / BLOG
  =================================================== -->
  <section class="fullWidth fullWidth__section--blogs">
    <div class="fullWidth__blogs--wrapper">
      <div class="fullWidth__section--blog">
        <img class="iconBlog" src="<?php echo get_theme_file_uri() ?>/img/blog_icon.svg" height="60" alt="blog icon">
        <h2>Blog</h2>
        <p>The culture of an organization is defined by its leadership – even in a volunteer -based organization.  <a href="#">Read more of this story</a></p>
        <div class="moreBlog">
          <a href="#">Explore more Blog stories </a>
        </div> <!-- btn btn-events -->
      </div> <!-- fullWidth__section--blog -->

      <div class="fullWidth__section--news">
        <img class="iconNews" src="<?php echo get_theme_file_uri() ?>/img/news_icon.svg" height="60" alt="blog icon">
        <h2>News</h2>
        <p>The culture of an organization is defined by its leadership – even in a volunteer -based organization. <a href="#">Read more of this news item</a></p>
        <div class="moreNews">
          <a href="#">Explore more News stories</a>
        </div> <!-- btn btn-forSale -->
      </div> <!-- fullWidth__section--news -->
    </div> <!-- container -->
  </section>
  <!-- ============================================== -->



<?php get_footer(); ?>

  
