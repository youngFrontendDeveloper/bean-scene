<?php 
  $reviews_title = get_field('reviews_title');
  $reviews_text = get_field('reviews_text');

?>

<section class="section reviews" id='reviews'>
  <div class="container">
    <?php get_template_part('template-parts/components/title', null, [
        'title' => $reviews_title,
        'className' => 'title--dark title--center reviews__title'
    ]); ?>

    <?php get_template_part('template-parts/components/text', null, [
        'text' => $reviews_text,
        'className' => 'text--gray text--center reviews__text'
    ]); ?>   
  </div>
</section>