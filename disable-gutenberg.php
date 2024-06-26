<?php
function disable_wp_editor()
{
    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
}

add_action('admin_head', 'disable_wp_editor');

add_filter('use_block_editor_for_post_type', '__return_false');