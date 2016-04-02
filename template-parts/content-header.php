<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

$layout_type = ubs_one_get_theme_mod(UBS_ONE_LAYOUT_TYPE);
error_log("layout_type = $layout_type");

?>
<div class="container">
  <div class="row" id="primary">
<?php

switch($layout_type)
{
  case UBS_ONE_LAYOUT_TYPE_2COLLEFT :
  ?>
    <main id="content" class="col-sm-9 col-sm-push-3" role="main">
  <?php
  break;

  case UBS_ONE_LAYOUT_TYPE_2COLRIGHT :
  ?>
    <main id="content" class="col-sm-9" role="main">
  <?php
  break;

  case UBS_ONE_LAYOUT_TYPE_3COL :
  ?>
    <main id="content" class="col-sm-6 col-sm-push-3" role="main">
  <?php
  break;
}
?>
      