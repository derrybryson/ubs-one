<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */
error_log("BBPRESS title post type = " . get_post_type() . ", post format = " . get_post_format());
$posttype = get_post_type();
if($posttype == "forum")
{
  if(get_the_title() == "Forums")
    $prefix = "";
  else
    $prefix = "Forum: ";
}
else if($posttype == "topic")
  $prefix = "Topic: ";
else
  $prefix = "";
?>
<div id="bbpress-title-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="bbpress-title">
    		<?php the_title("<h1>$prefix", '</h1>'); ?>
      </div>
    </div>
  </div>
</div>
