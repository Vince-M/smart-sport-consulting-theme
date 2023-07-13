<!DOCTYPE html>
<meta charset="<?php bloginfo('charset'); ?>">
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ) ?>/img/favicon.ico">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

  <!-- HEADER
  =================================================== -->
  <header class="header">
    <div class="overlay has-fade"></div>
    <div class="container row header__section">

      <!-- NAVIGATION & LOGO
      =================================================== -->
      <nav class="nav flex flex-jc-sb flex-ai-c">
        <a href="<?php echo site_url(); ?>" class="header__logo">
          <img src="<?php echo get_theme_file_uri() ?>/img/smart_sport_240x60.svg" width="240px" height="60px" alt="Smart Sport Consulting Inc.">
        </a>

        <a id="btnHamburger" href="#" class="hamburger header__toggle ">
          <span></span>
          <span></span>
          <span></span>
        </a>

       
          <?php 
          wp_nav_menu(array(
            'container'             =>  false,
            'menu'                  =>  'header-menu',
            'container_aria_label'  =>  '',
            'menu_class'            =>  'nav__list mobile__fade',
            'menu_id'               =>  'menu',
            'echo'                  =>  true,
            'fallback_cb'           =>  'wp_page_menu',
            'before'                =>  '',
            'after'                 =>  '',
            'depth'                 =>  0,
            'theme_location'        =>  ''
          ));

          ?>
        
      </nav>
      <!-- ============================================== -->
        
    </div>
  </header>
  <!-- ============================================== -->
  
  <!-- MAIN
  =================================================== -->
  <main class="main">