<?php
/** 
 * Short codes
 */

// basic attr defaults
$ubs_one_basic_defs = array(
  'class' => '',
  'id' => '',
  'style' => '',
);
function ubs_one_basic_defs()
{
  global $ubs_one_basic_defs;
  return $ubs_one_basic_defs;
}

// data attr defaults
$ubs_one_data_defs = array(
  'data-toggle' => '',
  'data-content' => '',
  'data-trigger' => '',
  'data-placement' => '',
);
function ubs_one_data_defs()
{
  global $ubs_one_data_defs;
  return $ubs_one_data_defs;
}

// bacground (bg) attr defaults
$ubs_one_bg_defs = array(
  'bg-color' => '',
  'bg-image' => '',
  'bg-offset' => 0,
  'bg-fixed' => 0,
  'bg-repeat' => 'repeat-y',
  'bg-size' => '',
  'bg-height' => 0,
);
function ubs_one_bg_defs()
{
  global $ubs_one_bg_defs;
  return $ubs_one_bg_defs;
}

function ubs_one_concat_value($base, $value)
{
  if($value != '')
  {
    if($base != '')
    {
      return $base . " " . $value;
    }
    else
    {
      return $value;
    }
  }
  return $base;
}

function ubs_one_tag_attr($attr, $value, $useattr = true)
{
  if($value != '')
    return $useattr ? " $attr=\"$value\"" : $value;
  return '';
}

function ubs_one_bg_style($a)
{
  $style = "";
  if($a['bg-color'] != '')
    $style = ubs_one_concat_value($style, "background-color: " . $a['bg-color'] . ";");
  if($a['bg-image'] != '')
  {
    $style = ubs_one_concat_value($style, "background-image: url('" . $a['bg-image'] . "');");
    $style = ubs_one_concat_value($style, sprintf("background-position: 0px %dpx;", intval($a['bg-offset'])));
    if($a['bg-repeat'] != '')
      $style = ubs_one_concat_value($style, "background-repeat: " . $a['bg-repeat'] . ";");
    if($a['bg-fixed'])
    {
      $style = ubs_one_concat_value($style, "background-attachment: fixed;");
      if($a['bg-size'] == '')
        $style = ubs_one_concat_value($style, "background-size: cover;");
    }
    else
    {
      $style = ubs_one_concat_value($style, "background-attachment: scroll;");
      if($a['bg-size'] == '')
        $style = ubs_one_concat_value($style, "background-size: cover;");
    }
    if($a['bg-size'] != '')
      $style = ubs_one_concat_value($style, "background-size: " . $a['bg-size'] . ";");
  }
  if(intval($a['bg-height']))
    $style = ubs_one_concat_value($style, sprintf("min-height: %dpx;", intval($a['bg-height'])));
  return $style;  
}

function ubs_one_data_attr($atts)
{
  $data = "";
  foreach($atts as $attr => $value)
  {
    if(ubs_one_startswith($attr, "data-") && $value != '')
      $data = ubs_one_concat_value($data, ubs_one_tag_attr($attr, $value));
  }
  return $data;
}

function ubs_one_add_shortcode($tag, $func)
{
  global $ubs_one_shortcode_prefix;
  
  add_shortcode($ubs_one_shortcode_prefix . "-" . $tag, $func);
}

function ubs_one_generic_shortcode_handler($atts, $content = null, $tag = null)
{
  global $ubs_one_shortcode_prefix;
  
  if($tag)
  {
    $tag = substr($tag, strlen($ubs_one_shortcode_prefix) + 1);
    $defs = ubs_one_basic_defs();
    $a = shortcode_atts($defs, $atts);
    
    $class = ubs_one_tag_attr('class', $a['class']);
    $style = ubs_one_tag_attr('style', $a['style']);
    $id = ubs_one_tag_attr('id', $a['id']);

    return "<$tag$class$style$id>" . do_shortcode($content) . "</$tag>";
  }
  return '';
}

function ubs_one_glyphicon_shortcode_handler($atts, $content = null) 
{
  $defs = ubs_one_basic_defs();
  $defs += array(
    'icon' => 'asterisk',
  );
  $a = shortcode_atts($defs, $atts);
	
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("glyphicon glyphicon-{$a['icon']}", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
	return "<span $class$style$id aria-hidden=\"true\"></span>";
}
ubs_one_add_shortcode('glyphicon', 'ubs_one_glyphicon_shortcode_handler');

function ubs_one_fa_shortcode_handler($atts, $content = null) 
{
  $defs = ubs_one_basic_defs();
  $defs += array(
    'icon' => 'asterisk',
  );
  $a = shortcode_atts($defs, $atts);
	
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("fa fa-{$a['icon']}", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
	return "<i $class$style$id></i>";
}
ubs_one_add_shortcode('fa', 'ubs_one_fa_shortcode_handler');

function ubs_one_container_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_basic_defs();
  $defs += array(
    'fluid' => -1,
  );
  $a = shortcode_atts($defs, $atts);
  
  if(intval($a['fluid']) == -1)
    $a['fluid'] = ubs_one_get_theme_mod(UBS_ONE_FULL_WIDTH) ? 1 : 0;
 
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("container" . (intval($a['fluid']) ? "-fluid" : ""), $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);

  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('container', 'ubs_one_container_shortcode_handler');

function ubs_one_row_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_basic_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("row", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);

  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('row', 'ubs_one_row_shortcode_handler');

function ubs_one_col_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_basic_defs();
  $defs += array(
    'width' => 1,
    'offset' => 0,
    'push' => 0,
    'pull' => 0,
    'device' => 'sm',
  );
  $a = shortcode_atts($defs, $atts);
  
  $extra_class = "";
  $offset = intval($a['offset']);
  if($offset > 0)
    $extra_class = ubs_one_concat_value($extra_class, "col-{$a['device']}-offset-$offset");

  $push = intval($a['push']);
  if($push > 0)
    $extra_class = ubs_one_concat_value($extra_class, "col-{$a['device']}-push-$push");

  $pull = intval($a['pull']);
  if($pull > 0)
    $extra_class = ubs_one_concat_value($extra_class, "col-{$a['device']}-pull-$pull");
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value(ubs_one_concat_value("col-{$a['device']}-" . intval($a['width']), $extra_class), $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('col', 'ubs_one_col_shortcode_handler');

function ubs_one_jumbotron_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_basic_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("jumbotron", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
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
  $defs = ubs_one_basic_defs();
  $defs += array(
      'striped' => 0,
      'bordered' => 0,
      'responsive' => 0,
      'hover' => 0,
      'condensed' => 0,
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = "table";
  if(intval($a['striped']))
    $class = ubs_one_concat_value($class, "table-striped");
  if(intval($a['bordered']))
    $class = ubs_one_concat_value($class, "table-bordered");
  if(intval($a['responsive']))
    $class = ubs_one_concat_value($class, "table-respsonive");
  if(intval($a['hover']))
    $class = ubs_one_concat_value($class, "table-hover");
  if(intval($a['condensed']))
    $class = ubs_one_concat_value($class, "table-condensed");
  $class = ubs_one_tag_attr('class', ubs_one_concat_value($class, $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<table $class$style$id>" . do_shortcode($content) . "</table>";
}
ubs_one_add_shortcode('table', 'ubs_one_table_shortcode_handler');
ubs_one_add_shortcode('tr', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('th', 'ubs_one_generic_shortcode_handler');
ubs_one_add_shortcode('td', 'ubs_one_generic_shortcode_handler');

function ubs_one_a_button_shortcode_handler($atts, $content = null, $tag = '')
{
  global $ubs_one_shortcode_prefix, $ubs_one_data_def;
  
  $tag = substr($tag, strlen($ubs_one_shortcode_prefix) + 1);

  $defs = ubs_one_basic_defs();
  $defs += ubs_one_data_defs();
  $defs += array(
    'href' => '',
    'onclick' => '',
    'title' => '',
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', $a['class']);
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  $href = ubs_one_tag_attr('href', $a['href']);
  $onclick = ubs_one_tag_attr('onclick', $a['onclick']);
  $data = ubs_one_data_attr($a);
  $title = ubs_one_tag_attr('title', $a['title']);
  
  return "<$tag $class$style$id$href$onclick$data_toggle$data_content$data_trigger$data_placement$title>" . do_shortcode($content) . "</$tag>";
}
ubs_one_add_shortcode('a', 'ubs_one_a_button_shortcode_handler');
ubs_one_add_shortcode('button', 'ubs_one_a_button_shortcode_handler');

function ubs_one_panel_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_data_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("panel", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel', 'ubs_one_panel_shortcode_handler');

function ubs_one_panel_heading_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_data_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("panel-heading", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel-heading', 'ubs_one_panel_heading_shortcode_handler');

function ubs_one_panel_body_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_data_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("panel-body", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel-body', 'ubs_one_panel_body_shortcode_handler');

function ubs_one_panel_footer_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_data_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("panel-footer", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $id = ubs_one_tag_attr('id', $a['id']);
  
  return "<div $class$style$id>" . do_shortcode($content) . "</div>";
}
ubs_one_add_shortcode('panel-footer', 'ubs_one_panel_footer_shortcode_handler');

function ubs_one_well_shortcode_handler($atts, $content = null)
{
  $defs = ubs_one_data_defs();
  $defs += array(
    'large' => 0,
    'small' => 0,
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("well", $a['class']));
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
  $defs = ubs_one_data_defs();
  $defs += ubs_one_bg_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', $a['class']);
  $id = ubs_one_tag_attr('id', $a['id']);
  $bg_style = ubs_one_bg_style($a);
  if(intval($a['height']))
    $bg_style = ubs_one_concat_value($bg_style, sprintf("min-height: %dpx; ", intval($a['height'])));
  $style = ubs_one_tag_attr('style', ubs_one_concat_value($bg_style, $a['style']));

  return "<section $class$id$style>" . do_shortcode($content) . "</section>";
}
ubs_one_add_shortcode('section', 'ubs_one_section_shortcode_handler');

$ubs_one_curnav = 0;
$ubs_one_navtabs = array();
function ubs_one_navtab_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curnav, $ubs_one_navtabs;
  
  $defs = ubs_one_data_defs();
  $defs += array(
    'pills' => 0,
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("nav nav-" . ($a['pills'] ? "pills" : "tabs"), $a['class']));
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
  
  $defs = ubs_one_data_defs();
  $defs += array(
    'title' => '',
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value(ubs_one_concat_value("tab-pane", count($ubs_one_navtabs) == 0 ? "active " : ""), $a['class']));
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
  
  $defs = ubs_one_data_defs();
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("panel-group", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);

  $ubs_one_curacc++;
  $ubs_one_curaccpanel = 0;
  return "<div $class id=\"ubs_one_acc{$ubs_one_curacc}\" role=\"tablist\" aria-multiselectable=\"true\">" . do_shortcode($content) ."</div>";
}
ubs_one_add_shortcode('acc', 'ubs_one_acc_shortcode_handler');

function ubs_one_acc_panel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curacc, $ubs_one_curaccpanel;
  
  $defs = ubs_one_data_defs();
  $defs += array(
    'title' => '',
  );
  
  $a = shortcode_atts($defs, $atts);
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("panel", $a['class']));
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
ubs_one_add_shortcode('acc-panel', 'ubs_one_acc_panel_shortcode_handler');

$ubs_one_curcar = 0;
$ubs_one_curcarslide = 0;
function ubs_one_carousel_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $defs = ubs_one_data_defs();
  $defs += array(
    'interval' => '5000',
    'pause' => 'hover',
    'wrap' => 'true',
    'keyboard' => 'false',
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("carousel slide", $a['class']));
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
ubs_one_add_shortcode('slider', 'ubs_one_carousel_shortcode_handler');

function ubs_one_slide_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $defs = array(
    'img' => '',
    'alt' => '',
    'href' => '',
  );
  $a = shortcode_atts($defs, $atts);

  $carid = "ubs_one_carousel$ubs_one_curcar";
  
  $ret .= "<div class=\"item" . ($ubs_one_carslides ? "" : " active") . "\">";
  if($a['href'] != '')
    $ret .= "<a href=\"{$a['href']}\">";
  $ret .= "<center><img src=\"{$a['img']}\" alt=\"{$a['alt']}\" width=\"100%\"></center>";
  if($a['href'] != '')
    $ret .= "</a>";
  $ret .= "<div class=\"carousel-caption\">" . do_shortcode($content) . "</div>";
  $ret .= "</div>";

  $ubs_one_carslides++;
  return $ret;
}
ubs_one_add_shortcode('slide', 'ubs_one_slide_shortcode_handler');

function ubs_one_blog_slider_shortcode_handler($atts, $content = null)
{
  global $ubs_one_curcar, $ubs_one_carslides;
  
  $defs = ubs_one_data_defs();
  $defs += array(
    'interval' => '5000',
    'pause' => 'hover',
    'wrap' => 'true',
    'keyboard' => 'false',
    'cat' => '',
    'count' => '1',
    'offset' => '0',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $a = shortcode_atts($defs, $atts);
  
  $class = ubs_one_tag_attr('class', ubs_one_concat_value("carousel slide", $a['class']));
  $style = ubs_one_tag_attr('style', $a['style']);
  $interval = ubs_one_tag_attr('data-interval', $a['interval']);
  $pause = ubs_one_tag_attr('data-pause', $a['pause'], true);
  $wrap = ubs_one_tag_attr('data-wrap', $a['wrap']);
  $keyboard = ubs_one_tag_attr('data-keyboard', $a['keyboard']);
  
  $ubs_one_curcar++;
  $ubs_one_curcarslide = 0;
  $carid = "ubs_one_carousel$ubs_one_curcar";

  $ret = "<div id=\"$carid\" $class data-ride=\"carousel\"$interval$pause$wrap$keyboard>";
  $ret .= "<ol class=\"carousel-indicators\">";
  for($i = 0; $i < $a['count']; $i++)
    $ret .= "<li data-target=\"#$carid\" data-slide-to=\"$i\"" . ($i ? "" : " class=\"active\"") . "\"></li>";
  $ret .= "</ol>";

  $ret .= "<div class=\"carousel-inner\" role=\"listbox\">";
  $args = array(
    'posts_per_page' => intval($a['count']),
    'offset' => intval($a['offset']),
    'order' => $a['order'],
    'orderby' => $a['orderby']
  );
  if($a['cat'] != '')
    $args['category'] = $a['cat'];
  error_log("args = " . print_r($args, true));
  $posts = get_posts($args);
  $firstpost = true;
  foreach($posts as $post)
  {
    setup_postdata($post);
    $ret .= "<div class=\"item" . ($firstpost ? " active" : "") . "\">";
    $ret .= "<a href=\"" . get_post_permalink($post->ID) . "\">";
    $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $ret .= "<center><img src=\"$feat_image\" alt=\"" . get_the_title($post->ID) . "\" width=\"100%\"></center>";
    $ret .= "</a>";
    $ret .= "<div class=\"carousel-caption\"><h1>" . get_the_title($post->ID) . "</h1></div>";
    $ret .= "</div>";
    $firstpost = false;
  }
  wp_reset_postdata();
  $ret .= "</div>";

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
ubs_one_add_shortcode('blog-slider', 'ubs_one_blog_slider_shortcode_handler');

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
  $paged = (get_query_var('page')) ? get_query_var('page') : 1;
  $query = "post_type=post&post_status=publish&paged=$paged";
  error_log("query = $query");
  $wp_query = new WP_Query($query);
  ob_start();
  get_template_part('template-parts/loop', 'blog');
  $ret = ob_get_contents();
  ob_end_clean();
  $wp_query = clone $temp_query;
  wp_reset_postdata();
  return $ret;
}
ubs_one_add_shortcode('blog', 'ubs_one_blog_shortcode_handler');

function ubs_one_blog_grid_shortcode_handler($atts, $content = null)
{
  $a = shortcode_atts(array(
    'id' => '',
    'columns' => 3,
    'cat' => '',
    'count' => 5,
    'post_per_page' => 5,
    'offset' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
    'height' => 600,
  ), $atts);
  
  $width = 100 / intval($a['columns']);
  
  $args = array(
    'posts_per_page' => intval($a['count']),
    'offset' => intval($a['offset']),
    'order' => $a['order'],
    'orderby' => $a['orderby']
  );
  if($a['cat'] != '')
    $args['category'] = $a['cat'];
  error_log("args = " . print_r($args, true));
  $posts = get_posts($args);
  $postnum = 0;
  global $post;
  $ret = "<div class=\"blog-grid\">";
  foreach($posts as $post)
  {
    $ret .= "<div class=\"blog-grid-post\" style=\"width: " . $width . "%; height: " . intval($a['height']) . "px;\">";
    setup_postdata($post);
    ob_start();
  	the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
    get_template_part('template-parts/excerpt', get_post_format());
    $ret .= ob_get_contents();
    ob_end_clean();
    $ret .= "</div>";
  }
  wp_reset_postdata();
  $ret .= "</div>";
  return $ret;
}
ubs_one_add_shortcode('blog-grid', 'ubs_one_blog_grid_shortcode_handler');

?>