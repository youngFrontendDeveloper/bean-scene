<?php

$args = $args ?? [];
$text = $args['text'] ?? '';
$className = $args['className'] ?? '';  
?>

    <p class="text <?php echo esc_attr($className); ?>">
        <?php echo wp_kses_post($text); ?>
    </p>
