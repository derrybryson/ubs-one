<?php
/**
 * Adds a meta box to the post editing screen
 */
function ubs_one_custom_meta() 
{
  add_meta_box('ubs_one_post', __('UBS One Options', 'ubs_one'), 'ubs_one_meta_callback', array('post', 'page'), 'normal', 'high');
}
add_action('add_meta_boxes', 'ubs_one_custom_meta');

/**
 * Outputs the content of the meta box
 */
function ubs_one_meta_callback($post) 
{
  global $post;
  wp_nonce_field(basename( __FILE__ ), 'ubs_one_nonce');
  $meta = get_post_meta($post->ID);
  ?>
  <p>
    <label for="ubs_one_raw_content">
    <input type="checkbox" name="ubs_one_raw_content" id="ubs_one_raw_content" value="Y" <?php if(isset($meta[UBS_ONE_META_RAW_CONTENT])) checked($meta[UBS_ONE_META_RAW_CONTENT][0], 'Y' ); ?> />
          <?php _e('Display Raw Content', 'ubs_one' )?>
    </label>      
  </p>
  <?php
}

/**
 * Saves the custom meta input
 */
function ubs_one_meta_save($post_id) 
{
  // Checks save status
  $is_autosave = wp_is_post_autosave($post_id);
  $is_revision = wp_is_post_revision($post_id);
  $is_valid_nonce = (isset($_POST['ubs_one_nonce']) && wp_verify_nonce($_POST['ubs_one_nonce'], basename(__FILE__))) ? 'true' : 'false';

  // Exits script depending on save status
  if($is_autosave || $is_revision || !$is_valid_nonce) 
  {
    return;
  }

  update_post_meta($post_id, UBS_ONE_META_RAW_CONTENT, isset($_POST['ubs_one_raw_content']) ? $_POST['ubs_one_raw_content'] : "");
}
add_action('save_post', 'ubs_one_meta_save');

?>