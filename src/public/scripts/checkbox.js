// 言語
const lang = Array.from(document.getElementsByClassName('lang'));
const modalLang = Array.from(document.getElementsByClassName('modal_lang'));
lang.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('lang_active');
  });
}
);
modalLang.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('modal_lang_active');
  });
}
);