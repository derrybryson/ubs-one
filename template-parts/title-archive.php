<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

?>
<div id="archive-title-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="archive-title">
        <h1>
          <?php echo get_the_archive_title(); ?>
        </h1>
        <p>
          <?php echo get_the_archive_description(); ?>
        </p>
      </div>
    </div>
  </div>
</div>

