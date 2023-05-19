<?php if ( is_singular('post') ) {
    echo '<hr class="post-divider">';
  }  ?>

<article>
  <!-- post-title -->
  <?php if ( is_singular('post') ) {
    the_title( '<h2 class="gothic heading-post">', '</h2>');
  } elseif ( is_page('contact') ) {
    the_title( '<h2 class="gothic heading-top">', '</h2>');
  } else {
    the_title( '<h2 class="gothic heading-page">', '</h2>');
  } ?>


  <!-- post-info(date | category) -->
  <!-- thumbnail image -->
  <?php if ( is_singular('post') ) {
    echo '<div class="news-info oswald">';
    the_time(get_option('date_format'));
    echo ' | ';
    the_category( ',' );
    echo '</div>';
    the_post_thumbnail();
  }  ?>




  <!-- post content -->
  <div class="gothic main-text">
    <?php 
    the_content();
    wp_link_pages(
      [
        'before' => '<div class="page-links">ページ&#058;',
        'after' => '</div>',
      ]
      );
     ?>
  </div>

</article>