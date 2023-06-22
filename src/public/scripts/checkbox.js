// 言語
const langs = Array.from(document.getElementsByClassName('lang'));
const modalLangs = Array.from(document.getElementsByClassName('modal_lang'));
langs.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('lang_active');
  });
}
);
modalLangs.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('modal_lang_active');
  });
}
);

// 媒体
const media = Array.from(document.getElementsByClassName('medium'));
const modalMedia = Array.from(document.getElementsByClassName('modal_medium'));
media.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('medium_active');
  });
}
);
modalMedia.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('modal_medium_active');
  });
}
);