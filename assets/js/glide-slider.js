// Ждём полной загрузки страницы
window.addEventListener('load', function() {
  const sliderElement = document.querySelector('.glide');
  if (sliderElement) {
      new Glide('.glide', {
          type: 'carousel',
          startAt: 0,
          perView: 1,
          gap: 20,
          autoplay: false,
          animationDuration: 400,
          bound: true
      }).mount();
  }
});