<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	<ul class="blog-date-left">
		<li class="enigma_post_date">
		<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
		<span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
		<?php else : ?>
		<span class="date"><?php echo get_the_date(); ?></span>
		<?php endif; ?>
		</li>
	</ul>

	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()):
		$img = array('class' => 'enigma_img_responsive'); ?>
		<div class="enigma_blog_thumb_wrapper_showcase">
			<div class="enigma_blog-img">
			<?php the_post_thumbnail('blog_2c_thumb',$img); ?>
			</div>
			<?php if (is_home()) : ?>
			<div class="enigma_blog_thumb_wrapper_showcase_overlay">
			<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
				<div class="enigma_blog_thumb_wrapper_showcase_icons">
					<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="container">
				<div class="row" >
					<div class=" col-lg-4 service">
					<h2><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
					<?php the_excerpt( __( 'Read More' , 'weblizar' ) );
					$defaults = array(
			              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','weblizar'  ),
			              'after'            => '</div></div>',
				          'link_before'      => '',
				          'link_after'       => '',
				          'next_or_number'   => 'number',
				          'separator'        => ' ',
				          'nextpagelink'     => __( 'Next page'  ,'weblizar' ),
				          'previouspagelink' => __( 'Previous page' ,'weblizar'),
				          'pagelink'         => '%',
				          'echo'             => 1
				          );
				          wp_link_pages( $defaults ); ?>
				</div>
			</div>
		</div>


	</div>
</div>
<div class="push-right">
<hr class="blog-sep header-sep">
</div>