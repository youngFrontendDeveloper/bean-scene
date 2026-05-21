function initCF7Form(form) {

  if (!form) return;

  // защита от повторной инициализации
  if (form.dataset.initialized === 'true') {
    return;
  }

  form.dataset.initialized = 'true';

  const button = form.querySelector('.form__button');


  // PHONE MASK

  const phoneInput = form.querySelector('input[type="tel"]');

  if (phoneInput) {

    phoneInput.addEventListener('input', () => {

      let v = phoneInput.value.replace(/\D/g, '');

      if (v.startsWith('7')) {
        v = v.substring(1);
      }

      let result = '+7';

      if (v.length > 0) {
        result += ' (' + v.substring(0, 3);
      }

      if (v.length >= 4) {
        result += ') ' + v.substring(3, 6);
      }

      if (v.length >= 7) {
        result += '-' + v.substring(6, 8);
      }

      if (v.length >= 9) {
        result += '-' + v.substring(8, 10);
      }

      phoneInput.value = result;

    });

  }


  // LOADING START

  form.addEventListener('submit', () => {

    button?.classList.add('is-loading');

  });


  // REMOVE LOADING

  const removeLoading = () => {

    button?.classList.remove('is-loading');

  };

  // success
  form.addEventListener('wpcf7mailsent', (event) => {

    removeLoading();

    if (!window.appModal) return;

    const message = event.detail.apiResponse.message;

    window.appModal.setContent(`
      <div class="form-message form-message--success">
        <p>${message}</p>
      </div>
    `);

  });

  // validation error
  form.addEventListener('wpcf7invalid', () => {

    removeLoading();

  });

  // mail failed
  form.addEventListener('wpcf7mailfailed', (event) => {

    removeLoading();

    if (!window.appModal) return;

    const message = event.detail.apiResponse.message;

    window.appModal.setContent(`
      <div class="form-message form-message--error">
        <p>${message}</p>
      </div>
    `);

  });

}



// GLOBAL
window.initCF7Form = initCF7Form;



// INIT EXISTING FORMS

document.addEventListener('DOMContentLoaded', () => {

  const forms = document.querySelectorAll('.wpcf7 form');

  forms.forEach(form => {
    initCF7Form(form);
  });

});

