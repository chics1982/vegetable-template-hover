<div class="c-belief">
  <div class="c-belief__thumb">
    <!-- config/index_config.phpで管理しています。 -->
    <img
      src="<?php echo htmlspecialchars($index_page['belief']['image']); ?>"
      alt="企業理念"
      width="2000"
      height="800" />
  </div>
  <div class="l-inner c-belief__inner">
    <div class="c-belief__content">
      <div class="c-belief__left">
        <h3 class="c-belief__title">企業理念</h3>
        <p class="c-belief__catch">
              <!-- config/index_config.phpで管理しています。 -->
          <?php echo $index_page['belief']['catch_line1']; ?><br /><?php echo $index_page['belief']['catch_line2']; ?>
        </p>
      </div>
      <div class="c-belief__right">
        <p class="c-belief__text">
              <!-- config/index_config.phpで管理しています。 -->
          <?php echo $index_page['belief']['text']; ?>
        </p>
      </div>
    </div>
  </div>
</div>