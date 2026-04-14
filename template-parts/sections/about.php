<section class="about section" id="about">
  <div class="container about__container">
    <div class="about__content ">
      <?php get_template_part('template-parts/components/title', null, [
      'title' => 'Discover the best coffee',
      'className' => 'title--dark title--center'
  ]); ?>

      <?php get_template_part('template-parts/components/text', null, [
          'text' => 'Bean Scene is a coffee shop that provides you with quality coffee that helps boost your productivity and helps build your mood. Having a cup of coffee is good, but having a cup of real coffee is greater. There is no doubt that you will enjoy this coffee more than others you have ever tasted.',
          'className' => 'text--gray about__text'
      ]); ?>

      <?php Button::render([
    'text' => 'Learn More', 
    'className' => '', 
    'onClick' => 'console.log("Lern more")'
]); ?>

    </div>  <!-- end about__content -->

    <div class="about__image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" alt="Чашка настоящего кофе" class="about__image">
    </div>

  </div>  <!-- end container -->
</section>