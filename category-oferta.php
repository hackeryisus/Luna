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

<?php $wl_theme_options = weblizar_get_options(); ?>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3>Certificados </h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
		<div class="row isotope" id="isotope-service-container">
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['certification_'.$i.'_icons'] !='') { ?>
            <div class="enigma_service_iocn pull-left">
              <i class="<?php echo esc_attr($wl_theme_options['certification_'.$i.'_icons']); ?>"></i>
            </div><?php } ?>
					<div class="enigma_service_detail media-body">
						<?php if($wl_theme_options['certification_'.$i.'_title'] !='') { ?>
              <h3>
                <a href="<?php echo esc_url($wl_theme_options['certification_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['certification_'.$i.'_title']); ?></a>
              </h3><?php } ?>
						<?php if($wl_theme_options['certification_'.$i.'_text'] !='') { ?>
              <p><?php echo apply_filters('the_content', $wl_theme_options['certification_'.$i.'_text'], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="enigma_heading_title">
				<h3>Avalado por </h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
		<div class="row isotope" id="isotope-service-container">
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['avala_'.$i.'_icons'] !='') { ?>
            <div class="enigma_service_iocn pull-left">
              <i class="<?php echo esc_attr($wl_theme_options['avala_'.$i.'_icons']); ?>"></i>
            </div><?php } ?>
					<div class="enigma_service_detail media-body">
						<?php if($wl_theme_options['avala_'.$i.'_title'] !='') { ?>
              <h3>
                <a href="<?php echo esc_url($wl_theme_options['avala_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['avala_'.$i.'_title']); ?></a>
              </h3><?php } ?>
						<?php if($wl_theme_options['avala_'.$i.'_text'] !='') { ?>
              <p><?php echo apply_filters('the_content', $wl_theme_options['avala_'.$i.'_text'], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
