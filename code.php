<?php
// Añadir codigo en function.php
add_filter('woocommerce_states', 'add_custom_states_to_country');
add_filter('woocommerce_countries_allowed_country_states', 'add_custom_states_to_country');
function add_custom_states_to_country( $states ) {
    $states['AR'] = array(
        'ET' => __('El Talar', 'woocommerce'),
        'SF' => __('San Fernando', 'woocommerce'),
        'DT' => __('Don Torcuato', 'woocommerce'),
        'SI' => __('San Isidro', 'woocommerce'),
        'MZ' => __('Martínez', 'woocommerce'),
        'BO' => __('Boulogne', 'woocommerce'),
        'MN' => __('Munro', 'woocommerce'),
        'VB' => __('Villa Ballester', 'woocommerce'),
        'OM' => __('Ombú', 'woocommerce'),
        'SM' => __('San Martín', 'woocommerce'),
        'CH' => __('Churruca', 'woocommerce'),
        'EP' => __('El Palomar', 'woocommerce'),
        'CA' => __('Caseros', 'woocommerce'),
        'SL' => __('Santos Lugares', 'woocommerce'),
    );
    return $states;
}

?>
