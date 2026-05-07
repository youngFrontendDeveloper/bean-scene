class Modal {
  constructor(selector) {
    this.modal = document.querySelector(selector);

    if (!this.modal) {
      console.error('Modal NOT FOUND');
      return;
    }

    this.body = this.modal.querySelector('.modal__body');

    this.init();
  }

  init() {
    this.modal.addEventListener('click', (e) => {
      if (e.target.dataset.close !== undefined) {
        this.close();
      }
    });
  }

  open({ content = '', className = '' } = {}) {
    this.modal.className = 'modal';

    if (className) {
      this.modal.classList.add(className);
    }

    this.body.innerHTML = content;

    this.modal.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  }

  close() {
    if (!this.modal) return;

    this.modal.classList.remove('is-open');
    document.body.style.overflow = '';
  }
}

// делаем глобально доступным
window.appModal = null;

document.addEventListener('DOMContentLoaded', () => {
  window.appModal = new Modal('#app-modal');
});
