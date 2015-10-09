<?php get_header(); ?>
<body class="eventos">

<?php rewind_posts(); ?>
<?php query_posts('cat=3'); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
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
             <strong><?php the_date(); ?></strong>
         </footer>
        </article>

       <?php endwhile; ?>
       <!-- post navigation -->
       <?php else: ?>
          <h4>No hemos encontrado resultados</h4>
       <!-- no posts found -->
       <?php endif; ?>
  </main>
</div>

</body>
<?php get_footer(); ?>
