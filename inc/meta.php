<?php

add_action('add_meta_boxes', 'metabox_add_box' );
function metabox_add_box(){
	add_meta_box( 'author_box', 'Author Box', 'dlbox_show_box', 'post', 'normal', 'high' );
}

function dlbox_show_box(){
	global $post;
	$meta = get_post_meta($post->ID, 'author_box', true);
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	echo '<tr>',
			'<td width="20%" style="padding:4px 0px!important;"><label for="author_box">Show Author Box</label></td>',
			'<td style="padding:4px 0px!important;">';
	echo '<input type="checkbox" name="author_box" id="author_box"', $meta ? 'checked="checked"' : '', ' />' , "";
	echo '</tr></table>';
}

/* ===	SAVE METABOX === */
add_action('save_post', 'mytheme_save_data');

function mytheme_save_data($post_id) {
    
    //verify nonce
    if ( !isset($_POST['mytheme_meta_box_nonce']) || !wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    
    //check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    //check permissions
    if ('page'  == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    $old = get_post_meta($post_id, 'author_box', true);
    $new = $_POST['author_box'];

    if ($new && $new != $old) {
    	update_post_meta($post_id, 'author_box', $new);
    }elseif ('' == $new && $old) {
    	delete_post_meta($post_id, 'author_box', $old);
    }
    
}

?>