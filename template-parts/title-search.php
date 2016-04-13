<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

?>
<div id="search-title-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="archive-title">
        <h1>
          <?php printf(esc_html__('Search Results for: %s', 'ubs-one'), '<span>' . get_search_query() . '</span>'); ?>
        </h1>
      </div>
    </div>
  </div>
</div>

