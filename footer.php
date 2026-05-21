<footer class="footer"> 
  <div class="container">
    <div class="grid footer__grid">
      <div class="footer__logo-wrap">
      <?php get_template_part('template-parts/components/logo', null, [
        'size' => 'lg',
        'className' => 'footer__logo'
    ]); ?>
      <p class="footer__text">Thank you for choosing our cafe. We are always happy to cook something delicious for you.</p>
      <div class="footer__social-wrap">
        <a href="https://t.me/Sauniya" target="_blank" class="footer__social-link link">
          <svg fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
          width="30px" height="30px" viewBox="0 0 24 24" xml:space="preserve">
          <style type="text/css">
            .st0{fill:none;}
          </style>
          <path d="M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2z M16.9,8.1l-1.7,8.2c-0.1,0.6-0.5,0.7-0.9,0.4l-2.6-2
            c-0.6,0.6-1.2,1.1-1.3,1.3c-0.2,0.1-0.3,0.3-0.5,0.3c-0.3,0-0.3-0.2-0.4-0.4l-0.9-3L5.9,12c-0.6-0.2-0.6-0.6,0.1-0.9l10.2-3.9
            C16.6,7.1,17.1,7.3,16.9,8.1z M14.5,9l-5.7,3.6l0.9,3l0.2-2l4.9-4.4C15.1,8.9,14.9,8.9,14.5,9z"/>
          <rect class="st0" width="24" height="24"/>
          </svg>
        </a>
        <a href="https://m.vk.com/nina_saushkina" target="_blank" class="footer__social-link link">
          <svg fill="currentColor" width="30px" height="30px" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.692 10.831s.849.838 1.058 1.227c.006.008.009.016.011.02.085.143.105.254.063.337-.07.138-.31.206-.392.212h-1.5c-.104 0-.322-.027-.586-.209-.203-.142-.403-.375-.598-.602-.291-.338-.543-.63-.797-.63a.305.305 0 0 0-.095.015c-.192.062-.438.336-.438 1.066 0 .228-.18.359-.307.359h-.687c-.234 0-1.453-.082-2.533-1.221-1.322-1.395-2.512-4.193-2.522-4.219-.075-.181.08-.278.249-.278h1.515c.202 0 .268.123.314.232.054.127.252.632.577 1.2.527.926.85 1.302 1.109 1.302a.3.3 0 0 0 .139-.036c.338-.188.275-1.393.26-1.643 0-.047-.001-.539-.174-.775-.124-.171-.335-.236-.463-.26a.55.55 0 0 1 .199-.169c.232-.116.65-.133 1.065-.133h.231c.45.006.566.035.729.076.33.079.337.292.308 1.021-.009.207-.018.441-.018.717 0 .60-.003.124-.003.192-.01.371-.022.792.24.965a.216.216 0 0 0 .114.033c.091 0 .365 0 1.107-1.273a9.718 9.718 0 0 0 .595-1.274c.015-.026.059-.106.111-.137a.266.266 0 0 1 .124-.029h1.781c.194 0 .327.029.352.104.044.119-.008.482-.821 1.583l-.363.479c-.737.966-.737 1.015.046 1.748z"/>
          </svg>

        </a>
        <a href="https://max.ru/u/f9LHodD0cOIC9PjJXdtsccBUVsy63sSj6qtbL7ZjbigHALgL20ds021EzcQ" target="_blank" class="footer__social-link footer__social-link--max" >
          <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 720 720"><path fill="#442808" d="M350.4,9.6C141.8,20.5,4.1,184.1,12.8,390.4c3.8,90.3,40.1,168,48.7,253.7,2.2,22.2-4.2,49.6,21.4,59.3,31.5,11.9,79.8-8.1,106.2-26.4,9-6.1,17.6-13.2,24.2-22,27.3,18.1,53.2,35.6,85.7,43.4,143.1,34.3,299.9-44.2,369.6-170.3C799.6,291.2,622.5-4.6,350.4,9.6h0ZM269.4,504c-11.3,8.8-22.2,20.8-34.7,27.7-18.1,9.7-23.7-.4-30.5-16.4-21.4-50.9-24-137.6-11.5-190.9,16.8-72.5,72.9-136.3,150-143.1,78-6.9,150.4,32.7,183.1,104.2,72.4,159.1-112.9,316.2-256.4,218.6h0Z"/>
        </a>
      </div>
      </div>
      <address class="footer__address-wrap">
        <p class="footer__address-title">Contact Us</p>
        <p class="footer__address-text">Address:&nbsp; <span class="footer__address-span"> 123 Main St, City, Country</span></p>
        <p class="footer__address-text">Phone:&nbsp; <a class="footer__address-span link" href="tel:+11234567890"> +1 (123) 456-7890</a></p>
        <p class="footer__address-text">Email:&nbsp; <a class="footer__address-span link" href="mailto:2oN1u@example.com"> 2oN1u@example.com</a></p>
      </address>
    </div>
  </div>

<!-- Форма заказа -->
<div id="order-form-template" style="display:none;">
<div class="order__form-wrapper">
  <?php echo do_shortcode('[contact-form-7 id="caeca9a" title="Order-form" html_class="form order__form"]'); ?>
  </div>
</div>
  

</footer>

<?php wp_footer(); ?>

<?php get_template_part('template-parts/components/modal'); ?>

</body>
</html>