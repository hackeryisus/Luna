<?php get_header(); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
		<div class="col-md-12">
			<?php	if ( have_posts()):
				while ( have_posts() ): the_post();?>
					<article class="row enigma_blog_thumb_wrapper">
						<div class="col-sm-6">
								<?php the_post_thumbnail('large') ?>
								<a href="<?php the_permalink() ?>"><img src=" " alt="" /></a>
						</div>
						<div class="col-sm-6 ">
							<h3><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
					</article>
				<?php endwhile;
			endif;?>
		</div>
	</div>
</div>

<?php get_template_part('cursos'); ?>
<?php get_template_part('horarios'); ?>
<?php get_template_part('certificadores'); ?>
<?php get_footer(); ?>
