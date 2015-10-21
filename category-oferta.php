<?php get_header(); ?>
<div class="container">
<div class="row enigma_blog_wrapper">
	<div class="col-md-12">
	<?php
	if ( have_posts()):
	while ( have_posts() ): the_post(); get_template_part('post','content');?>
	<?php endwhile;
	endif;
	weblizar_navigation(); ?>
	</div>
</div>
</div>

<?php get_template_part('cursos'); ?>
<?php get_template_part('certificadores'); ?>
<?php get_footer(); ?>
