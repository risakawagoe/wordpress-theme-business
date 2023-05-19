<?php get_header( 'top' ); ?>


    <!-- WORKS -->
    <section>
      <h2 class="roboto heading-top">WORKS</h2>
      <div class="content works">

        <div class="w760">
          <?php
            $page_data = get_page_by_path('works');
            $page_id = $page_data->ID;
            $args = array(
            'posts_per_page' => -1,
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_parent' => $page_id,
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
      
    </section>


    <!-- SERVICE -->
    <section>
      <h2 class="roboto heading-top">SERVICE</h2>
      <div class="content service">

        <div class="w760 gothic">
          <div>
            <h4>ウェブサイト制作</h4>
            <p>ホームページ制作<br>
              海外向けホームページ制作※英語<br>
              商品紹介ページ<br>
              （フリーランス・個人事業主や中小規模ビジネス応援中！）
            </p>
          </div>

          <div>
            <h4>プラスα</h4>
            <p>会社・ビジネスPR動画<br>
              商品PR動画<br>
              （ホームページに加えて高品質のものを手軽に制作）
            </p>
          </div>
        </div>
      </div>
    </section>



    <!-- MESSAGE -->
    <section>
      <h2 class="roboto heading-top">MESSAGE</h2>
 
      <div class="content message">
        <div class="w960">
          <div class="message-area">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" alt="">

            <div class="vertical mincho column2">
              <p>お客様の商品の素晴らしさを伝える場を提供することと引き換えに、お客様への価値提供という経験を積ませていただいております。</p><p>

                代金は、ホームページを公開する直前まで一切請求致しません。出来上がったサンプルに対し不満であれば、その場で打ち切ることも可能です。また、満足していただき公開を決めた際の制作代金は、お客様が妥当だと思う価格に設定させていただいております。</p><p>

                そのため、これは十万円の価値があると思っていただければ十万、一万円の価値であれば一万。いやいやこんなの一円も払う価値がないということであれば〇円でもかまいません。</p><p>
                
                あなたの商品の魅力をより多くの人に伝えられるビジネスパートナーとして一緒にお仕事ができることを楽しみにしております。まずはお話だけでもお聞かせください。</p>

              <p>みなとやより</p>
            </div>

          </div>
        </div>

      </div>
    </section>



    <!-- CONTACT -->
    <section>
      <h2 class="roboto heading-top">CONTACT</h2>
      <div class="content contact">

        <div class="w520">
          <p class="gothic">制作の依頼やご相談、まだ制作するかどうかも決めかねていても大丈夫です。<br>
            まずはお話だけでもお聞かせください。<br>
            ツイッターまたはインスタグラムのDMでも受け付けております。
            </p>
            <ul class="sns-list">
              <li><a href="https://twitter.com/MinatoyaWeb" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_70x70_black.png" alt=""></a></li>
              <li><a href="https://www.instagram.com/minatoyaweb/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_70x70_black.png" alt=""></a></li>
            </ul>
            <a href="<?php echo home_url(); ?>/contact/" class="btn-blue roboto"><p>CONTACT FORM</p></a>
            
        </div>
      </div>
    </section>



    <!-- NEWS -->
    <section>
      <h2 class="roboto heading-top">NEWS</h2>
      <div class="content news">

        <div class="w960">
          <div id="news-list-all"><p><a href="<?php echo home_url(); ?>/category/news/">一覧を見る</a></p></div>
          <div class="white-bg">

            <?php
              // カテゴリー名（スラグ）からカテゴリーIDを取得する
              $cat_id_news = get_category_by_slug("news");
              $cat_id_blog = get_category_by_slug("blog");
              $cat_id_news = $cat_id_news->cat_ID;
              $cat_id_blog = $cat_id_blog->cat_ID;

              $information= get_posts( array(
                'posts_per_page' => 4,
                'category' => -$cat_id_blog
              ));
              if( $information):
            ?>
          
            <div class="news-list">
              <?php
                foreach( $information as $post ):
                setup_postdata( $post );
                $cat = get_the_category();
                $cat = $cat[0];
              ?>
              <!-- $post item -->
              <a href="<?php the_permalink(); ?>" class="news-item">
                <div class="news-info oswald"><?php the_time(get_option('date_format')); ?> | <?php echo $cat->cat_name; ?></div>
                <div class="news-title gothic"><?php the_title(); ?></div>
              </a>
              <!-- $post item -->
              <?php endforeach; wp_reset_postdata(); ?>
            </div><!-- news-list -->

            <?php else: echo '<p style="text-align: center;">お知らせはありません。</p>'; endif; ?>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
