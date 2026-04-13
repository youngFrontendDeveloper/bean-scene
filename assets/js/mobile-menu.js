// mobile-menu.js
document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.nav__toggle');
  const menu = document.querySelector('.nav__menu');
  const navLinks = document.querySelectorAll('.nav__link');
  const overlay = document.querySelector('.nav__overlay');

  function closeMenu() {
    toggle.classList.remove('active');
    menu.classList.remove('active');
    document.body.style.overflow = '';
  }

  function openMenu() {
    toggle.classList.add('active');
    menu.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  // Открыть/закрыть по кнопке
  if (toggle && menu) {
    toggle.addEventListener('click', function (e) {
      e.stopPropagation();
      if (menu.classList.contains('active')) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }

  // Закрыть по клику на оверлей
  if (overlay) {
    overlay.addEventListener('click', function (e) {
      e.stopPropagation();
      closeMenu();
    });
  }

  // Закрыть после выбора пункта меню
  if (navLinks.length) {
    navLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        // Если это якорь — отменяем переход
        const href = this.getAttribute('href');
        if (href === '#' || href === 'javascript:void(0)') {
          e.preventDefault();
        }
        closeMenu();
      });
    });
  }

  // Закрыть по Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && menu.classList.contains('active')) {
      closeMenu();
    }
  });
});