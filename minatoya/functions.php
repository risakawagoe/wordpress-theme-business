<?php 
  // WordPress標準機能

  function my_setup() {
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'automatic-feed-links' ); 
    add_theme_support( 'title-tag' ); 
    add_theme_support( 'html5', array( 
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
  }
  add_action( 'after_setup_theme', 'my_setup' );




  // CSSとJavaScriptの読み込み

  function add_stylesheet() {
    wp_register_style('reset', get_template_directory_uri().'/css/reset.css', array(), wp_get_theme()->get( 'Version' ), false);
    wp_enqueue_style('main', get_stylesheet_uri(), array('reset'), wp_get_theme()->get( 'Version' ), false);
  }
  add_action('wp_enqueue_scripts', 'add_stylesheet');

  function add_scripts() { 
    // 閉じBODYタグ前に出力
    wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/js/jquery-3.6.0.min.js', array(), '1.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js', array('jquery-script'), '1.0', true );
  }
  add_action('wp_print_scripts', 'add_scripts');



  // sns

  function add_twitter_to_profile_fields( $contactmethods ) {
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['instagram'] = 'Instagram';
    return $contactmethods;
  }
  add_filter('user_contactmethods','add_twitter_to_profile_fields');
  

  /* the_archive_title 余計な文字を削除 */
  add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
  } elseif (is_tax()) {
      $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_date()) {
      $title = get_the_time('Y年n月');
  } elseif (is_search()) {
      $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
      $title = '「404」ページが見つかりません';
  } else {

  }
    return $title;
  });

  // ソースコードボックスのシンタックスハイライト
  function my_prism() {
    wp_enqueue_style( 'prism-style', get_stylesheet_directory_uri() . '/prism.css' );
    wp_enqueue_script( 'prism-script', get_stylesheet_directory_uri() . '/prism.js', array(), '1.24.1', true );
  }
  add_action('wp_enqueue_scripts', 'my_prism');





?>
