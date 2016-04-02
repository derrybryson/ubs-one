<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */
error_log("post type = " . get_post_type() . ", post format = " . get_post_format());
?>
<div id="page-title-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="page-title">
    		<?php the_title('<h1>', '</h1>'); ?>
      </div>
    </div>
  </div>
</div>
