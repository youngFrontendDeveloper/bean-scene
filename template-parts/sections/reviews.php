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
    

             <!-- Слайдер  -->

    <?php 
      $reviews = get_field('slider_reviews');
      if( $reviews ): ?>
          <div class="glide"> <!-- Основной контейнер слайдера -->
              <div class="glide__track" data-glide-el="track">
                  <ul class="glide__slides">
                      <?php foreach( $reviews as $review ): 
                          $avatar_url = wp_get_attachment_url( intval($review['avatar']) );
                          $text = $review['review_text'] ?? '';
                          $name = $review['name'] ?? '';
                          $position = $review['position'] ?? '';
                      ?>
                          <li class="glide__slide"> <!-- Один слайд -->
                              <div class="review-slide">
                                  <span class='review-slide__quote'>“</span>
                                  <p class='review-slide__text'><?php echo esc_html( $text ); ?></p>
                                  <h4 class='review-slide__name'><?php echo esc_html( $name ); ?></h4>
                                  <span class='review-slide__position'><?php echo esc_html( $position ); ?></span>

                                  <?php if( $avatar_url ): ?>
                                  <img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo esc_attr( $name ); ?>"  class='review-slide__avatar'>
                                  <?php else: ?>
                                    <img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class='review-slide__avatar'>
                                  <?php endif; ?>
                              </div>
                          </li>
                      <?php endforeach; ?>
                  </ul>
              </div>
              
              <!-- Навигационные стрелки -->
              <div class="glide__arrows" data-glide-el="controls">
              <?php 
                $arrow_left = get_template_directory_uri() . '/assets/images/arrow-left.svg';
                $arrow_right = get_template_directory_uri() . '/assets/images/arrow-right.svg';
              ?>
                  <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <img src="<?php echo esc_url($arrow_left); ?>" alt="Previous" class="arrow-icon">
                  </button>
                  <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <img src="<?php echo esc_url($arrow_right); ?>" alt="Previous" class="arrow-icon">
                  </button>
              </div>
              
          </div>
      <?php endif; ?>


     
  </div>
</section>