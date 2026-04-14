<?php 
$blend_title = get_field('blend_title');
$blend_description = get_field('blend_description');
$blend_cards = get_field('blend_cards');
$cards_count = is_array($blend_cards) ? count($blend_cards) : 0;
?>


<?php if( $blend_cards ): ?>
<section class="new-blend section" id="blends" >
  <div class="container new-blend__container">
    <div class="new-blend__content ">
      <?php get_template_part('template-parts/components/title', null, [
      'title' => 'Enjoy a new blend of coffee style',
      'className' => 'title--dark title--center'
  ]); ?>

      <?php get_template_part('template-parts/components/text', null, [
          'text' => 'Explore all flavours of coffee with us. There is always a new cup worth experiencing',
          'className' => 'text--gray text--center new-blend__text'
      ]); ?>      

    </div>  <!-- end new-blend__content -->

            <div class="blend-cards-wrapper" data-total-cards="<?php echo esc_attr($cards_count); ?>">
                <div class="blend-grid" id="blend-grid">
                    <?php 
                    $card_index = 0;
                    foreach( $blend_cards as $card ): 
                        $image_id = $card['blend_card-image'];
                        $image_url = wp_get_attachment_url( intval($image_id) );
                        $title = $card['blend_card-title']; 
                        $description = $card['blend_card-description']; 
                        $price = $card['blend_card-price'];
                        
                        // Добавляем класс hidden для карточек после 4-й
                        $hidden_class = $card_index >= 4 ? 'blend-card--hidden' : '';
                    ?>
                        <div class="blend-card <?php echo esc_attr($hidden_class); ?>" data-card-index="<?php echo esc_attr($card_index); ?>">
                            <div class="blend-card__image">
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $title ); ?>">
                            </div>
                            <div class="blend-card__content">
                                <h3 class="blend-card__title"><?php echo esc_html( $title ); ?></h3>
                                <p class="blend-card__description"><?php echo esc_html( $description ); ?></p>
                                <?php if( $price ): ?>
                                    <span class="blend-card__price">$<?php echo number_format( (float)$price, 2 ); ?></span>
                                <?php endif; ?>
                                <?php Button::render([
                                    'text' => 'Order Now', 
                                    'className' => 'blend-card__button', 
                                    'onClick' => 'console.log("blend")'
                                ]); ?>
 
                            </div>
                        </div>
                    <?php 
                        $card_index++;
                    endforeach; 
                    ?>
                </div>
                
                <?php if( $cards_count > 4 ): ?>
                    <div class="blend-load-more">
                    <?php Button::render([
                        'id'=> "loadMoreBtn",
                        'text' => 'Load more', 
                        'className' => 'blend-load-more__btn', 
                        'onClick' => 'console.log("blend")'
                    ]); ?>                    
                    </div>
                <?php endif; ?>         
            
        </div> 

  </div>  <!-- end container -->
</section>

<?php endif; ?>