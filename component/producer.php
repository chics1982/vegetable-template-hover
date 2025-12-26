<div class="c-producer">
<div class="c-producer__thumb">
    <!-- component/config.php（company.phpの時はowner_image_companyを使用） -->
    <?php
      $producer_image = (basename($_SERVER['PHP_SELF']) === 'company.php' && isset($about['owner_image_company']))
        ? $about['owner_image_company']
        : $about['owner_image'];
    ?>
    <img
      src="<?php echo htmlspecialchars($producer_image); ?>"
      alt="<?php echo htmlspecialchars($about['owner_ja']); ?>"
      width="100"
      height="100" />
  </div>
  <div class="c-producer__body">
    <p class="c-producer__title">代表</p>
    <hgroup class="c-producer__name">
      <h3 class="c-producer__name-ja"><?php echo $about['owner_ja']; ?></h3>
      <p class="c-producer__name-en"><?php echo $about['owner_en']; ?></p>
    </hgroup>
    <!-- config/index_config.phpで管理しています。 -->
    <p class="c-producer__text"><?php echo $index_page['producer_message']; ?></p>
  </div>
</div>