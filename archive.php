<?php get_header();?>

<div class="container_12">
  <ol class="breadcrumb grid_12">
    <?php breadcrumb_trail(); ?>
  </ol>
</div>
    
<div class="container_12">
  
  <div class="sidebar grid_3">
    <?php include (TEMPLATEPATH . '/sidebar-geral.php'); ?>
  </div>

	<div class="grid_9">
    <div class="titulo-wrap"><h2 class="titulo-secao seta-azul"><?php single_cat_title(''); ?></h2></div>
	   <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?> 
	   <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
          
            <article class="box box-produto-categoria">
              <a href="<?php the_permalink(); ?>">
                <div class="thumbnail-post"><?php the_post_thumbnail('box-produto-categoria'); ?></div>
                <h2><?php the_title(); ?></h2>
                <span class="ref">Ref: <?php the_field('ref'); ?></span>
                <span class="valor">
                  <?php if( get_field( "valor" ) ): ?>
                    <p>R$ <?php the_field( "valor" ); ?></p>
                  <?php else: ?>
                    <span class="menor-preco">Menor preço garantido</span>
                  <?php endif; ?>

                  <?php if( get_field( "valor_com_desconto" ) ): ?>
                    <p>R$ <?php the_field( "valor_com_desconto" ); ?></p>
                  <?php endif; ?>
                </span>
                </span>
                <span class="categoria">Em:<br/><small><?php echo get_post_type( $post_id ); ?></small></span>
              </a>
            </article>
          
      <?php endwhile; endif; ?> 
      <?php wp_pagenavi(); ?>
  </div>

</div>

<?php get_footer(); ?>