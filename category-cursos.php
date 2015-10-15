<div class="enigma_header_breadcrum_title">
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( __( '%s', 'weblizar' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
			</h1>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
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
