<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- meta tag -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="email=no, telephone=no, address=no">



  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-chrome-144x144.png">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="unselectable header-sub">
    <!-- banner -->
    <div id="banner">
      <img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" alt="">
    </div>

    <!-- menu -->
    <nav id="header-nav">
      <a href="<?php echo esc_url( home_url() ); ?>" class="btn-blue roboto"><p>TOP</p></a>
      <a href="<?php echo esc_url( home_url() ); ?>/contact/" class="btn-blue roboto"><p>CONTACT</p></a>
      <a href="<?php echo esc_url( home_url() ); ?>/category/blog/" class="btn-blue roboto"><p>BLOG</p></a>
    </nav>
 
    <ul class="sns-list">
      <li><a href="https://twitter.com/MinatoyaWeb" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_70x70_black.png" alt=""></a></li>
      <li><a href="https://www.instagram.com/minatoyaweb/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_70x70_black.png" alt=""></a></li>
    </ul>


  </header>

  <!-- ======================== main (start) ======================== -->
  <main class="sub-pages">