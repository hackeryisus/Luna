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
<div class="row enigma_blog_wrapper">
	<div class="col-md-12">
		<?php query_posts('cat=5&order=Asc'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		 <article class="container__item">
		 <header>
				 <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
		 </header>
		 <figure>
				 <?php the_post_thumbnail('large'); ?>

		 </figure>
		 <?php the_excerpt(); ?>
		 <footer>
				 <strong><?php the_author(); ?></strong> - <small><?php the_date(); ?></small>
		 </footer>

		</article>
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
