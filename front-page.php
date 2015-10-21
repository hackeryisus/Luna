<?php get_header();
$wl_theme_options = weblizar_get_options();
$wl_theme_options['_frontpage'];
if ($wl_theme_options['_frontpage']=="1" && is_front_page())
{	get_template_part('home','slideshow');
	get_template_part('mision');
	get_template_part('home','services');
	$wl_theme_options = weblizar_get_options();
	get_footer();
}
 else
{
	if(is_page()){
	get_template_part('page');
	}else{
		get_template_part('index');
	}
}	?>
