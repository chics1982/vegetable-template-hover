<footer class="l-footer">
  <div class="l-inner l-footer__inner">
    <div class="l-footer__content">
      <div class="l-footer__left">
        <address class="l-footer__address">
          <?php if (!empty($about['shop_name'])): ?>
          <p class="l-footer__title"><?php echo $about['shop_name']; ?></p>
          <?php endif; ?>
          <?php if (!empty($about['address1']) || !empty($about['address2'])): ?>
          <p class="l-footer__address-text">
            <?php echo $about['address1']; ?><?php if (!empty($about['address1']) && !empty($about['address2'])): ?><br><?php endif; ?><?php echo $about['address2']; ?>
          </p>
          <?php endif; ?>
          <?php if (!empty($about['tel'])): ?>
          <div class="l-footer__info">
            <p class="l-footer__info-th">TEL：</p>
            <p class="l-footer__info-td"><?php echo $about['tel']; ?></p>
          </div>
          <?php endif; ?>
          <?php if (!empty($about['fax'])): ?>
          <div class="l-footer__info">
            <p class="l-footer__info-th">FAX：</p>
            <p class="l-footer__info-td"><?php echo $about['fax']; ?></p>
          </div>
          <?php endif; ?>
          <?php if (!empty($about['biz_time'])): ?>
          <div class="l-footer__info">
            <p class="l-footer__info-th">営業時間：</p>
            <p class="l-footer__info-td"><?php echo $about['biz_time']; ?></p>
          </div>
          <?php endif; ?>
          <?php if (!empty($about['holiday'])): ?>
          <div class="l-footer__info">
            <p class="l-footer__info-th">定休日：</p>
            <p class="l-footer__info-td"><?php echo $about['holiday']; ?></p>
          </div>
          <?php endif; ?>
          <?php if (!empty($about['url1'])): ?>
          <div class="l-footer__info">
            <p class="l-footer__info-th">URL：</p>
            <p class="l-footer__info-td">
              <a href="<?php echo $about['url1']; ?>" target="_blank"><?php echo $about['url1']; ?></a>
            </p>
          </div>
          <?php endif; ?>
        </address>
        <ul class="l-footer__sns-list">
          <?php if (!empty($about['instagram'])): ?>
          <li class="l-footer__sns-item">
            <a
              class="l-footer__sns-link"
              href="<?php echo $about['instagram']; ?>"
              target="_blank"
              aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </li>
          <?php endif; ?>
          <?php if (!empty($about['x'])): ?>
          <li class="l-footer__sns-item">
            <a
              class="l-footer__sns-link"
              href="<?php echo $about['x']; ?>"
              target="_blank"
              aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
          </li>
          <?php endif; ?>
          <?php if (!empty($about['line'])): ?>
          <li class="l-footer__sns-item">
            <a
              class="l-footer__sns-link"
              href="<?php echo $about['line']; ?>"
              target="_blank"
              aria-label="LINE"><i class="fab fa-line"></i></a>
          </li>
          <?php endif; ?>
          <?php if (!empty($about['facebook'])): ?>
          <li class="l-footer__sns-item">
            <a
              class="l-footer__sns-link"
              href="<?php echo $about['facebook']; ?>"
              target="_blank"
              aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          </li>
          <?php endif; ?>
          <?php if (!empty($about['youtube'])): ?>
          <li class="l-footer__sns-item">
            <a
              class="l-footer__sns-link"
              href="<?php echo $about['youtube']; ?>"
              target="_blank"
              aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          </li>
          <?php endif; ?>
        </ul>
      </div>

      <ul id="js-footer-nav" class="l-footer__nav-list">
        <li class="l-footer__nav-item">
          <a href="./" class="l-footer__nav-link">TOP</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="./recommend.php" class="l-footer__nav-link">おすすめ商品</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="./products.php" class="l-footer__nav-link">商品一覧</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="./kodawari.php" class="l-footer__nav-link">こだわり</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="./company.php" class="l-footer__nav-link"><?php echo isset($company_page['producer_label']) ? $company_page['producer_label'] : '製造者'; ?>・<?php echo isset($company_page['company_intro_label']) ? $company_page['company_intro_label'] : '会社紹介'; ?></a>
        </li>
        <li class="l-footer__nav-item">
          <a href="./contact.php" class="l-footer__nav-link">お問い合わせ</a>
        </li>
      </ul>

      <ul class="l-footer__furusato-list">
        <li class="l-footer__furusato-item">
          <?php if (!empty($furusato['site1_link'])): ?>
          <a href="<?php echo $furusato['site1_link']; ?>" class="l-footer__furusato-link" target="_blank"><?php echo $furusato['site1_name']; ?></a>
          <?php else: ?>
          <span class="l-footer__furusato-link"><?php echo $furusato['site1_name']; ?><br><small>（coming soon）</small></span>
          <?php endif; ?>
        </li>
        <li class="l-footer__furusato-item">
          <?php if (!empty($furusato['site2_link'])): ?>
          <a href="<?php echo $furusato['site2_link']; ?>" class="l-footer__furusato-link" target="_blank"><?php echo $furusato['site2_name']; ?></a>
          <?php else: ?>
          <span class="l-footer__furusato-link"><?php echo $furusato['site2_name']; ?><br><small>（coming soon）</small></span>
          <?php endif; ?>
        </li>
        <li class="l-footer__furusato-item">
          <?php if (!empty($furusato['site3_link'])): ?>
          <a href="<?php echo $furusato['site3_link']; ?>" class="l-footer__furusato-link" target="_blank"><?php echo $furusato['site3_name']; ?></a>
          <?php else: ?>
          <span class="l-footer__furusato-link"><?php echo $furusato['site3_name']; ?><br><small>（coming soon）</small></span>
          <?php endif; ?>
        </li>
        <li class="l-footer__furusato-item">
          <?php if (!empty($furusato['site4_link'])): ?>
          <a href="<?php echo $furusato['site4_link']; ?>" class="l-footer__furusato-link" target="_blank"><?php echo $furusato['site4_name']; ?></a>
          <?php else: ?>
          <span class="l-footer__furusato-link"><?php echo $furusato['site4_name']; ?><br><small>（coming soon）</small></span>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    <p class="l-footer__copyright" translate="no">
      <small>&copy;<?php echo $about['shop_name']; ?></small>
    </p>
  </div>
</footer>
</body>

</html>