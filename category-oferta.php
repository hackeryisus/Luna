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

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3>Cursos</h3>
			</div>
		</div>
	</div>
</div>
<div class="container">
<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
		<?php query_posts('cat=5&order=Asc'); ?>
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); get_template_part('post','cursos'); ?>
		 <?php endwhile; ?>
		 <!-- post navigation -->
		 <?php else: ?>
				<h4>No hemos encontrado resultados</h4>
		 <!-- no posts found -->
		 <?php endif; ?>
	</div>
</div>
</div>
<?php get_template_part('certificadores'); ?>
<?php get_footer(); ?>
