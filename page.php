<?php get_header();?>

<!-- INSERIR NO ESTILO PRINCIPAL -->
<style type="text/css">
  .alignleft { float: left; margin-right: 20px; }
  .alignright { float: right; margin-left: 20px; }
  .aligncenter { float: none; clear: both; margin: auto; }

  .wp-caption {
    display: block;
    padding: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
    background: #f0f0f0;
    border-bottom: #ccc 1px solid;
  }
    .wp-caption a { border: none; }
    .wp-caption img {
      width: 100%;
      margin-bottom: 10px;
    }
    .wp-caption p {
      font-size: 12px;
      font-style: italic;
      text-align: center;
    }
  
  .marcas {
    margin-top: 80px;
  }
  ul.lista-marcas {
    margin: 20px 0 0 0;
    overflow: hidden;
  }
    ul.lista-marcas li {
      display: block;
      float: left;
      width: 20%;
      height: 150px;
      margin-right: 5%;
    }
      ul.lista-marcas li:nth-child(4n+4) {
        margin-right: 0;
      }
      ul.lista-marcas li img {
        max-width: 100%;
        max-height: 100%;
      }

</style>

<div class="container_12">
  <ol class="breadcrumb grid_12">
    <?php breadcrumb_trail(); ?>
  </ol>
</div>
    
<div class="container_12">
    
    <div class="sidebar grid_3">
      <?php include (TEMPLATEPATH . '/sidebar-index.php'); ?>
    </div>

    <div class="conteudo grid_9">
      <div class="titulo-wrap">
        <h1 class="titulo-secao seta-azul"><?php the_title(); ?></h1>
      </div>
      
      <div class="entry">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>

          <?php if( have_rows('lista_de_marcas') ): ?>
          <div class="marcas">
            <div class="titulo-wrap">
              <h2 class="titulo-secao seta-azul">Marcas</h2>
            </div>
            <ul class="lista-marcas">
                <?php while ( have_rows('lista_de_marcas') ) : the_row(); ?>
                  <li><img src="<?php the_sub_field('logo'); ?>"></li>
                <?php endwhile; ?>
            </ul> <!-- /marcas -->
          </div>
          <?php endif; ?> <!-- /acf -->

        <?php endwhile; endif; ?> <!-- /loop -->
      </div> <!-- /conteudo -->

    </div> <!-- /conteudo -->

  </div>

<?php get_footer(); ?>