<?php
add_filter('wpseo_breadcrumb_separator', 'custom_breadcrumb_separator');
function custom_breadcrumb_separator($separator) {
    return '<span class="custom-breadcrumb-separator"><svg width="16" height="2" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.269531 1H15.2695" stroke="#BDBDBD"/></svg></span>';
}
