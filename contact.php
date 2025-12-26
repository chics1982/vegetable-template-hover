<?php
include 'component/header.php';
?>
<main class="l-main">
  <div class="p-contact">
    <div class="l-inner p-contact__inner">
      <h2 class="p-contact__title">お問い合わせ</h2>
      <p class="p-contact__text">
        弊社へのお問い合わせは<wbr>こちらよりお願い致します。
      </p>

      <div id="formWrap" class="form__wrap">
        <!-- フォーム -->
        <form method="post" class="form__content" action="mail.php">
          <table class="form__table" aria-label="お問い合わせフォーム">
            <tr class="form__row">
              <th id="name" class="form__label">
                お名前<span class="required">必須</span>
              </th>
              <td class="form__input">
                <input
                  size="20"
                  type="text"
                  name="お名前"
                  autocomplete="name"
                  required
                  aria-labelledby="name" />
              </td>
            </tr>
            <tr class="form__row">
              <th id="company" class="form__label">会社名</th>
              <td class="form__input">
                <input
                  size="20"
                  type="text"
                  name="会社名"
                  autocomplete="organization"
                  aria-labelledby="company" />
              </td>
            </tr>
            <tr class="form__row">
              <th id="email" class="form__label">
                メールアドレス<span class="required">必須</span>
              </th>
              <td class="form__input">
                <input
                  size="20"
                  type="email"
                  name="メールアドレス"
                  placeholder="info@example.com"
                  autocomplete="email"
                  required
                  aria-labelledby="email" />
              </td>
            </tr>
            <tr class="form__row">
              <th id="tel" class="form__label">電話番号</th>
              <td class="form__input">
                <input
                  size="30"
                  type="text"
                  name="電話番号"
                  autocomplete="tel"
                  placeholder="090-1234-5678"
                  aria-labelledby="tel" />
              </td>
            </tr>
            <tr class="form__row">
              <th id="message" class="form__label">
                お問い合わせ内容<span class="required">必須</span>
              </th>
              <td class="form__input">
                <textarea
                  name="お問い合わせ内容"
                  cols="50"
                  rows="5"
                  required
                  aria-labelledby="message"></textarea>
              </td>
            </tr>
          </table>
          <p class="form__privacy-link">
            <a href="./privacy.php" target="_blank">プライバシーポリシーを確認する</a>
          </p>
          <div class="form__privacy">
            <input
              id="privacy"
              class="form__privacy-checkbox"
              type="checkbox"
              name="プライバシー"
              required />
            <label class="form__privacy-text" for="privacy">プライバシーポリシーに同意する
            </label>
          </div>
          <div class="form__button">
            <input
              type="submit"
              class="c-btn c-btn_submit"
              value="送信"
              aria-label="送信ボタン" />
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include 'component/footer.php'; ?>