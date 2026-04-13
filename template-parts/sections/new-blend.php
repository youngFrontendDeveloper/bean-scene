<section class="new-blend" id="new-blend">
  <div class="container new-blend__container">
    <div class="new-blend__content ">
      <?php get_template_part('template-parts/components/title', null, [
      'title' => 'Enjoy a new blend of coffee style',
      'className' => 'title--dark'
  ]); ?>

      <?php get_template_part('template-parts/components/text', null, [
          'text' => 'Explore all flavours of coffee with us. There is always a new cup worth experiencing',
          'className' => 'text--gray text--center new-blend__text'
      ]); ?>      

    </div>  <!-- end new-blend__content -->

    <div class="new-blend__gallery">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-blend_1.jpg" alt="Кофе Капучино" class="new-blend__image">
    </div>

  </div>  <!-- end container -->
</section>
