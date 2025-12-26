<section class="l-section l-section--padding-lg p-media01">
  <div class="c-section-header">
    <p class="c-section-header__en">MEDIA</p>
    <h2 class="c-section-header__title">メディア掲載</h2>
  </div>

  <div class="p-media01__grid">
    <?php foreach ($index_page['awards']['items'] as $award): ?>
      <div class="p-media01__card">
        <h3 class="p-media01__title"><?php echo htmlspecialchars($award['alt']); ?></h3>
        <p class="p-media01__subtitle"><?php echo $award['text']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
