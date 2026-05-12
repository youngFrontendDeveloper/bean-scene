<?php

$args = $args ?? [];
$size = $args['size'] ?? 'sm'; 
$className = $args['className'] ?? '';
$logo_text = get_theme_mod('logo_text', 'Bean Scene');
$logo_url = home_url('/');
$logo_classes = 'logo-wrap logo--' . $size;

if (!empty($className)) {
    $logo_classes .= ' ' . esc_attr($className);
}
?>

<div  class="<?php echo esc_attr($logo_classes); ?>">
    <a href="<?php echo esc_url($logo_url); ?>" class="logo link">        
        <?php echo esc_html($logo_text); ?>        
    </a>
</div>