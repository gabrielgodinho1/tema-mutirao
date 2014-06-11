<?php get_header();?>


<!-- INSERIR NO ESTILO PRINCIPAL -->
<style type="text/css">
  .titulo404 {
    font-size: 32px;
    font-weight: bold;
  }

  span.subtitle {
    display: block;
    color: #666;
    clear: both;
    text-transform: uppercase;
    font-size: 13px;
  }
  .error-message {
    font-size: 13px;
  }
  .related404 {
    margin-top: 47px;
  }
</style>



<div class="container_12">
  <ol class="breadcrumb grid_12">
    <li>&nbsp;</li>
  </ol>
</div>
    
  <div class="container_12">
  	
	  <div class="sidebar grid_3">
		  <?php include (TEMPLATEPATH . '/sidebar-index.php'); ?>
	  </div>

  	<div class="conteudo grid_9">
      <div class="titulo-wrap">
        <h1 class="titulo404">Página não encontrada</h1>
      </div>
      <div class="error-message">
        <span class="subtitle">Erro 404</span>
        <p>A página que você procura não existe, ou não está mais disponível. <br>
        Utilize o menu para navegar, ou veja abaixo algumas de nossas ofertas.</p>
      </div>
      
      <div class="related404">
        <div class="titulo-wrap">
          <h2 class="titulo-secao seta-azul">Confira nossas ofertas</h2>
        </div>
        <?php query_posts('oferta=sim&posts_per_page=4&orderby=rand'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        <?php wp_reset_query(); ?>
      </div>

  	</div>

  </div>

<?php get_footer(); ?>