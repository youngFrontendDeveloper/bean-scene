<?php 
  $subscribe_title=get_field('subscribe_title');
  $subscribe_text =get_field('subscribe_text');
?>

<section class="subscribe" id='subscribe'>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subscribe.jpg" alt="Фон секции" class="subscribe_image"> 
  <div class="container subscribe__container">
    <?php get_template_part('template-parts/components/title', null, [
          'title' => $subscribe_title,
          'className' => 'title--white title--center subscribe__title'
      ]); ?>

      <?php get_template_part('template-parts/components/text', null, [
          'text' => $subscribe_text,
          'className' => 'text--white text--center subscribe__text'
      ]); ?> 

      <?php      
      echo do_shortcode( '[contact-form-7 id="43fdb2b" title="Subscribe" html_class="subscribe__form"]' ); 
      ?>
  </div>
</section>