<div class="side info-pedido">
  		<div class="telefone">
	    	<a href="">
	    		<h2>fale conosco</h2>
	    		<span class="numero-tel"><small>(62)</small> <?php the_field('telefone', 'option'); ?></span>
	    	</a>
	    </div>

	  	<div class="busca">
	  		<form method="get" id="searchform"  action="<?php bloginfo('url'); ?>/">
	            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="pesquisar" />
	            <input type="submit" id="searchsubmit" value="" />
	        </form>
	  	</div>

	  	<div class="fast-frete">
	    	<a href="">
	    		<h2>fast frete</h2>
	    		<p>a entrega mais rápida<br/>de goiânia e região</p>
	    		<p>recebeu seu produto em até 3 dias úteis</p>
	    	</a>
	    </div>

		<div class="chat">
	    	<a href="">
	    		<h2>chat</h2>
	    		<p>segunda a sexta<br/>das 8h às 18:00</p>
	    	</a>
	    </div>
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
    
    <div class="side tags">
    	<h2>Tags</h2>
	    	<?php
				$tags = get_tags();
				$html = '<div class="post_tags">';
				foreach ( $tags as $tag ) {
					$tag_link = get_tag_link( $tag->term_id );
							
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
					$html .= "{$tag->name}</a>";
				}
				$html .= '</div>';
				echo $html;
			?>
    </div>

    <div class="side sob-medida">
    	<a href="">
    		<h2>sob medida</h2>
    		<p>projetos sobre medida<br/>para sua casa</p>
    	</a>
    </div>