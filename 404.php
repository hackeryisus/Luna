<?php get_header(); ?>
<div class="container">
	<div class="row enigma_blog_wrapper">
		<div class="col-md-12 hc_404_error_section">
			<div class="error_404">
				<h2><?php _e('404','weblizar'); ?></h2>
				<h4>Whoops... No encontramos tu pagina !!!</h4>
				<p>Lo sentimos, pero tu pagina no aparece.</p>
				<p><a href="<?php echo home_url( '/' ); ?>"><button class="enigma_send_button" type="submit"><?php _e('Regresar al inicio','weblizar'); ?></button></a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
