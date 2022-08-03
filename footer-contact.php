

   
   <!-- NEWS / BLOG
    =================================================== -->
    <section class="fullWidth fullWidth__section--blogs">
      
      <div class="fullWidth__blogs--wrapper">
            <?php
              $args = array(
                'post_type'  =>  'post',
                'posts_per_page'  =>  2,
                'paged'  =>  $paged
              );
              
              $frontpage_posts = new WP_Query($args);

              wp_reset_postdata();
            ?>

            <?php if ( $frontpage_posts->have_posts() ): ?>

              <?php while ($frontpage_posts->have_posts() ) : $frontpage_posts->the_post(); ?>

              <div class="fullWidth__section--blog"> 

                <a href="<?php the_permalink(); ?>"><h3 class="fullWidth__section--head" ><?php the_title(); ?></h3></a>
                <p><?php if ( has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words( get_the_content(), 18);
                } ?> </p>
                <a href="<?php the_permalink(); ?>">Read more of this story</a>
                
                </div> <!-- fullWidth__section--blog -->
                
              <?php endwhile; endif; wp_reset_postdata(); ?>
              
      </div> <!-- fullWidth__blogs--wrapper -->
     
    </section> <!-- fullWidth fullWidth__section--blogs -->
    <!-- ============================================== -->
    
  <!-- SOCIAL MEDIA
  =================================================== -->
  <section class="socialMedia">
    <div class="social__wrapper">
      <div class="social social__header">
        <h4>Connect with Smart Sport Consulting</h4>
      </div>

      <div class="social social__column">
        <div class="social social__column--left">
          <a class="social__twitter" href="https://www.twitter.com/SmartSportInc/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/img/twitter_icon.svg" width="60px" height="60px" alt="Follow Smart Sport on Twitter"></a>
          <p>Follow us on Twitter</p>
        </div>
        <div class="social social__column--right">
          <a class="social__instagram" href="https://www.instagram.com/smartsportinc/"><img src="<?php echo get_theme_file_uri(); ?>/img/instagram.svg" width="60px" height="60px" alt="Follow for Inspiring Sports Images"></a>
          <p>Follow for Inspiring Sports Images</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ============================================== -->

  </main>
  <!-- ============================================== -->

  <!-- FOOTER
  =================================================== -->
  <footer class="footer">
    <div class="container footer__wrapper">
      <div class="footer__identity">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri() ?>/img/smart-sport-rev_131x110.svg" height="110px" alt="Smart Sport reverse logo"></a>

        <?php 
            $args = array(
              'container'             =>  false,
              'menu'                  =>  'footer-menu',
              'container_aria_label'  =>  '',
              'menu_class'            =>  'footer__menu',
              'menu_id'               =>  'footer-menu',
              'echo'                  =>  true,
              'fallback_cb'           =>  'wp_page_menu',
              'before'                =>  '',
              'after'                 =>  '',
              'depth'                 =>  0
            );
            wp_nav_menu( $args );
          ?>

        <!-- <ul class="footer__menu">
          <li><a href="">Certification</a></li>
          <li><a href="">Consulting</a></li>
          <li><a href="">Leadership</a></li>
          <li><a href="">Blog/News</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul> -->

      </div>
      <div class="site__info">
        <!-- <p>© Copyright 2022 Smart Sport Consulting Inc.</p>  -->
        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p> 

        <!-- <p><a href="#">Privacy Policy</a></p> -->
        <p><a href="<?php echo site_url( '/privacy-policy' ); ?>">Privacy Policy</a></p>
      </div>
    </div>
   
  </footer>
  <!-- ============================================== -->

  <?php wp_footer(); ?>
  </body>
</html>