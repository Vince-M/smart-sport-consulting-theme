<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory'); ?>/img/favicon.ico">

  <title>Smart Sport Consulting Inc.</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="./dist/style.css">
  <script defer src="/dist/script.js"></script>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

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
            $args = array(
              'container'             =>  false,
              'menu'                  =>  'header-menu',
              'container_aria_label'  =>  '',
              'menu_class'            =>  'nav__list mobile__fade',
              'menu_id'               =>  'menu',
              'echo'                  =>  true,
              'fallback_cb'           =>  'wp_page_menu',
              'before'                =>  '',
              'after'                 =>  '',
              'depth'                 =>  0
            );
            wp_nav_menu( $args );
          ?>
        
      </nav>
      <!-- ============================================== -->
        
    </div>
  </header>
  <!-- ============================================== -->
  
  <!-- MAIN
  =================================================== -->
  <main class="main">