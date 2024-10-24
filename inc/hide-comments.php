<?php
// Remove comments menu item
function remove_comments_menu_item()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comments_menu_item');

function redirect_comments_page()
{
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'redirect_comments_page');

function remove_comments_support()
{
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}
add_action('init', 'remove_comments_support', 100);


function remove_comments_from_dashboard()
{
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'remove_comments_from_dashboard');


function disable_comments_feed()
{
    if (is_comment_feed()) {
        wp_die(__('Comments are closed.', 'text-domain'));
    }
}
add_action('do_feed_rss2_comments', 'disable_comments_feed', 1);
add_action('do_feed_atom_comments', 'disable_comments_feed', 1);