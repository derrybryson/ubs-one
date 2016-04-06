<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

$blog_title = ubs_one_get_theme_mod(UBS_ONE_BLOG_TITLE);

if(true || !is_front_page()):
?>
<div id="blog-title-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="blog-title">
        <h1>
          <?php echo $blog_title; ?>
        </h1>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

