  <!-- パターン1: ダーク＆リッチ -->
  <section class="p-awards-dark">
    <div class="p-awards-header">
      <p class="p-awards-header__en">Awards</p>
      <h2 class="p-awards-header__title">受賞歴</h2>
    </div>

    <ul class="l-inner p-awards-dark__inner p-awards-dark__grid">
      <?php foreach ($index_page['awards']['items'] as $award): ?>
        <li class="p-awards-dark__card">
          <h3 class="p-awards-dark__title"><?php echo htmlspecialchars($award['alt']); ?></h3>
          <p class="p-awards-dark__text"><?php echo $award['text']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
