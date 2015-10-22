<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3>Cursos Complementarios</h3>
			</div>
		</div>
	</div>
  <div class="row ">
  		<?php query_posts('cat=6&order=Asc'); ?>
  		<?php if ( have_posts() ) :
  			while ( have_posts() ) : the_post(); ?>
        <article class="col-sm-4">
					<div class="cursos">
						<h3><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
        </article>
         <!--get_template_part('post','cursos');-->
  		 <?php endwhile; ?>
  		 <!-- post navigation -->
  		 <?php else: ?>
  				<h4>No hemos encontrado resultados</h4>
  		 <!-- no posts found -->
  		 <?php endif; ?>
  </div>
</div>
<br>
