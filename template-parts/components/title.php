<?php

$args = $args ?? [];
$title = $args['title'] ?? '';
$className = $args['className'] ?? '';  // только для цвета
?>

    <h2 class="title <?php echo esc_attr($className); ?>"><?php echo esc_html($title); ?></h2>
