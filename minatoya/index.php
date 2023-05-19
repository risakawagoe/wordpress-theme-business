<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- meta tag -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="email=no, telephone=no, address=no">



  <!-- page info -->
  <meta name="title" content="MINATOYA　個人事業主や個人ビジネス向けにWeb制作を行っています。">
  <meta name="description" content="Web制作を通してお客様の商品の魅力を伝える場を提供｜個人事業主や個人ビジネス向けホームページ・ランディングページ・海外向けサイト・PR動画｜お客様に納得していただくことを最優先に考え、独自の料金システムでリスクを最小限に。">
  <title>MINATOYA　個人事業主や個人ビジネス向けにWeb制作を行っています。</title>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://kawagoeweb.com/">
  <meta property="og:title" content="MINATOYA　Web制作を通してお客様の商品の魅力を伝える場を提供します。">
  <meta property="og:description" content="個人事業主や個人ビジネス向けWeb制作（ホームページ・ランディングページ・海外向けサイト等）｜独自の料金システムでリスクを最小限に。">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.png">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://kawagoeweb.com/">
  <meta property="twitter:title" content="MINATOYA　Web制作を通してお客様の商品の魅力を伝える場を提供します。">
  <meta property="twitter:description" content="個人事業主や個人ビジネス向けWeb制作（ホームページ・ランディングページ・海外向けサイト等）｜独自の料金システムでリスクを最小限に。">
  <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.png">




  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-chrome-144x144.png">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <!-- js -->

</head>

<body>
  <header class="unselectable">
    <!-- banner -->
    <div id="banner">
      <img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" alt="">
      <div class="vertical mincho" id="catch">
        <p>あなたの商品の魅力をより多くの人に伝える。<br>
          ビジネスパートナーとして私にできることを<br>
          お手伝いできればと思っております。<br>
        </p>
      </div>
    </div>

    <!-- menu -->
    <nav id="header-nav">
      <a href="<?php echo home_url(); ?>" class="btn-blue roboto"><p>TOP</p></a>
      <a href="<?php echo home_url(); ?>/contact/" class="btn-blue roboto"><p>CONTACT</p></a>
      <a href="<?php echo home_url(); ?>/category/blog/" class="btn-blue roboto"><p>BLOG</p></a>
    </nav>
 
    <ul class="sns-list">
      <li><a href="https://twitter.com/MinatoyaWeb" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_70x70_black.png" alt=""></a></li>
      <li><a href="https://www.instagram.com/minatoyaweb/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_70x70_black.png" alt=""></a></li>
    </ul>


  </header>

  <!-- ======================== main (start) ======================== -->
  <main>
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
  </main>
  <!-- ======================== main (end) ======================== -->
  
  <!-- footer -->
  <footer class="unselectable">
    <p id="page-top" class="roboto">PAGE TOP</p>

    <img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_gray.png" alt="">
    <p class="name-idea mincho">何かの縁でお会いできたみなさんと手を結び、<br>
      ビジネスパートナーとしてお役に立てればという<br>
      想いから「みなとや」と名付けました。</p>

    <ul class="sns-list">
      <li><a href="https://twitter.com/MinatoyaWeb" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_70x70_white.png" alt=""></a></li>
      <li><a href="https://www.instagram.com/minatoyaweb/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram_70x70_white.png" alt=""></a></li>
    </ul>

    <a href="<?php echo home_url(); ?>/contact/" class="btn-red mincho"><p>お問い合わせ</p></a>
    

    <small id="copy" class="roboto">&copy;2021 MINATOYA All Rights Reserved.</small>
  </footer>


  <script>
    // scroll to page top
    var pageTopBtn = document.getElementById('page-top');
 
    pageTopBtn.onclick = function(e) {
      window.scrollTo({top: 0, behavior: 'smooth'});
  
      // イベントの初期動作を停止
      if (e.preventDefault) {
          e.preventDefault();
      } else {
          e.returnValue = false;
      }
    };
  </script>
</body>
</html>
