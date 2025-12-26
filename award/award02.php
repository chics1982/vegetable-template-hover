<section class="l-section l-section--padding-lg p-awards-classic">
    <div class="c-section-header">
      <div class="p-awards-classic__ornament">
        <div class="p-awards-classic__ornament-line"></div>
        <div class="p-awards-classic__ornament-diamond"></div>
        <div class="p-awards-classic__ornament-line"></div>
      </div>
      <p class="c-section-header__en">Media</p>
      <h2 class="c-section-header__title">メディア出演のご紹介</h2>
    </div>

    <div class="p-awards-classic__showcase">
      <?php foreach ($index_page['awards']['items'] as $award): ?>
      <div class="p-awards-classic__frame">
        <div class="p-awards-classic__corners">
          <span class="p-awards-classic__corner p-awards-classic__corner--tl"></span>
          <span class="p-awards-classic__corner p-awards-classic__corner--tr"></span>
          <span class="p-awards-classic__corner p-awards-classic__corner--bl"></span>
          <span class="p-awards-classic__corner p-awards-classic__corner--br"></span>
        </div>
        <div class="p-awards-classic__content">
          <div class="p-awards-classic__image">
            <img src="<?php echo htmlspecialchars($award['thumb']); ?>" alt="<?php echo htmlspecialchars($award['alt']); ?>" />
          </div>
          <p class="p-awards-classic__title"><?php echo $award['text']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>

      <?php if ($index_page['video_section']['show']): ?>
      <?php foreach ($index_page['video_section']['items'] as $video_index => $video_item): ?>
      <div class="p-awards-classic__frame p-awards-classic__frame--video">
        <div class="p-awards-classic__corners">
          <span class="p-awards-classic__corner p-awards-classic__corner--tl"></span>
          <span class="p-awards-classic__corner p-awards-classic__corner--tr"></span>
          <span class="p-awards-classic__corner p-awards-classic__corner--bl"></span>
          <span class="p-awards-classic__corner p-awards-classic__corner--br"></span>
        </div>
        <div class="p-awards-classic__content">
          <div class="p-awards-classic__image p-awards-classic__image--video" onclick="openVideoModal(<?php echo $video_index; ?>)">
            <video preload="metadata" muted>
              <source src="<?php echo htmlspecialchars($video_item['video_path']); ?>" type="video/mp4">
            </video>
            <div class="p-awards-classic__play-btn">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polygon points="5 3 19 12 5 21 5 3"></polygon>
              </svg>
            </div>
          </div>
          <p class="p-awards-classic__title"><?php echo $video_item['description']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>