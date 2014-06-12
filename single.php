<?php get_header();?>

<div class="container_12">
  <ol class="breadcrumb grid_12">
    <?php breadcrumb_trail(); ?>
  </ol>
</div>

<div class="container_12 conteudo-index">

    <div class="sidebar grid_3">
  	<?php include (TEMPLATEPATH . '/sidebar-geral.php'); ?>
    </div>

	  <div class="grid_9">
   		  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          
          <h1><?php the_title(); ?></h1>

          

          <span class="categoria"><?php echo get_post_type( $post_id ); ?></span>

          <h3><?php the_title(); ?></h3>

          <span class="ref">Ref: <?php the_field('ref'); ?></span>

          <span class="valor-single valor">
            <?php if( get_field( "valor" ) ): ?>
              <p>R$ <?php the_field( "valor" ); ?></p>
            <?php else: ?>
              <span class="menor-preco">Menor preço garantido</span>
            <?php endif; ?>

            <?php if( get_field( "valor_com_desconto" ) ): ?>
              <p>R$ <?php the_field( "valor_com_desconto" ); ?></p>
            <?php endif; ?>
          </span>  

          <div class="descricao"><?php the_field('sobre_o_produto'); ?></div>

          <?php if( get_field( "video" ) ): ?>
            <div class="video-single">
            <h2>Vídeo</h2>
            <p><?php the_field('video'); ?></p>
          </div>
          <?php endif; ?>

          <?php if( get_field( "especificacoes_tecnicas" ) ): ?>
            <div class="especificacoes">
            <h2>Especificações Técnicas</h2>
            <p><?php the_field('especificacoes_tecnicas'); ?></p>
          </div>
          <?php endif; ?>
          

          <div id="galeria">
            <div id="gallery" class="ad-gallery">
              <div class="ad-image-wrapper">
              </div>
              <div class="ad-nav">
                <div class="ad-thumbs">
                  <?php $images = get_field('galeria_de_imagens');
                  if( $images ): ?>
                  <ul class="ad-thumb-list">
                      <?php foreach( $images as $image ): ?>
                        <li>
                         <a href="<?php echo $image['sizes']['slider']; ?>" title="<?php echo $image['title']; ?>">
                             <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                         </a>
                        </li>
                      <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; endif; ?>
    </div>

</div>

<?php get_footer(); ?>