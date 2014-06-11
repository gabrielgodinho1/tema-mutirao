<!-- augusto -->

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 10 ]><html class="ie ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        
        <!-- ========== ESTILOS ============= -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css"/>

        <!-- ========== FACEBOOK ============= -->
         <meta property="og:url" content="<?php the_permalink() ?>"/>  
         <meta property="og:title" content="<?php single_post_title(''); ?>" />  
         <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
         <meta property="og:type" content="article" />  
         <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
        
        <!-- ========== FONTES ============= -->
         <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300italic,900,900italic|Open+Sans:400italic,400' rel='stylesheet' type='text/css'>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>


     <!--[if lt IE 6]>  
     <script type="text/javascript">window.location.href = "http://abetterbrowser.org/pt-br";</script>  
     <![endif]--> 

     <!--[if lt IE 7]>  
     <script type="text/javascript">window.location.href = "http://abetterbrowser.org/pt-br";</script>  
     <![endif]--> 
     
     <!--[if lte IE 8]>  
     <script type="text/javascript">window.location.href = "http://abetterbrowser.org/pt-br";</script>  
     <![endif]--> 

     <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->    

</head>

<body <?php body_class(); ?>>

<div class="wrap">
        
    <header class="header">
        <div class="menu-1">
            <div class="container_12">
                <div class="grid_3">
                    <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" /></a>
                </div>
                <div class="grid_9">
					
				<div class="menu-topo">
					<div class="info-topo">
						<span>(62) 3233-7007</span><span>Rua 105, Numero 31-A, Setor Campinas, Goiânia, Goiás</span>
					</div>
					<div class="menu-institucional">
						<ul>
							<li><a href="#">Sobre</a></li>
							<li><a href="#">Localização</a></li>
							<li><a href="#">Atendimento</a></li>
						</ul>
					</div>
				</div>

            	<nav class="navbar" role="navigation">
				  <div class="container-fluid">
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">móveis<b class="caret"></b></a>
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
				          <ul class="dropdown-menu menu-moveis">
				            <?php wp_list_categories( $args ); ?>
				          </ul>
				        </li>

				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown">eletro<b class="caret"></b></a>
				          <ul class="dropdown-menu">
							<li><a href="<?php bloginfo('url'); ?>/tipo-de-eletro/eletroeletronico">eletroeletrônicos</a></li>
							<li><a href="<?php bloginfo('url'); ?>/tipo-de-eletro/eletrodomestico">eletrodomésticos</a></li>
				          </ul>
				        </li>

				      <li><a href="#">utilidades</a></li>
				      <li><a href="#">cama, mesa & banho</a></li>
				      <li><a href="#">roupas</a></li>
				      <li><a class="active" href="#">ofertas</a></li>
						
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
            </div>
            </div>
        </div> <!-- /menu-1 -->

    </header>


     

        
    