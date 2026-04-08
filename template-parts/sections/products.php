<section class="products">
  <div class="container">
    
    <div class="grid">
      <?php if (have_rows('products')): ?>
        <?php while (have_rows('products')): the_row(); ?>

          <div class="card">
            <img src="<?php the_sub_field('image'); ?>" alt="">
            <h3><?php the_sub_field('title'); ?></h3>
            <span>$<?php the_sub_field('price'); ?></span>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </div>
</section>