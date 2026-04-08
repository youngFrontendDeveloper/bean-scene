<section class="hero">
 <!-- <div class="hero-image-wrap">
  <img class="hero-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Чашка кофе">
<div class="hero-image-overlay"></div>   -->
<!-- </div> -->
  <div class="container">
  <div class='hero-content'>
    <h1 class='visually-hidden'>Закажите кофе с доставкой на дом</h1>
    <h2 class='hero-title'><?php the_field('hero_title'); ?></h2>
    <h3 class='hero-subtitle'><?php the_field('hero_subtitle'); ?></h3>
    <p class='hero-text'><?php the_field('hero_text'); ?></p>
    
    <?php Button::render([
    'text' => 'Order Now', 
    'className' => '', 
    'onClick' => 'console.log("click")'
]); ?>
    </div>
  </div>
</section>