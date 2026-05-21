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

    // reset classes
    this.modal.className = 'modal';

    if (className) {
      this.modal.classList.add(className);
    }

    // insert content
    this.setContent(content);

    // open
    this.modal.classList.add('is-open');

    document.body.style.overflow = 'hidden';

  }


  setContent(content = '') {

    this.body.innerHTML = content;

    // reinit CF7
    if (window.wpcf7) {

      const forms = this.body.querySelectorAll('.wpcf7 form');

      forms.forEach(form => {

        // reinit contact form 7
        window.wpcf7.init(form);

        // init custom js
        if (window.initCF7Form) {
          window.initCF7Form(form);
        }

      });

    }

  }


  close() {

    this.modal.classList.remove('is-open');

    document.body.style.overflow = '';

  }

}


// GLOBAL

window.appModal = null;


// INIT MODAL

document.addEventListener('DOMContentLoaded', () => {

  window.appModal = new Modal('#app-modal');

});


// SAVE TEMPLATE

document.addEventListener('DOMContentLoaded', () => {

  const template = document.querySelector('#order-form-template');

  if (!template) {
    console.error('order-form-template NOT FOUND');
    return;
  }

  window.orderFormHTML = template.innerHTML;

});



// OPEN ORDER MODAL

document.addEventListener('DOMContentLoaded', () => {

  const buttons = document.querySelectorAll('.open-order-modal');

  buttons.forEach(button => {

    button.addEventListener('click', () => {

      if (!window.orderFormHTML) {
        console.error('orderFormHTML NOT FOUND');
        return;
      }

      window.appModal.open({
        content: window.orderFormHTML,
        className: 'modal--order'
      });

    });

  });

});
