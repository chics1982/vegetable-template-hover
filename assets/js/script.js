"use strict";

/*----------------------------------------
  ハンバーガーメニュー
----------------------------------------*/
const hamburger = document.querySelector("#js-hamburger");
const nav = document.querySelector("#js-nav");
const focusTrap = document.querySelector("#js-focus-trap");
const body = document.querySelector("body");
const breakPoint = window.matchMedia("(min-width: 768px)");
const navBack = document.querySelector("#js-nav-back");

function openMenu() {
  hamburger.setAttribute("aria-expanded", "true");
  hamburger.setAttribute("aria-label", "メニューを閉じる");
  nav.removeAttribute("inert");
  nav.classList.add("is-open");
  navBack.classList.add("is-open");
  body.style.overflow = "hidden";
}
function closeMenu() {
  hamburger.setAttribute("aria-expanded", "false");
  hamburger.setAttribute("aria-label", "メニューを開く");
  nav.setAttribute("inert", "true");
  nav.classList.remove("is-open");
  navBack.classList.remove("is-open");
  body.style.overflow = "";
}
function pcMenu() {
  closeMenu();
  nav.removeAttribute("inert");
}

hamburger.addEventListener("click", function () {
  const expanded = this.getAttribute("aria-expanded");
  if (expanded === "false") {
    openMenu();
  } else {
    closeMenu();
  }
});

// ナビの背景をクリックしたらナビを閉じる
navBack.addEventListener("click", function () {
  closeMenu();
});

// フォーカストラップ制御
focusTrap.addEventListener("focus", function () {
  hamburger.focus();
});

// ブレイクポイントをまたいだ時の挙動
function checkBreakPoint() {
  if (breakPoint.matches) {
    pcMenu();
  } else {
    closeMenu();
  }
}
// ウィンドウのリサイズイベントにcheckBreakPointをバインド
window.addEventListener("resize", checkBreakPoint);

/* スムーススクロール
----------------------------------------*/
const header = document.querySelector("#js-header");
const footerNav = document.querySelector("#js-footer-nav");
const lineUp = document.querySelector("#js-line-up");

// スムーススクロール共通関数
function smoothScroll(e) {
  // クリックされた要素またはその親要素がa[href^="#"]に一致するか確認
  const linkElement = e.target.closest('a[href^="#"]');

  if (linkElement) {
    e.preventDefault();
    const headerHeight = header.offsetHeight;
    const href = linkElement.getAttribute("href");
    const target = document.querySelector(href === "#" ? "html" : href);

    if (target) {
      if (hamburger && window.getComputedStyle(hamburger).display !== "none") {
        closeMenu();
      }
      let position = target.offsetTop - headerHeight;
      position = Math.max(position, 0);
      window.scrollTo({ top: position, behavior: "smooth" });
    }
  }
}

// 各要素にスムーススクロールを適用
nav.addEventListener("click", smoothScroll);
footerNav.addEventListener("click", smoothScroll);
if (lineUp) {
  lineUp.addEventListener("click", smoothScroll);
}
// 他ページからセクションへの遷移時にヘッダーを考慮するにははhtmlにscroll-padding-topを設定する

/*----------------------------------------
  トップへ戻るボタン
----------------------------------------*/
const toTop = document.querySelector("#js-to-top");
if (toTop) {
  toTop.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}

/*----------------------------------------
  Splide
----------------------------------------*/
/* FVのスライダー */
const fvSlider = document.querySelector("#fv-slider");
if (fvSlider) {
  new Splide("#fv-slider", {
    autoplay: true,
    type: "loop",
    pauseOnHover: true,
    interval: 4000,
    speed: 1500,
    gap: "80px",
    arrowPath: "m15.5 0.932-4.3 4.38...",
  }).mount();
}

/* ふるさと納税のスライダー */
const whySlider = document.querySelector("#why-slider");
if (whySlider) {
  new Splide("#why-slider", {
    autoplay: true,
    type: "loop",
    pauseOnHover: false,
    pauseOnFocus: false,
    interval: 2500,
    speed: 1500,
    arrows: false,
    pagination: false,
    perPage: 5,
    perMove: 1,
    gap: "10px",
    drag: false,
    keyboard: false,
    wheel: false,
    clickable: false,
    breakpoints: {
      768: {
        perPage: 3,
      },
    },
  }).mount();
}

/* 会社概要のスライダー */
const aboutSlider = document.querySelector("#about-slider");
if (aboutSlider) {
  new Splide("#about-slider", {
    autoplay: true,
    type: "loop",
    pauseOnHover: false,
    pauseOnFocus: false,
    interval: 2500,
    speed: 1500,
    arrows: false,
    pagination: false,
    perPage: 5,
    perMove: 1,
    gap: "20px",
    drag: true,
    keyboard: false,
    wheel: true,
    clickable: false,
    breakpoints: {
      768: {
        perPage: 3,
      },
    },
  }).mount();
}
