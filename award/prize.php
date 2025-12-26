<section class="p-prize">
      <div class="l-inner p-prize__inner">
        <div class="c-section-title_wrapper">
          <hgroup class="c-section-title">
            <p class="c-section-title__en _prize">Awards</p>
            <h2 class="c-section-title__ja">受賞歴のご紹介</h2>
          </hgroup>
        </div>
        <ul class="p-prize__list">
          <?php foreach ($index_page['awards']['items'] as $award): ?>
            <li class="p-prize__item">
              <div class="p-prize__thumb">
                <img src="<?php echo htmlspecialchars($award['thumb']); ?>" width="420" height="297" alt="<?php echo htmlspecialchars($award['alt']); ?>" />
              </div>
              <p class="p-prize__text">
                <?php echo $award['text']; ?>
              </p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>