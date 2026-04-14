<?php
// inc/components/Button.php
class Button {
    public static function render($args = []) {
        $defaults = [
            'text' => 'Order Now',           
            'className' => '',
            'id' => '',
            'onClick' => null,
        ];
        $args = wp_parse_args($args, $defaults);
        
        // Формируем атрибут onclick
        $onclick_attr = '';
        if (!empty($args['onClick'])) {
            if (is_callable($args['onClick'])) {
                // Если передана PHP функция
                $js_code = call_user_func($args['onClick']);
                $onclick_attr = 'onclick="' . esc_attr($js_code) . '"';
            } else {
                // Если передана строка с JS кодом
                $onclick_attr = 'onclick="' . esc_attr($args['onClick']) . '"';
            }
        }
        
        ?>
        <button 
            id="<?php echo esc_attr($args['id']); ?>" 
            class="btn <?php echo esc_attr($args['className']); ?>" 
            <?php echo $onclick_attr; ?>
        >
            <?php echo esc_html($args['text']); ?>
        </button>
        <?php
    }
}