<?php 
  $order_title = get_field('order_title');
  $order_text = get_field('order_text');

?>

<section class="order" id='order'>

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/order.jpg" alt="Фон секции" class="order-image">

  <div class="container">   

    <div class="order__content">
      <?php get_template_part('template-parts/components/title', null, [
        'title' => $order_title,
        'className' => 'title--white order__title'
      ]); ?>

      <?php get_template_part('template-parts/components/text', null, [
          'text' => $order_text,
          'className' => 'text--white order__text'
      ]); ?>   

        <?php Button::render([
            'text' => 'Order Now', 
            'className' => 'order__button', 
            'onClick' => 'console.log("order")'
        ]); ?>
    </div>
  </div>
  </section>