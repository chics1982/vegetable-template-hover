<?php
$page_id = 'recommend';
include 'component/header.php';
?>
<style>
  .c-page-head__fv._recommend::before {
    background: url(<?php echo $recommend_page['page_bg_image']; ?>) center center / cover no-repeat !important;
    filter: brightness(<?php echo $recommend_page['page_bg_brightness']; ?>) blur(<?php echo $recommend_page['page_bg_blur']; ?>) !important;
  }
</style>
<main class="l-main">
  <div class="c-page-head">
    <div class="c-page-head__fv _recommend">
      <div class="l-inner c-page-head__inner">
        <div class="c-page-head__content">
          <h2 class="c-page-head__title">
            おすすめ商品 <span class="over_medium">/</span>
            <br class="under_medium" /><?php echo $recommend_page['mv_catch']; ?>
          </h2>
          <p class="c-page-head__text">
            <?php echo $recommend_page['mv_sub']; ?>
          </p>
          <div class="c-page-head__btn">
            <a href="<?php echo $furusato['site1_link']; ?>" class="c-btn c-btn_page-head" target="_blank">ふるさと納税 商品一覧を見る</a>
            <?php if (empty($furusato['site1_link'])) : ?>
              <span>Coming soon</span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="l-inner c-page-head__inner _narrow">
      <p class="c-page-head__discription">
        <?php echo $recommend_page['page_description']; ?>
      </p>
    </div>
  </div>

  <?php include 'component/furusato.php'; ?>

  <?php
  // おすすめページに表示する商品の設定
  // 全商品を動的に取得して表示
  // 最初の商品（index 0）のみ詳細表示、それ以外は詳細非表示
  $recommend_products = [];
  foreach ($products as $index => $product_data) {
    $recommend_products[] = [
      'id' => $index + 1,
      'index' => $index,
      'label' => 'おすすめ商品' . ($index + 1),
      'show_details' => ($index === 0) // 最初の商品のみ詳細表示
    ];
  }
  ?>

  <section class="p-lineup">
    <div class="l-inner p-lineup__inner">
      <p class="p-lineup__en"><span>Product Lineup</span></p>
      <div class="p-lineup__ja-wrapper">
        <h2 class="p-lineup__ja">商品ラインナップ</h2>
      </div>
      <ul id="js-line-up" class="p-lineup__list">
        <?php foreach ($recommend_products as $rec_product): ?>
        <li class="p-lineup__item">
          <a href="#lineup<?php echo $rec_product['id']; ?>" class="p-lineup__link">
            <div class="p-lineup__item-inner">
              <span class="p-lineup__label"><?php echo $rec_product['label']; ?></span>
              <h3 class="p-lineup__title">
                <!-- <span><?php echo $products[$rec_product['index']]['product_title_sub']; ?></span> -->
                <?php echo $products[$rec_product['index']]['product_title_main']; ?>
              </h3>
            </div>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="p-recommend">
    <div class="l-inner p-recommend__inner">
      <?php foreach ($recommend_products as $rec_product):
        $product = $products[$rec_product['index']];
      ?>
      <article id="lineup<?php echo $rec_product['id']; ?>" class="p-recommend__wrapper">
        <hgroup class="p-recommend__head">
          <p class="p-recommend__en">Product line up No.<?php echo $rec_product['id']; ?></p>
          <h2 class="p-recommend__ja"><span><?php echo $rec_product['label']; ?></span></h2>
        </hgroup>

        <div class="p-recommend__item-wrapper">
          <div class="p-recommend__item item">
            <div class="item__thumb">
              <img
                src="<?php echo $product['product_thumb']; ?>"
                width="400"
                height="300"
                alt="" />
            </div>
            <div class="item__body">
              <hgroup class="item__title">
                <!-- <p class="item__title-sub"><?php echo $product['product_title_sub']; ?></p> -->
                <h3 class="item__title-main"><?php echo $product['product_title_main']; ?></h3>
              </hgroup>
              <p class="item__catch">
                <?php echo $product['product_catch']; ?>
              </p>
              <div class="item__btn-wrapper">
                <?php render_buy_buttons($product['product_furusato_link'], $product['product_buy_link']); ?>
              </div>
            </div>
          </div>

          <p class="item__text">
            <?php echo $product['product_text']; ?>
          </p>

          <?php render_pr_list($product['product_pr']); ?>
        </div>

        <?php if (isset($product_details[$rec_product['index']])):
          $details = $product_details[$rec_product['index']];
        ?>

        <?php if (!empty($details['eat_items'])): ?>
        <div class="p-recommend__eat">
          <hgroup class="p-recommend__title">
            <p class="p-recommend__title-sub">How to eat</p>
            <h3 class="p-recommend__title-main">
              美味しい食べ方<wbr />の提案
            </h3>
          </hgroup>

          <ul class="p-recommend__eat-list">
            <?php foreach ($details['eat_items'] as $index => $eat_item): ?>
            <li class="p-recommend__eat-item">
              <div class="p-recommend__eat-num">
                <span><?php echo sprintf('%02d', $index + 1); ?></span>
              </div>
              <div class="p-recommend__eat-body">
                <h4 class="p-recommend__eat-title">
                  <?php echo $eat_item['title']; ?>
                </h4>
                <p class="p-recommend__eat-text">
                  <?php echo $eat_item['text']; ?>
                </p>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php if (!empty($details['health_items'])): ?>
        <div class="p-recommend__health">
          <hgroup class="p-recommend__title">
            <p class="p-recommend__title-sub">Health</p>
            <h3 class="p-recommend__title-main">栄養価や<wbr />健康効果</h3>
          </hgroup>

          <ul class="p-recommend__health-list">
            <?php foreach ($details['health_items'] as $health_item): ?>
            <li class="p-recommend__health-item">
              <h4 class="p-recommend__health-title"><?php echo $health_item['title']; ?></h4>
              <ul class="p-recommend__health-sub-list">
                <?php foreach ($health_item['effects'] as $effect): ?>
                <li class="p-recommend__health-sub-item">
                  <?php echo $effect; ?>
                </li>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php if (!empty($details['expected_health']['items'])): ?>
        <div class="p-recommend__summary">
          <hgroup class="p-recommend__title">
            <h3 class="p-recommend__title-main">
              期待される<wbr />健康効果まとめ
            </h3>
          </hgroup>

          <div class="p-recommend__summary-content">
            <div class="p-recommend__summary-thumb">
              <img
                src="<?php echo $details['expected_health']['thumb']; ?>"
                width="400"
                height="300"
                alt="" />
            </div>
            <div class="p-recommend__summary-body">
              <ul class="p-recommend__summary-list">
                <?php foreach ($details['expected_health']['items'] as $summary_item): ?>
                <li class="p-recommend__summary-item">
                  <h4 class="p-recommend__summary-title"><?php echo $summary_item['title']; ?></h4>
                  <p class="p-recommend__summary-text">
                    <?php echo $summary_item['text']; ?>
                  </p>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <div class="p-recommend__buy">
          <hgroup class="p-recommend__title">
            <p class="p-recommend__title-sub">Buy now</p>
            <h3 class="p-recommend__title-main">いますぐ購入</h3>
          </hgroup>

          <div class="p-recommend__buy-content">
            <div class="p-recommend__buy-thumb">
              <img
                src="<?php echo $product['product_thumb']; ?>"
                width="400"
                height="300"
                alt="" />
            </div>
            <div class="p-recommend__buy-body">
              <p class="p-recommend__buy-catch">
                <?php echo isset($product['product_catch_short']) && $product['product_catch_short'] ? $product['product_catch_short'] : $product['product_catch']; ?>
              </p>
              <hgroup class="p-recommend__buy-title">
                <!-- <p class="p-recommend__buy-title-sub"><?php echo $product['product_title_sub']; ?></p> -->
                <h3 class="p-recommend__buy-title-main"><?php echo $product['product_title_main']; ?></h3>
              </hgroup>
              <p class="p-recommend__buy-text">是非、ご賞味ください。</p>
              <div class="p-recommend__buy-btn-wrapper">
                <?php render_buy_buttons($product['product_furusato_link'], $product['product_buy_link']); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </article>
      <?php endforeach; ?>
    </div>
  </section>

  <?php include 'component/furusato.php'; ?>

  <p class="c-to-top" id="js-to-top"><a href="#">Page Top</a></p>
</main>

<?php include 'component/footer.php'; ?>