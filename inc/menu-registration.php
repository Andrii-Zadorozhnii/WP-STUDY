<?php
/* Add nav locations */
register_nav_menus([
    'header_menu' => __('Header', 'pointer'),
    'footer_menu' => __('Footer', 'pointer'),
]);


// Функция для удаления обёртки <div> вокруг меню
function remove_menu_wrapper($args)
{
    $args['container'] = false;
    return $args;
}
add_filter('wp_nav_menu_args', 'remove_menu_wrapper');
