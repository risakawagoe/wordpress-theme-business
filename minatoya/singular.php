<?php get_header(); ?>


    <section>
      <div class="content single-post">
        <div class="w760">

          <?php get_template_part( 'content' ); ?>

          
          <!-- 個別投稿の場合：前後の記事へのリンクボタンを設置 -->
          <?php if( is_singular('post') ) {
            echo '<nav id="post-pagination"><a href="';
            echo get_permalink(get_adjacent_post(true,'',true));
            echo '" class="btn-blue roboto"><p>&lt;&lt; PREV</p></a><a href="';
            echo get_permalink(get_adjacent_post(true,'',false));
            echo '" class="btn-blue roboto"><p>NEXT &gt;&gt;</p></a></nav>';
          } ?>
        </div>
      </div>
      
    </section>
  
<?php get_footer(); ?>