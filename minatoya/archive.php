<?php get_header(); ?>

  <section>
    <?php the_archive_title( '<h2 class="roboto heading-top">', '</h2>' ); ?>

    <div class="content category-archive">
      <div class="w960">
      <div class="blue-bg">
          <!-- archive -->
          <?php 
          if ( have_posts() ):
            echo '<div class="news-list">';
            while ( have_posts() ):
              the_post();

              echo '<a href="' . esc_url( get_permalink() ) . '" class="news-item"><div class="news-info oswald">';
              the_time(get_option('date_format'));
              echo ' | ';
              $cat = get_the_category();
              $cat = $cat[0];
              echo $cat->cat_name;
              the_title( '</div><div class="news-title gothic">', '</div></a>');
            endwhile;
            echo '</div>';
          else:
            echo '<p style="text-align: center">投稿はありません。</p>';
          endif;
          ?>
        </div>

      </div><!-- w960 -->
    </div><!-- content category-archive -->
  </section>

<?php get_footer(); ?>



