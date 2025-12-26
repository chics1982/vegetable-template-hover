<?php
$page_id = 'about';
include 'component/header.php';
?>
<style>
  .c-page-head__fv._company::before {
    background: url(<?php echo $company_page['page_bg_image']; ?>) center center / cover no-repeat !important;
    filter: brightness(<?php echo $company_page['page_bg_brightness']; ?>) blur(<?php echo $company_page['page_bg_blur']; ?>) !important;
  }
</style>
<main class="l-main">
  <div class="c-page-head">
    <div class="c-page-head__fv _company">
      <div class="l-inner c-page-head__inner">
        <div class="c-page-head__content">
          <h2 class="c-page-head__title">
            <?php echo $company_page['producer_label']; ?>・<?php echo $company_page['company_intro_label']; ?> <span class="over_medium">/</span>
            <br class="under_medium" /><?php echo $company_page['mv_catch']; ?>
          </h2>
          <p class="c-page-head__text">
            <?php echo $company_page['mv_sub']; ?>
          </p>
        </div>
      </div>
    </div>
    <div class="l-inner c-page-head__inner _narrow">
      <p class="c-page-head__discription">
        <?php echo $company_page['page_description']; ?>
      </p>
    </div>
  </div>

  <?php include 'component/furusato.php'; ?>

  <section class="p-company">
    <hgroup class="c-section-title">
      <p class="c-section-title__en">Producer and Philosophy</p>
      <h2 class="c-section-title__ja"><?php echo $company_page['producer_label']; ?>の紹介</h2>
    </hgroup>

    <div class="l-inner p-company__inner">
      <?php include 'component/producer.php'; ?>
    </div>
    
    <div class="p-company__content">
      <div class="l-inner p-company__inner">
        <div class="p-company__thought thought">
          <hgroup class="c-section-title">
            <h2 class="c-section-title__ja">
              この仕事の面白さ＆<wbr />お客さまへの想い
            </h2>
          </hgroup>
          <div class="thought__content">
            <div class="thought__thumb">
              <img
                src="<?php echo $company_page['thought_image']; ?>"
                alt=""
                width="400"
                height="300" />
            </div>
            <div class="thought__body">
              <h3 class="thought__title"><?php echo $company_page['thought_title']; ?></h3>
              <p class="thought__text">
                <?php echo $company_page['thought_text1']; ?>
              </p>
              <p class="thought__text">
                <?php echo $company_page['thought_text2']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'component/belief.php'; ?>
  </section>

  <section class="p-company__history history">
    <div class="l-inner history__inner">
      <hgroup class="c-section-title">
        <p class="c-section-title__en">History</p>
        <h2 class="c-section-title__ja">沿革</h2>
      </hgroup>
      <ul class="history__list">
        <?php foreach ($company_page['history'] as $history_item): ?>
        <li class="history__item">
          <h3 class="history__year"><?php echo $history_item['year']; ?><span>年</span></h3>
          <div class="history__body">
            <?php foreach ($history_item['items'] as $item): ?>
            <p class="history__text"><?php echo $item; ?></p>
            <?php endforeach; ?>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="p-company__commitment commitment">
    <div class="l-inner commitment__inner">
      <hgroup class="c-section-title">
        <p class="c-section-title__en">Passion for Quality Products</p>
        <h2 class="c-section-title__ja"><?php echo $company_page['producer_label']; ?>のこだわり</h2>
      </hgroup>
      <div class="commitment__thumb">
        <img
          src="<?php echo $company_page['commitment_image']; ?>"
          alt=""
          width="1600"
          height="900" />
      </div>
      <div class="commitment__content">
        <h3 class="commitment__title"><?php echo $company_page['commitment_title']; ?></h3>
        <p class="commitment__text"><?php echo $company_page['commitment_text']; ?>
        </p>
      </div>
    </div>
  </section>

  <?php include 'component/about.php'; ?>

  <?php include 'component/furusato.php'; ?>

  <p class="c-to-top" id="js-to-top"><a href="#">Page Top</a></p>
</main>

<?php include 'component/footer.php'; ?>