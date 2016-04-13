<?php
$excerpt = ubs_one_get_theme_mod(UBS_ONE_BLOG_EXCERPT);

if(have_posts())
{
  /* Start the Loop */
  while (have_posts())
  {
    the_post();
    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
  	the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');

    if($excerpt)
      get_template_part('template-parts/excerpt', get_post_format());
    else
      get_template_part('template-parts/content', get_post_format());
  }
  the_posts_navigation();
}
else
{
  get_template_part('template-parts/content', 'none');
}
?>