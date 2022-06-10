
    
  <!-- SOCIAL MEDIA
  =================================================== -->
  <section class="socialMedia">
    <div class="social__wrapper">
      <div class="social social__header">
        <h4>Connect with Smart Sport Consulting</h4>
      </div>

      <div class="social social__column">
        <div class="social social__column--left">
          <a class="social__twitter" href="#" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/img/twitter_icon.svg" width="60px" height="60px" alt="Follow Smart Sport on Twitter"></a>
          <p>Follow us on Twitter</p>
        </div>
        <div class="social social__column--right">
          <a class="social__instagram" href="#"><img src="<?php echo get_theme_file_uri(); ?>/img/instagram.svg" width="60px" height="60px" alt="Follow Smart Sport for your favourite sports images "></a>
          <p>Follow for your favourite sports images</p>
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
        <a href="index.html"><img src="<?php echo get_theme_file_uri() ?>/img/smart-sport-rev_131x110.svg" height="110px" alt="Smart Sport reverse logo"></a>

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