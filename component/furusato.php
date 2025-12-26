<section class="c-furusato">
  <div class="l-inner c-furusato__inner">
    <div class="c-furusato__head">
      <p class="c-furusato__title">
        地域貢献しつつ、ふるさと納税で<br
          class="under_medium" />お得な寄付を試してみませんか？
      </p>
    </div>
    <ul class="c-furusato__list">
      <li class="c-furusato__item">
        <a class="c-furusato__link" href="<?php echo $furusato['site1_link']; ?>" target="_blank">
          <picture>
            <source
              media="(max-width:767px)"
              srcset="./assets/img/furusato/<?php echo $furusato['site1_sp_thumb']; ?>" />
            <img
              src="./assets/img/furusato/<?php echo $furusato['site1_pc_thumb']; ?>"
              width="1456"
              height="180"
              alt="<?php echo $furusato['site1_name']; ?>" />
          </picture>
        </a>
        <?php if (empty($furusato['site1_link'])) : ?>
          <span class="c-furusato__disabled" aria-hidden="true">Coming soon</span>
        <?php endif; ?>
      </li>
      <li class="c-furusato__item">
        <a class="c-furusato__link" href="<?php echo $furusato['site2_link']; ?>" target="_blank">
          <picture>
            <source
              media="(max-width:767px)"
              srcset="./assets/img/furusato/<?php echo $furusato['site2_sp_thumb']; ?>" />
            <img
              src="./assets/img/furusato/<?php echo $furusato['site2_pc_thumb']; ?>"
              width="1456"
              height="180"
              alt="<?php echo $furusato['site2_name']; ?>" />
          </picture>
        </a>
        <?php if (empty($furusato['site2_link'])) : ?>
          <span class="c-furusato__disabled" aria-hidden="true">Coming soon</span>
        <?php endif; ?>
      </li>
      <li class="c-furusato__item">
        <a class="c-furusato__link" href="<?php echo $furusato['site3_link']; ?>" target="_blank">
          <picture>
            <source
              media="(max-width:767px)"
              srcset="./assets/img/furusato/<?php echo $furusato['site3_sp_thumb']; ?>" />
            <img
              src="./assets/img/furusato/<?php echo $furusato['site3_pc_thumb']; ?>"
              width="1456"
              height="180"
              alt="<?php echo $furusato['site3_name']; ?>" />
          </picture>
        </a>
        <?php if (empty($furusato['site3_link'])) : ?>
          <span class="c-furusato__disabled" aria-hidden="true">Coming soon</span>
        <?php endif; ?>
      </li>
      <li class="c-furusato__item">
        <a class="c-furusato__link" href="<?php echo $furusato['site4_link']; ?>" target="_blank">
          <picture>
            <source
              media="(max-width:767px)"
              srcset="./assets/img/furusato/<?php echo $furusato['site4_sp_thumb']; ?>" />
            <img
              src="./assets/img/furusato/<?php echo $furusato['site4_pc_thumb']; ?>"
              width="1456"
              height="180"
              alt="<?php echo $furusato['site4_name']; ?>" />
          </picture>
        </a>
        <?php if (empty($furusato['site4_link'])) : ?>
          <span class="c-furusato__disabled" aria-hidden="true">Coming soon</span>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</section>