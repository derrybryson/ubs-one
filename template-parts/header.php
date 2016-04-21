<?php
/**
 * Template part for displaying the content header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

$ubs_one_layout_type = ubs_one_get_theme_mod(UBS_ONE_LAYOUT_TYPE);
error_log("layout_type = $ubs_one_layout_type");

?>
<div class="container<?php echo $ubs_one_full_width ? "-fluid" : ""; ?>">
  <div class="row" id="primary">
<?php

switch($ubs_one_layout_type)
{
  case UBS_ONE_LAYOUT_TYPE_1COL :
  ?>
    <main id="content" class="col-sm-12" role="main">
  <?php
  break;
  
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
      