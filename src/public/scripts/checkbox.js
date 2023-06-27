// 言語
const modalLangs = Array.from(document.getElementsByClassName('modal_lang'));
modalLangs.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('modal_lang_active');
    const label = item.querySelector('label');
    label.classList.toggle('lang_active');
    const input = item.querySelector('input');
    if(input.checked){
      input.checked = false;
    }else{
      input.checked = true;
    }
  });
}
);

// 媒体
const modalMedia = Array.from(document.getElementsByClassName('modal_medium'));
modalMedia.forEach((item) => {
  item.addEventListener('click', () => {
    item.classList.toggle('modal_medium_active');
    const label = item.querySelector('label');
    label.classList.toggle('medium_active');
    const input = item.querySelector('input');
    if(input.checked){
      input.checked = false;
    }else{
      input.checked = true;
    }
  });
}
);