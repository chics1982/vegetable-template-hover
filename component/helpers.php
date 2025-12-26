<?php
/**
 * ========================================
 * ヘルパー関数
 * ========================================
 * 設定値のチェックやデフォルト値の提供を行います
 */


/**
 * 画像パスのチェック
 * 空の場合はデフォルト画像を返す
 *
 * @param string $image_path 画像パス
 * @param string $default デフォルト画像パス
 * @return string
 */
function get_image_path($image_path, $default = './assets/img/main/default.jpg')
{
  return !empty($image_path) ? $image_path : $default;
}


/**
 * リンクURLのチェック
 * 空の場合は空文字を返す（Coming soon表示用）
 *
 * @param string $url URL
 * @return string
 */
function get_link_url($url)
{
  return !empty($url) ? $url : '';
}


/**
 * テキストのチェック
 * 空の場合はデフォルトテキストを返す
 *
 * @param string $text テキスト
 * @param string $default デフォルトテキスト
 * @return string
 */
function get_text($text, $default = '')
{
  return !empty($text) ? $text : $default;
}


/**
 * 商品データの取得（デフォルト値付き）
 *
 * @param array $product 商品データ
 * @return array
 */
function get_product_with_defaults($product)
{
  $defaults = [
    'product_title_sub' => '',
    'product_title_main' => '商品名未設定',
    'product_catch' => '',
    'product_text' => '',
    'product_thumb' => './assets/img/main/default.jpg',
    'product_pr' => [],
    'product_furusato_link' => '',
    'product_buy_link' => '',
  ];

  return array_merge($defaults, $product);
}


/**
 * ページ設定の取得（デフォルト値付き）
 *
 * @param array $page_config ページ設定
 * @return array
 */
function get_page_config_with_defaults($page_config)
{
  $defaults = [
    'page_title' => '',
    'page_description' => '',
    'description_text' => '',
    'page_bg_image' => './assets/img/main/default-bg.jpg',
    'page_bg_brightness' => '1.0',
    'page_bg_blur' => '0px',
  ];

  return array_merge($defaults, $page_config);
}


/**
 * デバッグ用：設定値の確認
 *
 * @param mixed $data 確認したいデータ
 * @param string $label ラベル
 */
function debug_config($data, $label = 'Config')
{
  if (defined('DEBUG_MODE') && DEBUG_MODE) {
    echo "<pre style='background:#f0f0f0;padding:10px;margin:10px;border:1px solid #ccc;'>";
    echo "<strong>{$label}:</strong>\n";
    print_r($data);
    echo "</pre>";
  }
}


/**
 * 配列の値が空かチェック
 *
 * @param array $array 配列
 * @param string $key キー
 * @return bool
 */
function is_empty_value($array, $key)
{
  return !isset($array[$key]) || empty($array[$key]);
}


// ============================================================
// ▼ HTMLコンポーネント生成関数
// ============================================================

/**
 * 購入ボタンセット（ふるさと納税 + 商品購入）を表示
 *
 * @param string $furusato_link ふるさと納税リンク
 * @param string $buy_link 購入リンク
 * @param string $btn_class ボタンのCSSクラス（デフォルト: c-btn_recommend）
 */
function render_buy_buttons($furusato_link, $buy_link, $btn_class = 'c-btn_recommend')
{
  $buy_class = $btn_class . '-buy';
?>
  <div class="item__btn">
    <a href="<?php echo get_link_url($furusato_link); ?>" class="c-btn <?php echo $btn_class; ?>" target="_blank">
      ふるさと納税 <wbr />商品詳細ページへ
    </a>
    <?php if (empty($furusato_link)) : ?>
      <span>Coming soon</span>
    <?php endif; ?>
  </div>
  <div class="item__btn">
    <a href="<?php echo get_link_url($buy_link); ?>" class="c-btn <?php echo $buy_class; ?>" target="_blank">
      商品購入はこちら
    </a>
    <?php if (empty($buy_link)) : ?>
      <span>Coming soon</span>
    <?php endif; ?>
  </div>
<?php
}


/**
 * セクションタイトルを表示
 *
 * @param string $en 英語タイトル
 * @param string $ja 日本語タイトル
 * @param string $class 追加のCSSクラス
 */
function render_section_title($en, $ja, $class = '')
{
?>
  <hgroup class="c-section-title <?php echo $class; ?>">
    <p class="c-section-title__en"><?php echo $en; ?></p>
    <h2 class="c-section-title__ja"><?php echo $ja; ?></h2>
  </hgroup>
<?php
}


/**
 * PRポイントリストを表示
 *
 * @param array $pr_items PRポイントの配列
 * @param string $title タイトル（デフォルト: PRポイント）
 */
function render_pr_list($pr_items, $title = 'PRポイント')
{
  if (empty($pr_items)) {
    return;
  }
?>
  <div class="p-product__pr c-pr">
    <h4 class="c-pr__title"><?php echo $title; ?></h4>
    <ul class="c-pr__list">
      <?php foreach ($pr_items as $pr_item): ?>
        <li class="c-pr__item">
          <?php echo $pr_item; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php
}


/**
 * 商品画像を表示（デフォルト画像対応）
 *
 * @param string $image_path 画像パス
 * @param int $width 幅
 * @param int $height 高さ
 * @param string $alt 代替テキスト
 */
function render_product_image($image_path, $width = 400, $height = 300, $alt = '')
{
?>
  <img src="<?php echo get_image_path($image_path); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $alt; ?>" />
<?php
}


/**
 * ロゴ（画像+社名）を表示
 *
 * @param string $logo_path ロゴ画像のパス
 * @param string $company_name 会社名
 * @param int $width 画像の幅
 * @param int $height 画像の高さ
 */
function render_logo($logo_path, $company_name, $width = 100, $height = 100)
{
?>
  <img src="<?php echo $logo_path; ?>" alt="<?php echo $company_name; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
  <span><?php echo $company_name; ?></span>
<?php
}
