document.addEventListener('DOMContentLoaded', () => {
  const forms = document.querySelectorAll('.wpcf7-form');

  forms.forEach(form => {
    const button = form.querySelector('.subscribe__button');

    // LOADING
    form.addEventListener('submit', () => {
      button?.classList.add('is-loading');
    });

    // SUCCESS
    form.addEventListener('wpcf7mailsent', (event) => {
      button?.classList.remove('is-loading');

      if (!window.appModal) return;

      const message = event.detail.apiResponse.message;

      window.appModal.open({
        content: `<p>${message}</p>`,
        className: 'modal--success'
      });
    });

    // VALIDATION ERROR
    form.addEventListener('wpcf7invalid', (event) => {
      button?.classList.remove('is-loading');

      if (!window.appModal) return;

      const message = event.detail.apiResponse.message;

      window.appModal.open({
        content: `<p>${message}</p>`,
        className: 'modal--error'
      });
    });

    // SERVER ERROR
    form.addEventListener('wpcf7mailfailed', (event) => {
      button?.classList.remove('is-loading');

      if (!window.appModal) return;

      const message = event.detail.apiResponse.message;

      window.appModal.open({
        content: `<p>${message}</p>`,
        className: 'modal--error'
      });
    });
  });
});


