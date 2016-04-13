<?php
/** 
 * Short codes
 */
function ubs_one_tag_attr($attr, $value, $use = false)
{
  if($use || $value != '')
    return " $attr=\"$value\"";
  return '';
}

function ubs_one_add_shortcode($tag, $func)
{
  global $ubs_one_shortcode_prefix;
  
  add_shortcode($ubs_one_shortcode_prefix . "_" . $tag, $func);
}

function ubs_one_generic_shortcode_handler($atts, $content = null, $tag = null)
{
  global $ubs_one_shortcode_prefix;
  
  if($tag)
  {
    $tag = substr($tag, strlen($ubs_one_shortcode_prefix) + 1);
    $a = shortcode_atts(array(
        'id' => '',
        'class' => '',
        'style' => '',
    ), $atts);
    
    $class = '';
    if($a['class'] != '')
      $class .= " class=\"" . $a['class'] . "\"";

    $style = '';
    if($a['style'] != '')
      $style = " style=\"" . $a['style'] . "\"";

    $id = '';
    if($a['id'] != '')
      $id = " id=\"" . $a['id'] . "\"";

    return "<$tag$class$style$id>" . do_shortcode($content) . "</$tag>";
  }
  return '';
}

function ubs_one_glyphicon_shortcode_handler($atts, $content = null) 
{
  $a = shortcode_atts(array(
      'icon' => 'asterisk',
      'class' => '',
      'id' => '',
      'style' => '',
  ), $atts);
	
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
	return "<span class=\"glyphicon glyphicon-{$a['icon']}$class\" aria-hidden=\"true\"$style$id></span>";
}
ubs_one_add_shortcode('glyphicon', 'ubs_one_glyphicon_shortcode_handler');

function ubs_one_fa_shortcode_handler($atts, $content = null) 
{
  $a = shortcode_atts(array(
      'icon' => 'asterisk',
      'class' => '',
      'style' => '',
      'id' => '',
  ), $atts);
	
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
	return "<i class=\"fa fa-{$a['icon']}$class\"$style$id></i>";
}
ubs_one_add_shortcode('fa', 'ubs_one_fa_shortcode_handler');

function ubs_one_container_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'class' => '',
      'id' => '',
      'style' => '',
      'fluid' => 0,
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  if(intval($a['fluid']))
    return "<div class=\"container-fluid$class\"$style$id>" . do_shortcode($content) . "</div>";
  else
    return "<div class=\"container$class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('container', 'ubs_one_container_shortcode_handler');

function ubs_one_row_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'class' => '',
      'id' => '',
      'style' => '',
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  return "<div class=\"row $class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('row', 'ubs_one_row_shortcode_handler');

function ubs_one_col_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'class' => '',
      'id' => '',
      'style' => '',
      'width' => 1,
      'offset' => 0,
      'push' => 0,
      'pull' => 0,
      'device' => 'sm',
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  $offset = intval($a['offset']);
  if($offset > 0)
    $offset = " col-{$a['device']}-offset-$offset";
  else
    $offset = '';

  $push = intval($a['push']);
  if($push > 0)
    $push = " col-{$a['device']}-push-$push";
  else
    $push = '';

  $pull = intval($a['pull']);
  if($pull > 0)
    $pull = " col-{$a['device']}-pull-$pull";
  else
    $pull = '';  
  
  return "<div class=\"col-{$a['device']}-" . intval($a['width']) . "$offset$push$pull$class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('col', 'ubs_one_col_shortcode_handler');

function ubs_one_jumbotron_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = '';
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  return "<div class=\"jumbotron$class\"$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('jumbotron', 'ubs_one_jumbotron_shortcode_handler');

ubs_one_add_shortcode('p', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('mark', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('del', 'ubs_one_generic_shortcode_handler');

ubs_one_add_shortcode('h1', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h2', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h3', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h4', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('h5', 'ubs_one_generic_shortcode_handler');

function ubs_one_table_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'striped' => 0,
      'bordered' => 0,
      'responsive' => 0,
      'hover' => 0,
      'condensed' => 0,
  ), $atts);
  
  $class = "table";
  if(intval($a['striped']))
    $class .= " table-striped";
  if(intval($a['bordered']))
    $class .= " table-bordered";
  if(intval($a['responsive']))
    $class .= " table-respsonive";
  if(intval($a['hover']))
    $class .= " table-hover";
  if(intval($a['condensed']))
    $class .= " table-condensed";
  if($a['class'] != '')
    $class .= " " . $a['class'];

  $style = '';
  if($a['style'] != '')
    $style = " style=\"" . $a['style'] . "\"";
  
  $id = '';
  if($a['id'] != '')
    $id = " id=\"" . $a['id'] . "\"";
  
  return "<table class=\"$class\"$style$id>" . do_shortcode($content) . "</table>";
}
ubs_one_add_shortcode('table', 'ubs_one_table_shortcode_handler');
ubs_one_add_shortcode('tr', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('th', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('td', 'ubs_one_generic_shortcode_handler');

function ubs_one_a_button_shortcode_handler($atts, $content = null, $tag = '')
{
  global $ubs_one_shortcode_prefix;
  
  $tag = substr($tag, strlen($ubs_one_shortcode_prefix) + 1);
  
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'href' => '',
      'onclick' => '',
      'data-toggle' => '',
      'data-content' => '',
      'data-trigger' => '',
      'data-placement' => '',
      'title' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  $href = ubs_one_tag_attr('href', $a['href']);
  $onclick = ubs_one_tag_attr('onclick', $a['onclick']);
  $data_toggle = ubs_one_tag_attr('data-toggle', $a['data-toggle']);
  $data_content = ubs_one_tag_attr('data-content', $a['data-content']);
  $data_trigger = ubs_one_tag_attr('data-trigger', $a['data-trigger']);
  $data_placement = ubs_one_tag_attr('data-placement', $a['data-placement']);
  $title = ubs_one_tag_attr('title', $a['title']);
  
  return "<$tag $class$style$id$href$onclick$data_toggle$data_content$data_trigger$data_placement$title>" . do_shortcode($content) . "</$tag>";
}
ubs_one_add_shortcode('a', 'ubs_one_a_button_shortcode_handler');
ubs_one_add_shortcode('button', 'ubs_one_a_button_shortcode_handler');

function ubs_one_panel_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel', 'ubs_one_panel_shortcode_handler');

function ubs_one_panel_heading_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-heading " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel_heading', 'ubs_one_panel_heading_shortcode_handler');

function ubs_one_panel_body_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-body " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel_body', 'ubs_one_panel_body_shortcode_handler');

function ubs_one_panel_footer_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-footer " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel_footer', 'ubs_one_panel_footer_shortcode_handler');

function ubs_one_well_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'large' => 0,
      'small' => 0,
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "well " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  if($a['large'])
    $class .= " well-lg";
  else if($a['small'])
    $class .= " well-sm";
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('well', 'ubs_one_well_shortcode_handler');

function ubs_one_section_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'bg-color' => '',
      'bg-image' => '',
      'bg-offset' => 0,
      'bg-fixed' => 0,
      'bg-repeat' => 'repeat-y',
      'bg-size' => '',
      'height' => 0,
  ), $atts);
  
  $class = ubs_one_tag_attr('class', $a['class']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  $style = "";
  if($a['bg-color'] != '')
    $style .= "background-color: " . $a['bg-color'] . "; ";
  if($a['bg-image'] != '')
  {
    $style .= "background-image: url('" . $a['bg-image'] . "'); ";
    $style .= sprintf("background-position: 0px %dpx; ", intval($a['bg-offset']));
    if($a['bg-repeat'] != '')
      $style .= "background-repeat: " . $a['bg-repeat'] . "; ";
    if($a['bg-fixed'])
    {
      $style .= "background-attachment: fixed; ";
      if($a['bg-size'] == '')
        $style .= "background-size: cover; ";
    }
    else
    {
      $style .= "background-attachment: scroll; ";
      if($a['bg-size'] == '')
        $style .= "background-size: cover; ";
    }
    if($a['bg-size'] != '')
      $style .= "background-size: " . $a['bg-size'] . "; ";
  }
  if(intval($a['height']))
  {
//    $style .= sprintf("height: %dpx; ", intval($a['height']));
    $style .= sprintf("min-height: %dpx; ", intval($a['height']));
  }
  if($a['style'] != '')
    $style .= $a['style'];
  
  return "<section $class$id style=\"$style\">" . do_shortcode($content) . "</section>";
}
ubs_one_add_shortcode('section', 'ubs_one_section_shortcode_handler');

$ubs_one_curnav = 0;
$ubs_one_navtabs = array();
function ubs_one_navtab_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curnav, $ubs_one_navtabs;
  
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'pills' => 0,
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "nav nav-" . ($a['pills'] ? "pills " : "tabs ") . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);

  $ubs_one_curnav++;
  $ubs_one_navtabs = array();
  $panels = do_shortcode($content);
  $ret = "<ul $class$style$id role=\"tablist\">";
  for($i = 0; $i < count($ubs_one_navtabs); $i++)
  {
    $tabid = "ubs_one_navtab{$ubs_one_curnav}_tab$i";
    $ret .= "<li role=\"presentation\"" . ($i == 0 ? " class=\"active\"" : "") . "><a href=\"#$tabid\" role=\"tab\" data-toggle=\"tab\">{$ubs_one_navtabs[$i]}</a></li>";
  }
  $ret .= "</ul>";
  return $ret . "<div class=\"tab-content\">" . $panels . "</div>";
}
ubs_one_add_shortcode('navtab', 'ubs_one_navtab_shortcode_handler');

function ubs_one_tabpanel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curnav, $ubs_one_navtabs;
  
  $a = shortcode_atts(array(
      'id' => '',
      'class' => '',
      'style' => '',
      'title' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "tab-pane " . (count($ubs_one_navtabs) == 0 ? "active " : "") . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);

  $id = "ubs_one_navtab{$ubs_one_curnav}_tab" . count($ubs_one_navtabs);
  $ubs_one_navtabs[] = $a['title'];
  return "<div role=\"tabpanel\" $class$style id=\"$id\">" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('tabpanel', 'ubs_one_tabpanel_shortcode_handler');

$ubs_one_curacc = 0;
$ubs_one_curaccpanel = 0;
function ubs_one_acc_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curacc, $ubs_one_curaccpanel;
  
  $a = shortcode_atts(array(
      'class' => '',
      'style' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel-group " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);

  $ubs_one_curacc++;
  $ubs_one_curaccpanel = 0;
  return "<div $class id=\"ubs_one_acc{$ubs_one_curacc}\" role=\"tablist\" aria-multiselectable=\"true\">" . do_shortcode($content) ."</div>";
}
ubs_one_add_shortcode('acc', 'ubs_one_acc_shortcode_handler');

function ubs_one_accpanel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curacc, $ubs_one_curaccpanel;
  
  $a = shortcode_atts(array(
      'class' => '',
      'style' => '',
      'title' => '',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "panel " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);

  $accid = "ubs_one_acc{$ubs_one_curacc}";
  $headerid = "ubs_one_acc{$ubs_one_curacc}_header" . $ubs_one_curaccpanel;
  $panelid = "ubs_one_acc{$ubs_one_curacc}_panel" . $ubs_one_curaccpanel;
  $ret = "<div $class>";
  $ret .= "<div class=\"panel-heading\" role=\"tab\" id=\"$headerid\">";
  $ret .= "<h4 class=\"panel-title\">";
  $ret .= "<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#$accid\" href=\"#$panelid\"" . ($ubs_one_curaccpanel ? "" : " aria-expanded=\"true\"") . "aria-controls=\"$panelid\">{$a['title']}</a>";
  $ret .= "</h4>";
  $ret .= "</div>";
  $ret .= "<div id=\"$panelid\" class=\"panel-collapse collapse" . ($ubs_one_curaccpanel ? "" : " in") . "\" role=\"tabpanel\" aria-labelledby=\"$headerid\">";
  $ret .= "<div class=\"panel-body\">" . do_shortcode($content) . "</div>";
  $ret .= "</div>";
  $ret .= "</div>";
  $ubs_one_curaccpanel++;
  return $ret;
}
ubs_one_add_shortcode('accpanel', 'ubs_one_accpanel_shortcode_handler');

$ubs_one_curcar = 0;
$ubs_one_curcarslide = 0;
function ubs_one_carousel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $a = shortcode_atts(array(
      'class' => '',
      'style' => '',
      'interval' => '5000',
      'pause' => 'hover',
      'wrap' => 'true',
      'keyboard' => 'false',
  ), $atts);
  
  $class = ubs_one_tag_attr('class', "carousel slide " . $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $interval = ubs_one_tag_attr('data-interval', $a['interval']);
  $pause = ubs_one_tag_attr('data-pause', $a['pause'], true);
  $wrap = ubs_one_tag_attr('data-wrap', $a['wrap']);
  $keyboard = ubs_one_tag_attr('data-keyboard', $a['keyboard']);
  
  $ubs_one_curcar++;
  $ubs_one_curcarslide = 0;
  $slides = do_shortcode($content);
  $carid = "ubs_one_carousel$ubs_one_curcar";

  $ret = "<div id=\"$carid\" $class data-ride=\"carousel\"$interval$pause$wrap$keyboard>";
  $ret .= "<ol class=\"carousel-indicators\">";
  for($i = 0; $i < $ubs_one_carslides; $i++)
    $ret .= "<li data-target=\"#$carid\" data-slide-to=\"$i\"" . ($i ? "" : " class=\"active\"") . "\"></li>";
  $ret .= "</ol>";

  $ret .= "<div class=\"carousel-inner\" role=\"listbox\">" . $slides . "</div>";

  $ret .= "<a class=\"left carousel-control\" href=\"#$carid\" role=\"button\" data-slide=\"prev\">";
  $ret .= "<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>";
  $ret .= "<span class=\"sr-only\">Previous</span>";
  $ret .= "</a>";
  $ret .= "<a class=\"right carousel-control\" href=\"#$carid\" role=\"button\" data-slide=\"next\">";
  $ret .= "<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>";
  $ret .= "<span class=\"sr-only\">Next</span>";
  $ret .= "</a>";
  $ret .= "</div>";
  return $ret;
}
ubs_one_add_shortcode('carousel', 'ubs_one_carousel_shortcode_handler');

function ubs_one_slide_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $a = shortcode_atts(array(
      'img' => '',
      'alt' => '',
      'href' => '',
  ), $atts);

  $carid = "ubs_one_carousel$ubs_one_curcar";
  
  $ret .= "<div class=\"item" . ($ubs_one_carslides ? "" : " active") . "\">";
  if($a['href'] != '')
    $ret .= "<a href=\"{$a['href']}\">";
  $ret .= "<center><img src=\"{$a['img']}\" alt=\"{$a['alt']}\"></center>";
  if($a['href'] != '')
    $ret .= "</a>";
  $ret .= "<div class=\"carousel-caption\">" . do_shortcode($content) . "</div>";
  $ret .= "</div>";

  $ubs_one_carslides++;
  return $ret;
}
ubs_one_add_shortcode('slide', 'ubs_one_slide_shortcode_handler');

function ubs_one_sidebar_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
      'id' => '',
  ), $atts);
  
  if(is_active_sidebar($a['id']))
  {
    ob_start();
    dynamic_sidebar($a['id']);
    $sidebar = ob_get_contents();
    ob_end_clean();
    return $sidebar;
  }
}
ubs_one_add_shortcode('sidebar', 'ubs_one_sidebar_shortcode_handler');

function ubs_one_blog_shortcode_handler($atts, $content = null)
{
  global $wp_query;
  
  $a = shortcode_atts(array(
      'id' => '',
  ), $atts);
  
  $temp_query = clone $wp_query;
//  $wp_query = new WP_Query('post_type=post&post_status=publish&' . (is_front_page() ? 'page=0' : 'paged=' . get_query_var('paged')));
  $paged = (get_query_var('page')) ? get_query_var('page') : 1;
  $query = "post_type=post&post_status=publish&paged=$paged";
  error_log("query = $query");
  $wp_query = new WP_Query($query);
//  query_posts();
  ob_start();
  get_template_part('template-parts/loop', 'blog');
  $ret = ob_get_contents();
  ob_end_clean();
  $wp_query = clone $temp_query;
  wp_reset_postdata();
  return $ret;
}
ubs_one_add_shortcode('blog', 'ubs_one_blog_shortcode_handler');


?>