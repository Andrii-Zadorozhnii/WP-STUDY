<?php
function hide_editor_for_specific_pages()
{
    global $pagenow;

    if ($pagenow !== 'post.php') {
        return;
    }

    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
    $pages_to_hide_editor = array(8, 77, 199, 3);

    if (in_array($post_id, $pages_to_hide_editor)) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_head', 'hide_editor_for_specific_pages');