<?php
$page_id = 'products';
include 'component/header.php';
?>
<style>
  .c-page-head__fv._products::before {
    background: url(<?php echo $products_page['page_bg_image']; ?>) center center / cover no-repeat !important;
    filter: brightness(<?php echo $products_page['page_bg_brightness']; ?>) blur(<?php echo $products_page['page_bg_blur']; ?>) !important;
  }
</style>
<main class="l-main">
  <div class="c-page-head">
    <div class="c-page-head__fv _products">
      <div class="l-inner c-page-head__inner">
        <div class="c-page-head__content">
          <h2 class="c-page-head__title">
            商品一覧 <span class="over_medium">/</span>
            <br class="under_medium" /><?php echo $products_page['mv_catch']; ?>
          </h2>
          <p class="c-page-head__text">
            <?php echo $products_page['mv_sub']; ?>
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
        <?php echo $products_page['page_description']; ?>
      </p>
    </div>
  </div>

  <?php include 'component/furusato.php'; ?>

  <section class="p-products">
    <div class="l-inner p-products__inner">
      <?php render_section_title('Product List', '商品一覧'); ?>
      <ul class="p-products__list">
        <?php foreach ($display_order as $order):
          // sourceに応じて商品を取得
          if ($order['source'] === 'products') {
            $product = isset($products[$order['index']]) ? $products[$order['index']] : null;
          } else {
            $product = isset($products2[$order['index']]) ? $products2[$order['index']] : null;
          }
          // 商品が存在しない場合はスキップ
          if (!$product) continue;
        ?>
        <li class="p-products__item">
          <div class="p-products__thumb">
            <img
              src="<?php echo $product['product_thumb']; ?>"
              width="1456"
              height="180"
              alt="" />
          </div>
          <hgroup class="p-products__title">
            <!-- <p class="p-products__title-sub"><?php echo $product['product_title_sub']; ?></p> -->
            <h3 class="p-products__title-main">
              <?php echo $product['product_title_main']; ?>
            </h3>
          </hgroup>
          <p class="p-products__text">
            <?php echo $product['product_catch']; ?>
          </p>
          <div class="p-products__btn-wrapper">
            <?php render_buy_buttons($product['product_furusato_link'], $product['product_buy_link'], 'c-btn_products'); ?>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php include 'component/furusato.php'; ?>

  <p class="c-to-top" id="js-to-top"><a href="#">Page Top</a></p>
</main>

<?php include 'component/footer.php'; ?>