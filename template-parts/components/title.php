<?php
$args = $args ?? [];
$title = $args['title'] ?? '';
$className = $args['className'] ?? '';  // только для цвета
?>

<h2 class="title <?php echo esc_attr($className); ?>">
    <?php echo wp_kses_post($title); ?>
</h2>
