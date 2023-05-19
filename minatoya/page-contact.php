<?php get_header(); ?>

    <section>
      <h2 class="roboto heading-top">CONTACT</h2>
      <div class="content contact page-contact">

        <div class="w760">
          <!-- お問い合わせフォーム -->
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
        </div>
      </div>
    </section>
  
<?php get_footer(); ?>