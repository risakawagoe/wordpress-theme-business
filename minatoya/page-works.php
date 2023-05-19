<?php get_header(); ?>

    <section>
      <h2 class="roboto heading-top">WORKS</h2>
      <div class="content page-works">

        <div class="w760">
          <!-- 制作作品一覧 -->
          <div class="gothic main-text">
            <?php
              $parent_id = get_the_ID();
              $args = array(
              'posts_per_page' => -1,
              'post_type' => 'page',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'post_parent' => $parent_id,
              );

              $common_pages = new WP_Query( $args );
              if( $common_pages->have_posts() ):
                echo '<div id="work-list">';

                while( $common_pages->have_posts() ):
                  $common_pages->the_post();
                  $workUrl = get_the_permalink();
                  $start = mb_strpos($workUrl, 'works') + 6;
                  $workId = mb_substr($workUrl, $start, 9);
            ?>
            
              <div class="work"><a href="<?php echo esc_url($workUrl); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>

            <?php
              endwhile;
              wp_reset_postdata();
              echo '</div>';
              endif;
            ?>
          </div>
        </div>
      </div>
    </section>
  
<?php get_footer(); ?>