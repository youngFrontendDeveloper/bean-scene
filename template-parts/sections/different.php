<?php 
// Получаем данные из ACF
$different_title = get_field('different_title');
$different_top_text = get_field('different_top_text');
$different_bottom_text = get_field('different_bottom_text');
$different_slogan = get_field('different_slogan');

// Получаем карточки
$card_1 = get_field('different_card_1');
$card_2 = get_field('different_card_2');
$card_3 = get_field('different_card_3');
$card_4 = get_field('different_card_4');

$cards = [$card_1, $card_2, $card_3, $card_4];
?>

<section class="different section">
  <div class="container">

  <?php get_template_part('template-parts/components/title', null, [
      'title' => 'Why are we different?',
      'className' => 'title--dark'
  ]); ?>

      <?php get_template_part('template-parts/components/text', null, [
          'text' => 'We don’t just make coffee — we make your day!',
          'className' => 'text--gray text--center different__text-first'
      ]); ?>   
    
    <div class="different-grid">
            <?php foreach( $cards as $index => $card ): ?>
                <?php if( $card ): 
                    $image = $card['image'] ?? '';
                    $title = $card['title'] ?? '';
                    $text = $card['text'] ?? '';
                ?>
                    <div class="different-card">
                        <?php if( $image ): ?>
                            <div class="different-card__image">
                                <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <div class="different-card__content">
                            <?php if( $title ): ?>
                                <h3 class="different-card__title"><?php echo esc_html( $title ); ?></h3>
                            <?php endif; ?>
                            
                            <?php if( $text ): ?>
                                <p class="different-card__text"><?php echo $text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    <?php get_template_part('template-parts/components/text', null, [
          'text' => 'Great ideas start with great coffee, Lets help you achieve that Get started today.',
          'className' => 'text--gray text--center different__text-second'
      ]); ?> 

      <p class='different_slogan'>Get started today</p>
      <?php Button::render([
            'text' => 'Join Us', 
            'className' => 'different__button', 
            'onClick' => 'console.log("different")'
        ]); ?>
  </div>
</section>