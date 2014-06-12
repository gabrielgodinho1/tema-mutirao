<?php get_header();?>

<div class="container_12 conteudo-index">

  <div class="sidebar grid_3">
	<?php include (TEMPLATEPATH . '/sidebar-index.php'); ?>
  </div>

	<div class="grid_9">

		<div class="slider">
			<section class="slider">
		      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		 
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		        </ol>
		       
		        <!-- Slider Content (Wrapper for slides )-->
		        <div class="carousel-inner">
		            <?php query_posts('posts_per_page=3&post_type=slider'); ?>
		              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		                  <div class="item">
		                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slider'); ?></a>
		                    <div class="carousel-caption">
		                      <a href="<?php the_permalink(); ?>">
		                        <!-- <h2><?php the_title(); ?></h2> -->
		                      </a>
		                    </div>
		                  </div>
		              <?php endwhile; endif; ?>
		            <?php wp_reset_query(); ?>
		        </div>
		      </div>
		    </section>
		</div>

		<div class="ofertas-home">
			<div class="titulo-wrap"><h2 class="titulo-secao seta-amarela">Ofertas</h2></div>
			<?php query_posts("posts_per_page=6&oferta=sim"); ?>
			<?php while (have_posts()) : the_post(); ?>
		        <article class="box box-produto">
		          <a href="<?php the_permalink(); ?>">
		            <div class="thumbnail-post"><?php the_post_thumbnail('box-produto'); ?></div>
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
		            <span class="categoria">Em:<br/><small><?php echo get_query_var('taxonomy'); ?></small></span>
		          </a>
		        </article>
		    <?php endwhile; wp_reset_postdata(); ?>
		</div>

	    <div class="bertolini">
	    	<div class="titulo-wrap"><h2 class="titulo-secao seta-vermelha">Projetos Bertolini</h2></div>
			
	    </div>
	</div>   
</div>

<?php get_footer(); ?>