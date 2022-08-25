
    
  <!-- CTA
  =================================================== -->
  <section class="container cta">
    <h4>Want more information?</h4>
    <a class="btn__cta" href="<?php echo site_url( '/contact' ); ?>">Contact Us</a>
  </section>
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
          <p><a href="https://www.twitter.com/SmartSportInc/" target="_blank">Follow us on Twitter</a></p>
        </div>
        <div class="social social__column--right">
          <a class="social__instagram" href="https://www.instagram.com/smartsportinc/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/img/instagram.svg" width="60px" height="60px" alt="Follow for Inspiring Sports Images"></a>
          <p><a href="https://www.instagram.com/smartsportinc/" target="_blank">Follow for Inspiring Sports Images</a></p>
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
          wp_nav_menu(array(
            'container'             =>  false,
            'menu'                  =>  'footer-menu',
            'container_aria_label'  =>  '',
            'menu_class'            =>  'footer__menu',
            'menu_id'               =>  'footer-menu',
            'echo'                  =>  true,
            'fallback_cb'           =>  'wp_page_menu',
            'before'                =>  '',
            'after'                 =>  '',
            'depth'                 =>  0,
            'theme_location'        =>  ''
          ));
        ?>

      </div>
      <div class="site__info">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p> 
        <p><a href="<?php echo site_url( '/privacy-policy' ); ?>">Privacy Policy</a></p>
      </div>
    </div>
   
  </footer>
  <!-- ============================================== -->

  <?php wp_footer(); ?>
  </body>
</html>