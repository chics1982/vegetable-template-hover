<section id="about" class="c-about">
  <div class="l-inner c-about__inner">
    <hgroup class="c-section-title">
      <p class="c-section-title__en">Company Profile</p>
      <h2 class="c-section-title__ja">会社概要</h2>
    </hgroup>
    <div class="c-about__content">
      <div class="c-about__thumb">
        <!-- config/index_config.phpで管理しています。 -->
        <img
          src="<?php echo htmlspecialchars($index_page['about_section']['main_image']); ?>"
          alt="<?php echo htmlspecialchars($about['shop_name']); ?>"
          width="400"
          height="300" />
      </div>
      <div class="c-about__body">
        <h3 class="c-about__title"><?php echo $about['shop_name']; ?></h3>
        <p class="c-about__text">
          <!-- config/index_config.phpで管理しています。 -->
          <?php echo $index_page['about_section']['text']; ?>
        </p>
      </div>
    </div>

    <div
      id="about-slider"
      class="splide c-about__slider"
      role="group"
      aria-label="会社概要のスライダー">
      <div class="splide__track">
        <ul class="splide__list">
          <!-- config/index_config.phpで管理しています。 -->
          <?php
          foreach ($index_page['about_section']['slider_images'] as $image):
          ?>
            <li class="splide__slide">
              <div class="c-about__slide-thumb">
                <img
                  src="<?php echo $image; ?>"
                  alt=""
                  width="400"
                  height="300" />
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <table class="c-about__table" aria-label="会社概要の表">
      <?php if (!empty($about['conpany_name'])): ?>
        <tr>
          <th>会社名</th>
          <td><?php echo $about['conpany_name']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['shop_name']) && $about['shop_name'] !== $about['conpany_name']): ?>
        <tr>
          <th>店名</th>
          <td><?php echo $about['shop_name']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['owner_ja'])): ?>
        <tr>
          <th>代表</th>
          <td><?php echo $about['owner_ja']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['address1']) || !empty($about['address2'])): ?>
        <tr>
          <th>住所</th>
          <td><?php echo $about['address1']; ?><?php if (!empty($about['address1']) && !empty($about['address2'])): ?><br><?php endif; ?><?php echo $about['address2']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['tel'])): ?>
        <tr>
          <th>TEL</th>
          <td><?php echo $about['tel']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['fax'])): ?>
        <tr>
          <th>FAX</th>
          <td><?php echo $about['fax']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['biz_time'])): ?>
        <tr>
          <th>営業時間</th>
          <td><?php echo $about['biz_time']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['holiday'])): ?>
        <tr>
          <th>定休日</th>
          <td><?php echo $about['holiday']; ?></td>
        </tr>
      <?php endif; ?>
      <?php if (!empty($about['url1'])): ?>
        <tr>
          <th>URL</th>
          <td>
            <a href="<?php echo $about['url1']; ?>" target="_blank"><?php echo $about['url1']; ?></a>
          </td>
        </tr>
      <?php endif; ?>
    </table>
  </div>
</section>