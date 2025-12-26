<!doctype html>
<html lang="ja">
<?php include 'component/config.php'; ?>
<?php include 'config/font.php'; ?>

<head>
  <!-- 本番環境では外す -->
  <meta name="robots" content="noindex, nofollow" />
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no,address=no,email=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $about['shop_name']; ?>｜ふるさと納税の返礼品</title>
  <?php
  // ページIDに基づいてmeta descriptionを取得（なければ'top'をフォールバック）
  $meta_desc = isset($page_id) && isset($about['meta_descriptions'][$page_id])
    ? $about['meta_descriptions'][$page_id]
    : (isset($about['meta_descriptions']['top']) ? $about['meta_descriptions']['top'] : '');
  ?>
  <meta
    name="description"
    content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>" />
  <!-- ファビコン -->
  <link rel="icon" href="./assets/img/main/favicon.png" type="image/png" />
  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/reset.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=<?= urlencode($font['name']) ?>:wght@<?= $font['weights'] ?>&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --ff-base: "<?= $font['name'] ?>", <?= $font['fallback'] ?>;
    }
  </style>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    type="text/css" />
  <!-- JavaScript -->
  <script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"
    defer></script>
  <script src="./assets/js/script.js" defer></script>
</head>

<?php
// ヘルパー関数の読み込み
if (file_exists(__DIR__ . '/helpers.php')) {
  include_once __DIR__ . '/helpers.php';
}

// 設定ファイルの読み込み
if (file_exists(__DIR__ . '/../config/company_config.php')) {
  include_once __DIR__ . '/../config/company_config.php';
}
if (file_exists(__DIR__ . '/../config/index_config.php')) {
  include_once __DIR__ . '/../config/index_config.php';
}
if (file_exists(__DIR__ . '/../config/kodawari_config.php')) {
  include_once __DIR__ . '/../config/kodawari_config.php';
}
if (file_exists(__DIR__ . '/../config/products_config.php')) {
  include_once __DIR__ . '/../config/products_config.php';
}
if (file_exists(__DIR__ . '/../config/recommend_config.php')) {
  include_once __DIR__ . '/../config/recommend_config.php';
}
?>

<body>
  <header id="js-header" class="l-header">
    <div class="l-inner l-header__inner">
      <h1 class="l-header__logo">
        <a href="./" aria-label="トップページへ戻る">
          <?php render_logo($about['logo'], $about['shop_name'], 100, 100); ?>
        </a>
      </h1>

      <button
        type="button"
        id="js-hamburger"
        class="l-hamburger"
        aria-label="メニューを開く"
        aria-controls="js-nav"
        aria-expanded="false">
        <span class="l-hamburger__line" aria-hidden="true"></span>
      </button>

      <nav id="js-nav" class="l-nav" aria-label="メインメニュー">
        <a href="./" class="l-nav__logo" aria-label="トップページへ戻る">
          <?php render_logo($about['logo'], $about['shop_name'], 80, 80); ?>
        </a>
        <ul class="l-nav__list">
          <li class="l-nav__item">
            <a href="./recommend.php" class="l-nav__link">おすすめ商品</a>
          </li>
          <li class="l-nav__item">
            <a href="./products.php" class="l-nav__link">商品一覧</a>
          </li>
          <li class="l-nav__item">
            <a href="./kodawari.php" class="l-nav__link">こだわり</a>
          </li>
          <li class="l-nav__item">
            <a href="./company.php" class="l-nav__link"><?php echo isset($company_page['producer_label']) ? $company_page['producer_label'] : '製造者'; ?>・<?php echo isset($company_page['company_intro_label']) ? $company_page['company_intro_label'] : '会社紹介'; ?></a>
          </li>
          <li class="l-nav__item">
            <a href="./contact.php" class="l-nav__link">
              <span>お問合せ</span>
              <i class="fa-regular fa-envelope"></i>
            </a>
          </li>
        </ul>
        <div id="js-focus-trap" class="l-nav__focus-trap" tabindex="0"></div>
      </nav>
      <div id="js-nav-back" class="l-nav-back"></div>
    </div>
  </header>