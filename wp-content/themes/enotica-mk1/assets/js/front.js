/* eslint-disable no-new */
import { killBubling } from './modules/helpers/generic';
import lzl from './modules/lazyload/native';
__webpack_public_path__ = `${window.ENO.mainDomain}/dist/`;

const settings_lzl = {
  data_src: 'original',
  elements_selector: '.lzl'
};

if ('IntersectionObserver' in window) {
  lzl.init(settings_lzl);
} else {
  import(/* webpackChunkName: "lzlVanilla" */ './modules/lazyload/vanilla').then((module) => {
    module.vanilla(settings_lzl);
  });
}

document.querySelector('#header-menu-action').addEventListener('click', (e) => {
  const div = killBubling(e.target, 'DIV');

  div.classList.toggle('active');
  document.querySelector('div.header__nav').classList.toggle('active');
});

document.querySelectorAll('a[href="#"]').forEach((element) => {
  element.addEventListener('click', (e) => {
    e.target.parentNode.classList.toggle('active');
  });
});