# ホームページテンプレート

農産物・ふるさと納税返礼品向けのPHPベースのホームページテンプレートです。
設定ファイルを編集するだけで、コンテンツを簡単に管理できます。

---

## 目次

1. [フォルダ構成](#フォルダ構成)
2. [新しいサイトを作る手順](#新しいサイトを作る手順)
3. [設定ファイルの詳細](#設定ファイルの詳細)
4. [色・デザインのカスタマイズ](#色デザインのカスタマイズ)
5. [ページの追加方法](#ページの追加方法)
6. [使用ライブラリ](#使用ライブラリ)
7. [本番公開前チェックリスト](#本番公開前チェックリスト)

---

## フォルダ構成

```
/
├── config/                  # 各ページの設定ファイル
│   ├── index_config.php     # トップページ設定
│   ├── company_config.php   # 会社紹介ページ設定
│   ├── kodawari_config.php  # こだわりページ設定
│   ├── products_config.php  # 商品一覧ページ設定
│   ├── recommend_config.php # おすすめ商品ページ設定
│   └── font.php             # フォント設定
│
├── component/               # 再利用可能なPHPコンポーネント
│   ├── config.php           # グローバル設定（会社情報、商品データ）
│   ├── header.php           # ヘッダー
│   ├── footer.php           # フッター
│   ├── helpers.php          # ヘルパー関数
│   ├── about.php            # 会社概要セクション
│   ├── belief.php           # 企業理念セクション
│   ├── producer.php         # 生産者紹介セクション
│   └── furusato.php         # ふるさと納税リンク
│
├── assets/
│   ├── img/                 # 画像ファイル
│   │   ├── main/            # メイン画像（ロゴ、背景、商品等）
│   │   ├── furusato/        # ふるさと納税サイトバナー
│   │   ├── review/          # レビュー用画像
│   │   └── why/             # ふるさと納税説明画像
│   ├── scss/                # SCSSソースファイル
│   ├── css/                 # コンパイル済みCSS
│   └── js/                  # JavaScript
│
├── award/                   # 受賞関連ページ
│
├── index.php                # トップページ
├── company.php              # 会社紹介ページ
├── kodawari.php             # こだわりページ
├── products.php             # 商品一覧ページ
├── recommend.php            # おすすめ商品ページ
├── contact.php              # お問い合わせページ
├── privacy.php              # プライバシーポリシー
├── thanks.php               # 送信完了ページ
├── mail.php                 # メール送信処理
└── dev.sh                   # 開発用スクリプト
```

---

## 新しいサイトを作る手順

### Step 1: グローバル設定を編集（必須）

#### `component/config.php`

最も重要な設定ファイルです。会社情報と商品データを設定します。

```php
$about = [
  'conpany_name' => '株式会社〇〇',
  'shop_name' => 'ショップ名',
  'owner_ja' => '代表者名',
  'owner_en' => 'Owner Name',
  'logo' => './assets/img/main/logo.webp',
  'owner_image' => './assets/img/main/owner.jpg',
  'address1' => '〒000-0000',
  'address2' => '〇〇県〇〇市〇〇町1-2-3',
  'tel' => '000-000-0000',
  'fax' => '000-000-0000',
  'biz_time' => '9:00〜18:00',
  'holiday' => '土日祝',
  'url1' => 'https://example.com',
  'instagram' => 'https://instagram.com/xxx',
  'x' => 'https://x.com/xxx',
  'line' => '',
  'facebook' => '',
  'youtube' => '',
  'meta_descriptions' => [
    'top' => 'トップページの説明文（104文字以内推奨）',
    'recommend' => 'おすすめ商品ページの説明文',
    'products' => '商品一覧ページの説明文',
    'commitment' => 'こだわりページの説明文',
    'about' => '会社紹介ページの説明文'
  ]
];
```

#### ふるさと納税サイトリンク（最大4つ）

```php
$furusato = [
  'site1_name' => 'ふるさとチョイス',
  'site1_link' => 'https://...',
  'site2_name' => '楽天ふるさと納税',
  'site2_link' => 'https://...',
  'site3_name' => 'さとふる',
  'site3_link' => 'https://...',
  'site4_name' => 'ふるなび',
  'site4_link' => 'https://...',
];
```

#### 商品データ

```php
$products = [
  [
    'product_title_main' => '商品名',
    'product_catch' => 'キャッチコピー',
    'product_text' => '商品の説明文',
    'product_thumb' => './assets/img/main/product1.jpg',
    'product_pr' => ['特徴1', '特徴2', '特徴3'],
    'product_furusato_link' => 'ふるさと納税サイトURL',
    'product_buy_link' => '購入サイトURL'
  ],
  // 商品を追加...
];
```

---

### Step 2: 画像を差し替え

以下の画像を自社のものに差し替えてください。

| ファイルパス | 説明 | 推奨サイズ |
|-------------|------|-----------|
| `assets/img/main/logo.webp` | ロゴ画像 | 横幅300px程度 |
| `assets/img/main/owner.jpg` | 代表者画像 | 400x500px程度 |
| `assets/img/main/favicon.png` | ファビコン | 32x32px |
| `assets/img/main/bg1.png` | 背景画像 | 1920x1080px程度 |

---

### Step 3: フォント設定

#### `config/font.php`

```php
$font = [
  'name' => 'Noto Serif JP',    // Google Fontsのフォント名
  'fallback' => 'serif',         // フォールバック（serif / sans-serif）
  'weights' => '200..900'        // フォントウェイト
];
```

**よく使うフォント例：**
- `Noto Serif JP` - 明朝体（和風、高級感）
- `Noto Sans JP` - ゴシック体（モダン、読みやすい）
- `M PLUS Rounded 1c` - 丸ゴシック（親しみやすい）

---

### Step 4: 各ページの設定

#### `config/index_config.php`（トップページ）

```php
$index_page = [
  // ファーストビュー
  'fv_background' => './assets/img/main/bg.jpg',
  'page_bg_brightness' => '1',      // 明るさ（0.0〜1.0）
  'page_bg_blur' => '0px',          // ぼかし

  'fv_heading' => [
    'line1' => '1行目のキャッチコピー',
    'line2' => '2行目のキャッチコピー'
  ],

  // スライダー（4枚）
  'fv_slides' => [
    [
      'link' => './recommend.php',
      'title' => 'スライドタイトル',
      'sub_title' => 'サブタイトル',
      'body_title' => '本文タイトル',
      'body_text' => '説明文',
      'image' => './assets/img/main/slide1.jpg'
    ],
    // ...
  ],

  // 受賞歴セクション（表示/非表示可能）
  'awards' => [
    'show' => true,  // false で非表示
    'items' => [
      ['thumb' => '画像パス', 'alt' => '代替テキスト', 'text' => '受賞名'],
    ]
  ],

  // こだわり3項目
  'commitments' => [
    [
      'title_en' => 'QUALITY',
      'number' => '01',
      'title_ja' => '品質へのこだわり',
      'text' => '説明文',
      'image' => './assets/img/main/commitment1.jpg'
    ],
    // ...
  ],

  // Google口コミ
  'google_review' => [
    'description' => '口コミ説明文',
    'overall_rating' => '5.0',
    'rating_date' => '2024年12月',
    'reviews' => [
      ['icon' => 'アイコン', 'name' => '名前', 'star_class' => '_star5', 'text' => 'レビュー文'],
    ],
    'google_link' => 'GoogleレビューURL'
  ],

  // 企業理念
  'belief' => [
    'image' => './assets/img/main/belief-bg.jpg',
    'catch_line1' => 'キャッチ1行目',
    'catch_line2' => 'キャッチ2行目',
    'text' => '理念の説明文'
  ],

  // Instagram画像（12枚）
  'instagram_images' => [
    './assets/img/main/insta1.jpg',
    // ...
  ],

  // 会社概要セクション
  'about_section' => [
    'main_image' => './assets/img/main/about.jpg',
    'text' => '会社の説明文',
    'slider_images' => [
      // スライダー画像6枚
    ]
  ]
];
```

#### `config/company_config.php`（会社紹介）

```php
$company_page = [
  'producer_label' => '生産者',      // 「製造者」「作り手」等に変更可
  'company_intro_label' => '会社紹介',
  'mv_catch' => 'ページのキャッチコピー',

  'page_bg_image' => './assets/img/main/company-bg.jpg',
  'page_bg_brightness' => '1',
  'page_bg_blur' => '0px',

  'thought_image' => './assets/img/main/thought.jpg',
  'thought_title' => '私たちの想い',
  'thought_text1' => '想いの説明文1',
  'thought_text2' => '想いの説明文2',

  // 沿革
  'history' => [
    ['year' => '2001', 'items' => ['会社設立', '初商品発売']],
    ['year' => '2010', 'items' => ['工場拡大']],
  ],

  'commitment_image' => './assets/img/main/commitment.jpg',
  'commitment_title' => 'こだわりのタイトル',
  'commitment_text' => 'こだわりの説明文'
];
```

#### `config/kodawari_config.php`（こだわり）

```php
$kodawari_page = [
  // 原材料へのこだわり（3項目）
  'raw_materials' => [
    [
      'title_main' => 'タイトル',
      'title_en' => 'English Title',
      'image' => './assets/img/main/material1.jpg',
      'text' => '説明文'
    ],
  ],

  // 生産方法（3項目）
  'production_methods' => [
    [
      'thumb_image' => 'サムネイル画像',
      'body_image' => '詳細画像',
      'title' => 'タイトル',
      'text' => '説明文'
    ],
  ],

  // 生産工程
  'production_processes' => [
    ['image' => '画像', 'title' => '工程1', 'text' => '説明'],
  ]
];
```

#### `config/recommend_config.php`（おすすめ商品詳細）

```php
$product_details = [
  0 => [  // $products[0] の詳細
    'eat_items' => [  // 美味しい食べ方
      ['title' => 'そのまま', 'text' => '説明文'],
    ],
    'health_items' => [  // 栄養価
      [
        'title' => 'ビタミンC',
        'effects' => ['効果1', '効果2']
      ]
    ],
    'expected_health' => [  // 健康効果
      'thumb' => '画像',
      'items' => [
        ['title' => '効果名', 'text' => '説明'],
      ]
    ]
  ]
];
```

---

## 色・デザインのカスタマイズ

### `assets/scss/foundation/_f-variables.scss`

```scss
// メインカラー
--c-main: #0066b2;           // 青（ボタン、リンク等）
--c-main-hover: #004d86;     // ホバー時

// サブカラー
--c-sub: #729b23;            // 緑

// アクセントカラー
--c-accent1: #c00000;        // 赤（強調、注意）
--c-accent1-hover: #990000;

// 背景色
--c-background: #f5f5f5;     // セクション背景
--c-footer-bg: #222222;      // フッター背景

// テキスト色
--c-text: #222222;           // 本文
--c-white: #ffffff;
--c-black: #000000;

// 角丸
--radius-sm: 4px;            // ボタン等
--radius-md: 8px;            // カード等
--radius-lg: 12px;           // 大きめの要素
```

### SCSSコンパイル

SCSSを編集したら、CSSにコンパイルしてください。

```bash
# 開発用スクリプトを使用
./dev.sh

# または手動でコンパイル
sass assets/scss/style.scss assets/css/style.css
```

---

## ページの追加方法

### 新しいページを作成する場合

1. ルートに新しいPHPファイルを作成（例：`news.php`）

2. 以下のテンプレートを使用：

```php
<?php
$page_id = 'news';  // ページID（meta description用）
include 'component/header.php';
?>

<main>
  <!-- ページコンテンツ -->
</main>

<?php include 'component/footer.php'; ?>
```

3. `component/config.php` の `meta_descriptions` にページIDを追加：

```php
'meta_descriptions' => [
  // ...
  'news' => 'お知らせページの説明文'
]
```

### 新しいセクションを作成する場合

1. `component/` に新しいPHPファイルを作成（例：`component/news-section.php`）

2. 必要なページから読み込む：

```php
<?php include 'component/news-section.php'; ?>
```

---

## 使用ライブラリ

| ライブラリ | バージョン | 用途 |
|-----------|-----------|------|
| Splide.js | 4.1.4 | スライダー |
| Font Awesome | 6.5.1 | アイコン |
| Google Fonts | - | Webフォント |

すべてCDNから読み込んでいます。

---

## 本番公開前チェックリスト

### 必須

- [ ] `component/config.php` の会社情報がすべて入力されている
- [ ] `meta_descriptions` が各ページ分入力されている
- [ ] ロゴ画像が差し替えられている
- [ ] ふるさと納税サイトのURLが正しい
- [ ] お問い合わせフォームの送信先メールアドレスが設定されている
- [ ] プライバシーポリシーの内容が更新されている

### 推奨

- [ ] すべての画像がWebP形式に変換されている
- [ ] 画像サイズが最適化されている
- [ ] スマートフォンで表示確認済み
- [ ] 各ページのリンクが正しく動作する
- [ ] SNSリンクが正しい

### SEO

- [ ] 各ページのmeta descriptionが104文字以内
- [ ] ページタイトルが適切
- [ ] OGP（Open Graph Protocol）タグの設定（必要に応じて）

---

## ヘルパー関数

`component/helpers.php` で使用できる関数：

```php
// 画像パスを取得（存在しない場合はデフォルト画像）
get_image_path($path, $default)

// リンクURLを取得
get_link_url($url)

// テキストを取得（空の場合はデフォルト値）
get_text($text, $default)

// 購入ボタンを出力
render_buy_buttons($furusato_link, $buy_link, $btn_class)

// セクションタイトルを出力
render_section_title($en, $ja, $class)

// PRリストを出力
render_pr_list($pr_items, $title)
```

---

## トラブルシューティング

### 画像が表示されない
- パスが `./assets/img/...` で始まっているか確認
- ファイル名の大文字小文字が一致しているか確認

### スタイルが反映されない
- SCSSを編集した場合、CSSにコンパイルしたか確認
- ブラウザのキャッシュをクリア

### メールが送信されない
- `mail.php` のメール設定を確認
- サーバーのメール設定を確認

---

## 更新履歴

- 2024/12/26 - 初版作成
