<div class="side info-pedido">

      <div class="busca">
        <form method="get" id="searchform"  action="<?php bloginfo('url'); ?>/">
              <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="pesquisar por ..." />
              <input type="submit" id="searchsubmit" value="" />
          </form>
      </div>

      <div class="filtros">
          <div class="filtro tipo-de-moveis">

            <h2>Móveis</h2>
            <?php 
              //list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

              $taxonomy     = 'tipo-de-movel';
              $orderby      = 'name'; 
              $show_count   = 0;      // 1 for yes, 0 for no
              $pad_counts   = 0;      // 1 for yes, 0 for no
              $hierarchical = 1;      // 1 for yes, 0 for no
              $title        = '';

              $args = array(
                'taxonomy'     => $taxonomy,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title
              );
              ?>
              <ul class="filtros-menu-moveis">
                <?php wp_list_categories( $args ); ?>
              </ul>
          </div>
          
          <h2>Marcas</h2>
          <div class="filtro marcas">
              <?php 
              //list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

              $taxonomy     = 'marcas';
              $orderby      = 'name'; 
              $show_count   = 0;      // 1 for yes, 0 for no
              $pad_counts   = 0;      // 1 for yes, 0 for no
              $hierarchical = 1;      // 1 for yes, 0 for no
              $title        = '';

              $args = array(
                'taxonomy'     => $taxonomy,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title
              );
              ?>
              <ul class="filtros-menu-moveis">
                <?php wp_list_categories( $args ); ?>
              </ul>
          </div>
      </div>
    </div>  

    <div class="fast-frete">
        <a href="">
          <h2>fast frete</h2>
          <p>a entrega mais rápida<br/>de goiânia e região</p>
          <p>recebeu seu produto em até 3 dias úteis</p>
        </a>
      </div>

    <div class="ligamos">
      <h2>ligue pra mim</h2>
      <p>deixe seu telefone, ligamos pra você</p>
      <form method="get">
        <input class="ddd" type="text" value"(__)" placeholder"(__)">
        <input class="tel" type="text" value"____-____" placeholder"____-____">
        <input class="submit-ligamos" type="submit" value"enviar" >
      </form>
    </div>