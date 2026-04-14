/**
 * Load More функциональность для карточек
 */
document.addEventListener('DOMContentLoaded', function() {
  const loadMoreBtn = document.getElementById('loadMoreBtn');
  
  if (!loadMoreBtn) return;
  
  const grid = document.getElementById('blend-grid');
  const wrapper = document.querySelector('.blend-cards-wrapper');
  const totalCards = parseInt(wrapper?.dataset.totalCards || '0');
  
  let visibleCount = 4;      // Сколько карточек показываем сейчас
  const batchSize = 4;       // Сколько подгружаем за раз
  
  // Получаем все карточки
  const allCards = Array.from(document.querySelectorAll('.blend-card'));
  
  /**
   * Обновляет видимость карточек
   */
  function updateVisibleCards() {
      // Показываем первые visibleCount карточек
      allCards.forEach((card, index) => {
          if (index < visibleCount) {
              card.classList.remove('blend-card--hidden');
              card.classList.add('blend-card--visible');
          } else {
              card.classList.add('blend-card--hidden');
              card.classList.remove('blend-card--visible');
          }
      });
      
      // Обновляем состояние кнопки
      if (visibleCount >= totalCards) {
          loadMoreBtn.style.display = 'none';
      } else {
          loadMoreBtn.style.display = 'inline-block';
      }
  }
  
  /**
   * Загружает следующую партию карточек
   */
  function loadMoreCards() {
      const newVisibleCount = Math.min(visibleCount + batchSize, totalCards);
      
      // Показываем новые карточки с анимацией
      for (let i = visibleCount; i < newVisibleCount; i++) {
          const card = allCards[i];
          if (card) {
              card.classList.remove('blend-card--hidden');
              card.classList.add('blend-card--visible');
          }
      }
      
      visibleCount = newVisibleCount;
      
      // Если показаны все карточки - скрываем кнопку
      if (visibleCount >= totalCards) {
          loadMoreBtn.style.display = 'none';
          
          // Опционально: меняем текст кнопки
          if (loadMoreBtn) {
              loadMoreBtn.textContent = 'Все карточки загружены';
              setTimeout(() => {
                  if (loadMoreBtn) loadMoreBtn.style.display = 'none';
              }, 2000);
          }
      }
  }
  
  // Навешиваем обработчик на кнопку
  loadMoreBtn.addEventListener('click', loadMoreCards);
  
  // Инициализация: скрываем карточки после 4-й
  updateVisibleCards();
});