<footer class="footer"> 
  <div class="container">
    <div class="grid footer__grid">
      <div class="footer__logo-wrap">
      <?php get_template_part('template-parts/components/logo', null, [
        'size' => 'lg',
        'className' => 'footer__logo'
    ]); ?>
      <p class="footer__text">Thank you for choosing our cafe. We are always happy to cook something delicious for you.</p>
      </div>
      <div class="footer__address-wrap">
        <p class="footer__address-title">Contact Us</p>
        <address>Address: 123 Main St, City, Country</address>
        <p>Phone: +1 (123) 456-7890</p>
        <p>Email: 2oN1u@example.com</p>
      </div>
    </div>
    <p class="footer__copyright">© <?php echo date('Y'); ?> Coffee</p>
  </div>
</footer>

<?php wp_footer(); ?>

<?php get_template_part('template-parts/components/modal'); ?>

</body>
</html>