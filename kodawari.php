<?php
$page_id = 'commitment';
include 'component/header.php';
?>
<style>
  .c-page-head__fv._kodawari::before {
    background: url(<?php echo $kodawari_page['page_bg_image']; ?>) center center / cover no-repeat !important;
    filter: brightness(<?php echo $kodawari_page['page_bg_brightness']; ?>) blur(<?php echo $kodawari_page['page_bg_blur']; ?>) !important;
  }
</style>
<main class="l-main">
  <div class="c-page-head">
    <div class="c-page-head__fv _kodawari">
      <div class="l-inner c-page-head__inner">
        <div class="c-page-head__content">
          <h2 class="c-page-head__title">
            こだわり <span class="over_medium">/</span>
            <br class="under_medium" /><?php echo $kodawari_page['mv_catch']; ?>
          </h2>
          <p class="c-page-head__text">
            <?php echo $kodawari_page['mv_sub']; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="l-inner c-page-head__inner _narrow">
      <p class="c-page-head__discription">
        <?php echo $kodawari_page['page_description']; ?>
      </p>
    </div>
  </div>

  <?php include 'component/furusato.php'; ?>

  <div class="p-kodawari">
    <div class="l-inner p-kodawari__inner">
      <section class="p-kodawari__raw">
        <hgroup class="c-section-title">
          <p class="c-section-title__en">Raw Materials</p>
          <h2 class="c-section-title__ja">原材料へのこだわり</h2>
        </hgroup>

        <ul class="p-kodawari__raw-list raw">
          <?php foreach ($kodawari_page['raw_materials'] as $index => $raw): ?>
          <li class="raw__item">
            <div class="raw__num">
              <p>No.<?php echo $index + 1; ?></p>
            </div>

            <div class="raw__title-group">
              <hgroup class="raw__title">
                <!-- <p class="raw__title-sub"></p> -->
                <h3 class="raw__title-main"><?php echo $raw['title_main']; ?></h3>
              </hgroup>
              <p class="raw__title-en">
                <?php echo $raw['title_en']; ?>
              </p>
            </div>

            <div class="raw__content">
              <div class="raw__thumb">
                <img
                  src="<?php echo $raw['image']; ?>"
                  alt=""
                  width="400"
                  height="300" />
              </div>
              <div class="raw__body">
                <p class="raw__text">
                  <?php echo $raw['text']; ?>
                </p>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="p-kodawari__method">
        <hgroup class="c-section-title">
          <p class="c-section-title__en">Production Method</p>
          <h2 class="c-section-title__ja">生産方法のこだわり</h2>
        </hgroup>

        <ul class="p-kodawari__method-list method">
          <?php foreach ($kodawari_page['production_methods'] as $method): ?>
          <li class="method__item">
            <div class="method__thumb">
              <img
                src="<?php echo $method['thumb_image']; ?>"
                alt=""
                width="400"
                height="300" />
            </div>
            <div class="method__body">
              <div class="method__img">
                <img
                  src="<?php echo $method['body_image']; ?>"
                  alt=""
                  width="400"
                  height="300" />
              </div>
              <h3 class="method__title"><?php echo $method['title']; ?></h3>
              <p class="method__text">
                <?php echo $method['text']; ?>
              </p>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="p-kodawari__process">
        <hgroup class="c-section-title">
          <p class="c-section-title__en">Production Process</p>
          <h2 class="c-section-title__ja">こだわりの生産工程</h2>
        </hgroup>

        <ul class="p-kodawari__process-list process">
          <?php foreach ($kodawari_page['production_processes'] as $index => $process): ?>
          <li class="process__item">
            <div class="process__thumb">
              <img
                src="<?php echo $process['image']; ?>"
                alt=""
                width="400"
                height="300" />
            </div>
            <div class="process__body">
              <div class="process__title-group">
                <div class="process__num">
                  <span><?php echo $index + 1; ?></span>
                </div>
                <h3 class="process__title"><?php echo $process['title']; ?></h3>
              </div>
              <p class="process__text">
                <?php echo $process['text']; ?>
              </p>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="p-kodawari__point">
        <hgroup class="c-section-title">
          <p class="c-section-title__en">The delicious point</p>
          <h2 class="c-section-title__ja">美味しさのポイント</h2>
        </hgroup>

        <ul class="p-kodawari__point-list point1">
          <?php foreach ($kodawari_page['delicious_point']['images_list1'] as $image): ?>
          <li class="poin1__item">
            <img
              src="<?php echo $image; ?>"
              alt=""
              width="400"
              height="300" />
          </li>
          <?php endforeach; ?>
        </ul>
        <ul class="p-kodawari__point-list point2">
          <?php foreach ($kodawari_page['delicious_point']['images_list2'] as $image): ?>
          <li class="poin2__item">
            <img
              src="<?php echo $image; ?>"
              alt=""
              width="400"
              height="300" />
          </li>
          <?php endforeach; ?>
        </ul>

        <h3 class="p-kodawari__point-title">
          <?php echo $kodawari_page['delicious_point']['title']; ?>
        </h3>
        <p class="p-kodawari__point-text">
          <?php echo $kodawari_page['delicious_point']['text']; ?>
        </p>
      </section>
    </div>
  </div>

  <?php include 'component/furusato.php'; ?>

  <p class="c-to-top" id="js-to-top"><a href="#">Page Top</a></p>
</main>

<?php include 'component/footer.php'; ?>