<?php
$page_id = 'top';
include 'component/header.php';
?>
<main class="l-main">
  <div class="p-fv" style="position: relative; overflow: hidden;">
    <!-- 背景画像用の要素（明るさ・ぼかし効果適用） -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('<?php echo htmlspecialchars($index_page['fv_background']); ?>') center center / cover no-repeat; filter: brightness(<?php echo $index_page['page_bg_brightness']; ?>) blur(<?php echo $index_page['page_bg_blur']; ?>); z-index: -1;"></div>
    <div class="l-inner p-fv__inner">
      <h2 class="p-fv__head">
        <?php echo $index_page['fv_heading']['line1']; ?><br class="under_medium" /><?php echo $index_page['fv_heading']['line2']; ?>
      </h2>
      <div
        id="fv-slider"
        class="splide p-fv__slider"
        role="group"
        aria-label="ファーストビューのスライド">
        <div class="splide__track">
          <ul class="splide__list p-fv__list">
            <?php foreach ($index_page['fv_slides'] as $slide):
              // プレースホルダーを実際の値に置き換え
              $title = $slide['title'];
              $title = str_replace('{shop_name}', $about['shop_name'], $title);
              $title = str_replace('{producer_label}', (isset($company_page['producer_label']) ? $company_page['producer_label'] : '製造者'), $title);
            ?>
              <li class="splide__slide p-fv__item">
                <a class="p-fv__link" href="<?php echo $slide['link']; ?>">
                  <h3 class="p-fv__title"><?php echo $title; ?></h3>
                  <div class="p-fv__body">
                    <hgroup class="p-fv__body-box">
                      <p class="p-fv__body-sub-title"><?php echo $slide['sub_title']; ?></p>
                      <h4 class="p-fv__body-title"><?php echo $slide['body_title']; ?></h4>
                    </hgroup>
                    <p class="p-fv__body-text">
                      <?php echo $slide['body_text']; ?>
                    </p>
                  </div>
                  <div class="p-fv__thumb">
                    <img
                      src="<?php echo $slide['image']; ?>"
                      alt=""
                      width="400"
                      height="300" />
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="splide__arrows">
          <button
            class="splide__arrow splide__arrow--prev"
            aria-label="前へ">
            <span aria-hidden="true"></span>
          </button>
          <button
            class="splide__arrow splide__arrow--next"
            aria-label="次へ">
            <span aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <?php if ($index_page['awards']['show']): ?>
    <?php include 'award/prize.php'; ?>
    <?php // include 'award/media01.php'; ?>
    <?php // include 'award/media02.php'; ?>
    <?php // include 'award/award02.php'; ?>
    <?php // include 'award/award03.php'; ?>
  <?php endif; ?>

  <?php include 'component/furusato.php'; ?>

  <section class="p-why">
    <hgroup class="c-section-title">
      <p class="c-section-title__en">Why</p>
      <h2 class="c-section-title__ja">ふるさと納税とは</h2>
    </hgroup>

    <div class="p-why__wrapper">
      <div
        id="why-slider"
        class="splide p-why__slider"
        role="group"
        aria-label="ふるさと納税のイメージ画像のスライド">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="p-why__thumb">
                <img
                  src="./assets/img/why/furusato01.webp"
                  width="380"
                  height="380"
                  alt="" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="p-why__thumb">
                <img
                  src="./assets/img/why/furusato02.webp"
                  width="380"
                  height="380"
                  alt="" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="p-why__thumb">
                <img
                  src="./assets/img/why/furusato03.webp"
                  width="380"
                  height="380"
                  alt="" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="p-why__thumb">
                <img
                  src="./assets/img/why/furusato04.webp"
                  width="380"
                  height="380"
                  alt="" />
              </div>
            </li>
            <li class="splide__slide">
              <div class="p-why__thumb">
                <img
                  src="./assets/img/why/furusato05.webp"
                  width="380"
                  height="380"
                  alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="l-inner p-why__inner">
        <div class="p-why__content">
          <h3 class="p-why__head">
            <span class="p-why__title">自治体に寄付で、<wbr />返礼品が</span>
            <span class="p-why__title">もらえて<wbr />節税対策もできる</span>
          </h3>
          <div class="p-why__body">
            <p class="p-why__text">
              ふるさと納税は、応援したい自治体に寄付することで、
              返礼品がもらえる制度です。さらに、
              税金の控除も受けられる嬉しい仕組みです。
            </p>

            <div class="p-why__btn">
              <a
                class="c-btn c-btn_why"
                href="https://www.furusato-tax.jp/about?header_guide"
                rel="noopener noreferrer"
                target="_blank">ふるさと納税 解説ページへ
              </a>
            </div>
          </div>
          <div class="p-why__img">
            <img
              src="./assets/img/why/furusato-thumb.webp"
              alt=""
              width="2000"
              height="1333" />
            <span class="p-why__img-text">Hometown Tax</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-popular">
    <div class="l-inner p-popular__inner">
      <hgroup class="c-section-title">
        <p class="c-section-title__en">Popular Product</p>
        <h2 class="c-section-title__ja">おすすめの人気商品</h2>
      </hgroup>

      <div class="p-popular__item">
        <div class="p-popular__body">
          <div class="p-popular__head">
            <p class="p-popular__catch"><?php echo $popular['popular_catch1']; ?></p>
            <p class="p-popular__catch"><?php echo $popular['popular_catch2']; ?></p>
          </div>
          <hgroup class="p-popular__title">
            <!-- <p class="p-popular__title-sub"><?php echo $popular['popular_title_sub']; ?></p> -->
            <h3 class="p-popular__title-main"><?php echo $popular['popular_title_main']; ?></h3>
          </hgroup>
          <p class="p-popular__text">
            <?php echo $popular['popular_text']; ?>
          </p>
          <div class="p-popular__btn-wrapper">
            <div class="p-popular__btn">
              <a class="c-btn c-btn_popular" href="<?php echo $popular['popular_furusato_link']; ?>" target="_blank">ふるさと納税ページへ</a>
              <?php if (empty($popular['popular_furusato_link'])) : ?>
                <span>Coming soon</span>
              <?php endif; ?>
            </div>
            <div class="p-popular__btn">
              <a class="c-btn c-btn_popular-buy" href="<?php echo $popular['popular_buy_link']; ?>" target="_blank">商品購入はこちら</a>
              <?php if (empty($popular['popular_buy_link'])) : ?>
                <span>Coming soon</span>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="p-popular__thumb">
          <img
            src="<?php echo $popular['popular_thumb']; ?>"
            alt=""
            width="800"
            height="800" />
          <span class="p-popular__thumb-text"><?php echo $popular['popular_en']; ?></span>
        </div>
      </div>
    </div>
  </section>

  <section id="commitment" class="p-commitment">
    <div class="l-inner p-commitment__inner">
      <hgroup class="c-section-title">
        <p class="c-section-title__en">Commitments</p>
        <h2 class="c-section-title__ja"><?php echo $about['shop_name']; ?><wbr>のこだわり</h2>
      </hgroup>
      <ul class="p-commitment__list">
        <?php foreach ($index_page['commitments'] as $commitment): ?>
          <li class="p-commitment__item">
            <div class="p-commitment__body">
              <hgroup class="p-commitment__title">
                <p class="p-commitment__title-en"><?php echo $commitment['title_en']; ?></p>
                <p class="p-commitment__title-number"><?php echo $commitment['number']; ?></p>
                <h3 class="p-commitment__title-ja"><?php echo $commitment['title_ja']; ?></h3>
              </hgroup>
              <p class="p-commitment__text">
                <?php echo $commitment['text']; ?>
              </p>
            </div>
            <div class="p-commitment__thumb">
              <img
                src="<?php echo $commitment['image']; ?>"
                alt=""
                width="600"
                height="400" />
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="p-commitment__declaration">
        お客さまの喜びを追求して、<br class="under_medium">これからもこだわり続けます。
      </p>
    </div>
  </section>

  <?php if (!empty($index_page['google_review']['google_link'])): ?>
    <section id="review" class="p-review">
      <div class="l-inner p-review__inner">
        <div class="p-review__google google">
          <hgroup class="c-section-title">
            <p class="c-section-title__en">Review</p>
            <h2 class="c-section-title__ja">Googleの<wbr />口コミをご紹介</h2>
          </hgroup>
          <p class="google__discription">
            実際にご購入いただいたお客様からの口コミ<wbr />を掲載させていただいております。<br />多くの口コミから一部を表示しています。
          </p>
          <div class="google__sougou">
            <div class="google__sougou-content">
              <p class="google__sougou-review">総合評価<span><?php echo $index_page['google_review']['overall_rating']; ?></span></p>
              <div class="google__sougou-star" aria-hidden="true">
                <img
                  src="./assets/img/review/star.svg"
                  alt=""
                  width="200"
                  height="30" />
              </div>
            </div>
            <small class="google__sougou-note"> ※<?php echo $index_page['google_review']['rating_date']; ?></small>
          </div>
          <ul class="google__list">
            <?php foreach ($index_page['google_review']['reviews'] as $review): ?>
              <li class="google__item">
                <div class="google__thumb">
                  <img
                    src="<?php echo $review['icon']; ?>"
                    alt=""
                    width="60"
                    height="60" />
                </div>
                <div class="google__review">
                  <p class="google__name"><?php echo $review['name']; ?></p>
                  <div class="google__star <?php echo $review['star_class']; ?>">
                    <img
                      src="./assets/img/review/star.svg"
                      alt=""
                      width="128"
                      height="30" />
                  </div>
                </div>
                <p class="google__text">
                  <?php echo $review['text']; ?>
                </p>
                <div class="google__logo" aria-hidden="true">
                  <img
                    src="./assets/img/review/google-logo.png"
                    alt=""
                    width="80"
                    height="80" />
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="google__btn">
            <a href="<?php echo $index_page['google_review']['google_link']; ?>" class="c-btn c-btn_google" target="_blank">Googleの口コミを見る</a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php include 'component/furusato.php'; ?>

  <section id="philosophy" class="p-philosophy">
    <div class="l-inner p-philosophy__inner">
      <hgroup class="c-section-title">
        <p class="c-section-title__en">Producer and Philosophy</p>
        <h2 class="c-section-title__ja"><?php echo isset($company_page['producer_label']) ? $company_page['producer_label'] : '製造者'; ?>と理念</h2>
      </hgroup>
      <?php include 'component/producer.php'; ?>
    </div>
    <?php include 'component/belief.php'; ?>
  </section>

  <section id="product" class="p-product">
    <div class="l-inner p-product__inner">
      <?php render_section_title('Featured Products', 'おすすめ商品たち'); ?>
      <ul class="products__list">
        <?php
        // トップページに表示する商品の設定
        // インデックス1（2番目）から全商品を動的に取得
        $featured_products = [];
        $display_number = 1; // 表示番号のカウンター
        foreach ($products as $index => $product_data) {
          // インデックス0（最初の商品）をスキップ
          if ($index === 0) continue;

          $featured_products[] = [
            'tag' => 'おすすめ商品' . $display_number,
            'index' => $index
          ];
          $display_number++;
        }

        foreach ($featured_products as $featured_item):
          $product = $products[$featured_item['index']];
        ?>
          <li class="products__item">
            <p class="p-product__tag"><?php echo $featured_item['tag']; ?></p>
            <p class="p-product__catch">
              <?php echo $product['product_catch']; ?>
            </p>
            <hgroup class="p-product__title">
              <!-- <p class="p-product__title-sub"><?php echo $product['product_title_sub']; ?></p> -->
              <h3 class="p-product__title-main"><?php echo $product['product_title_main']; ?></h3>
            </hgroup>
            <div class="p-product__content">
              <div class="p-product__thumb">
                <img
                  src="<?php echo $product['product_thumb']; ?>"
                  alt=""
                  width="400"
                  height="300" />
              </div>
              <p class="p-product__text">
                <?php echo $product['product_text']; ?>
              </p>
            </div>
            <?php render_pr_list($product['product_pr']); ?>
            <div class="p-product__btn-wrapper">
              <?php render_buy_buttons($product['product_furusato_link'], $product['product_buy_link']); ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="p-instagram">
    <div class="l-inner p-instagram__inner">
      <div class="p-instagram__head">
        <div class="p-instagram__logo">
          <img
            src="./assets/img/same/insta-logo.png"
            alt=""
            width="72"
            height="72" />
        </div>
        <h2 class="p-instagram__title">Instagram</h2>
        <p class="p-instagram__text">
          インスタグラムで<wbr />様々な情報を発信しています
        </p>
      </div>

      <ul class="p-instagram__list">
        <?php foreach ($index_page['instagram_images'] as $image): ?>
          <li class="p-instagram__item">
            <img
              src="<?php echo $image; ?>"
              alt=""
              width="300"
              height="300" />
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="p-instagram__btn">
        <a href="<?php echo $about['instagram']; ?>" class="c-btn c-btn_instagram" target="_blank">
          <div class="p-instagram__body">
            <h3 class="p-instagram__body-title">
              Instagramでもっと<wbr />美味しい毎日を。
            </h3>
            <p class="p-instagram__body-text">
              フォローして、あなただけの<wbr />美味しいを見つけよう！
            </p>
          </div>
          <div class="p-instagram__thumb">
            <img
              src="./assets/img/same/insta2.svg"
              alt=""
              width="440"
              height="270" />
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php include 'component/about.php'; ?>

  <?php include 'component/furusato.php'; ?>

  <p class="c-to-top" id="js-to-top"><a href="#">Page Top</a></p>
</main>
<?php include 'component/footer.php'; ?>