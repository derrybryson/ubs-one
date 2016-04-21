<?php
/**
 * Template part for displaying the content footer.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UBS_One
 */

$ubs_one_layout_type = ubs_one_get_theme_mod(UBS_ONE_LAYOUT_TYPE);

?>
</main>
<?php
switch($ubs_one_layout_type)
{
  case UBS_ONE_LAYOUT_TYPE_1COL :
  ?>
  <?php
  break;

  case UBS_ONE_LAYOUT_TYPE_2COLLEFT :
  ?>
    <div class="col-sm-3 col-sm-pull-9 ">
      <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </aside><!-- #secondary -->
    </div><!-- sidebar -->
  <?php
  break;

  case UBS_ONE_LAYOUT_TYPE_2COLRIGHT :
  ?>
    <div class="col-sm-3">
      <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
      </aside><!-- #secondary -->
    </div><!-- sidebar -->
  <?php
  break;

  case UBS_ONE_LAYOUT_TYPE_3COL :
  ?>
    <div class="col-sm-3 col-sm-pull-6">
      <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </aside><!-- #secondary -->
    </div><!-- sidebar -->
    <div class="col-sm-3">
      <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
      </aside><!-- #secondary -->
    </div><!-- sidebar -->
  <?php
  break;
}

?>
  </div><!-- row #primary -->
</div><!-- container -->
