<?php get_header(); ?>

    <!-- HERO
    =================================================== -->
    <section class="hero feature-image" role="banner" data-type="background" data-speed="2">
      <div class="hero__headline">
        <img class="hero__logo" src="<?php echo get_theme_file_uri('img/indexHeroLogo_361x93.svg'); ?>" alt="Smart Sport Logo" width="541">
        <div class="btn__hero">
          <a href="<?php echo site_url( '/about' ); ?>">About Smart Sport</a>
        </div> <!-- btn__hero -->
      </div> <!-- hero__headline -->

      <div class="hero jumbo-image">
      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="frontpg__hero" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-position: top; background-size: cover; " >
        </div> <!-- hero jumbo-image -->
      </div> <!-- hero jumbo-image -->

    </section> <!-- hero feature-image -->
    <!-- ============================================== -->

    <!-- CERTIFICATION
    =================================================== -->
    <section class="cert full__width fullWidth__section fullWidth__section--certBkgd fullWidth__section--reverse">
      <div class="fullWidth__section--image fullWidth__section--cert" style="background: url(<?php the_field( 'certification_image' ) ?>) no-repeat; background-position: center top; background-size: cover;"></div> 
        <div class="fullWidth__section--textOuter fullWidth__section--textRight">
          <div class="inner-container">
              
            <div class="fullWidth__section--text">
              <div class="fullWidth__section--innerWrapper fullWidth__section--certText">
                <h2><?php the_field( 'certification_header' ); ?></h2>
                <p><?php the_field( 'certification_text' ); ?></p>
                <div class="">
                  <a href="<?php echo site_url( 'certification' ); ?>">Learn about Certification</a>
                </div>
              </div> <!-- fullWidth__section--innerWrapper -->
            </div> <!-- fullWidth__section--text -->

          </div> <!-- inner-container -->
        </div> <!-- fullWidth__section--textOuter fullWidth__section--textRight -->


    </section>
    <!-- ============================================== -->

    <!-- CUSTOM CONSULTING
    =================================================== -->
    <section class="consult fullWidth fullWidth__section fullWidth__section--consultBkgd">
      <div class="fullWidth__section--image fullWidth__section--consult" style="background: url(<?php the_field( 'consulting_image' ) ?>) no-repeat;
      background-position: center top; background-size: cover;"></div> 
      <div class="fullWidth__section--textOuter">
        <div class="inner-container">
          
            <div class="fullWidth__section--text">
              <div class="fullWidth__section--innerWrapper fullWidth__section--consultText">
                <h2><?php the_field( 'consulting_header' ); ?></h2>
                <p><?php the_field( 'consulting_text' ); ?></p>
                <div class="btn btn-learn">
                  <a href="<?php echo site_url( 'custom-consulting') ?>">Learn about Custom Consulting</a>
                </div> <!-- btn btn-learn -->
              </div> <!-- fullWidth__section--innerWrapper -->
            </div> <!-- fullWidth__section--text -->

        </div> <!-- inner-container -->
      </div><!-- fullWidth__section--textOuter -->
    </section><!-- fullWidth fullWidth__section fullWidth__section--consultBkgd -->
    <!-- ============================================== -->

    <!-- LEADERSHIP DEVELOPMENT
    =================================================== -->
    <section class="leader full__width fullWidth__section fullWidth__section--certBkgd fullWidth__section--reverse">
      <div class="fullWidth__section--image fullWidth__section--leader" style="background: url(<?php the_field( 'leadership_image' ) ?>) no-repeat;
      background-position: center top; background-size: cover;"></div>
      <div class="fullWidth__section--textOuter fullWidth__section--textRight">
        <div class="inner-container">

          <div class="fullWidth__section--text">
            <div class="fullWidth__section--innerWrapper fullWidth__section--leaderText">
              <h2>Leadership Development</h2>
              <p>The culture of an organization is defined by its leadership – even in a volunteer -based organization.</p>
              <div class="btn btn-learn">
                <a href="<?php echo site_url( 'leadership-development' ); ?>">Learn about Leadership Development</a>
              </div> <!-- btn btn-learn -->
            </div>
          </div> <!-- fullWidth__section--text -->

        </div> <!-- inner-container -->
      </div> <!-- fullWidth__section--textOuter fullWidth__section--textRight -->
    </section> <!-- leadership full__width fullWidth__section fullWidth__section--reverse -->
    <!-- ============================================== -->


<?php get_footer( 'index' ); ?>

  
