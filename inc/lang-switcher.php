<?php
function custom_pll_language_switcher() {
    if (function_exists('pll_the_languages')) {
        pll_the_languages(array(
            'dropdown' => 0, // Display as a list, not a dropdown
            'show_flags' => 0, // Don't show flags
            'show_names' => 1, // Show language names
            'hide_if_empty' => 0, // Show even if no translations exist
            'display_names_as' => 'slug' // Display language code (e.g., 'EN', 'FR')
        ));
    }
}
add_shortcode('custom_language_switcher', 'custom_pll_language_switcher');

?>