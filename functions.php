<?php

//======================= GERENCIANDO O TAMANHO DOS RESUMOS AUTOMÁTICOS
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 30; }



//======================= MENU DINAMICO
add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}



//======================= GERENCIANDO O CORTE DAS IMAGENS
if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size( $name = 'box-produto', $width = 210, $height = 160, $crop = true );
    add_image_size( $name = 'slider', $width = 700, $height = 360, $crop = true );
    add_image_size( $name = 'box-produto-categoria', $width = 345, $height = 280, $crop = true );
    add_image_size( $name = 'marcas-pagina', $width = 200, $height = 200, $crop = false );
}

//======================= // CPT - Móveis
add_action( 'init', 'moveis_register' );
function moveis_register() {
	
	 $labels = array(
        'name' => _x('Móveis', 'post type general name'),
        'singular_name' => _x('post', 'post type singular name'),
        'add_new' => _x('Adicionar novo', 'post'),
        'add_new_item' => __('Adicionar novo post'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo post'),
        'view_item' => __('Visualizar'),
        'search_items' => __('Procurar'),
        'not_found' =>  __('N&atilde;o encontrado'),
        'not_found_in_trash' => __('N&atilde;o encontrado na lixeira'),
        'parent_item_colon' => ''
    );
	
	$args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','tags')
      );
	
	register_post_type( 'moveis', $args );
}


//======================= // CPT - Eletro
add_action( 'init', 'eletro_register' );
function eletro_register() {
  
   $labels = array(
        'name' => _x('Eletro', 'post type general name'),
        'singular_name' => _x('post', 'post type singular name'),
        'add_new' => _x('Adicionar novo', 'post'),
        'add_new_item' => __('Adicionar novo post'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo post'),
        'view_item' => __('Visualizar'),
        'search_items' => __('Procurar'),
        'not_found' =>  __('N&atilde;o encontrado'),
        'not_found_in_trash' => __('N&atilde;o encontrado na lixeira'),
        'parent_item_colon' => ''
    );
  
  $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','tags')
      );
  
  register_post_type( 'eletro', $args );
}

//======================= // TAXONOMIAS
register_taxonomy("tipo-de-eletro", array("eletro"), array(
    "hierarchical" => true, 
    "label" => "Tipo de Eletro", 
    "singular_label" => "Tipo de Eletro", 
    "rewrite" => true
));

register_taxonomy("tipo-de-movel", array("moveis"), array(
    "hierarchical" => true, 
    "label" => "Tipo de Móvel", 
    "singular_label" => "Tipo de Móvel", 
    "rewrite" => true
));

register_taxonomy("marcas", array('moveis', 'eletro'), array(
    "hierarchical" => true, 
    "label" => "Marcas", 
    "singular_label" => "Marcas", 
    "rewrite" => true
));

register_taxonomy("oferta", array('moveis', 'eletro'), array(
    "hierarchical" => true, 
    "label" => "Oferta", 
    "singular_label" => "Oferta", 
    "rewrite" => true
));



//======================= // CPT - Eletro
add_action( 'init', 'slider_register' );
function slider_register() {
  
   $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar novo', 'post'),
        'add_new_item' => __('Adicionar novo post'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo post'),
        'view_item' => __('Visualizar'),
        'search_items' => __('Procurar'),
        'not_found' =>  __('N&atilde;o encontrado'),
        'not_found_in_trash' => __('N&atilde;o encontrado na lixeira'),
        'parent_item_colon' => ''
    );
  
  $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail')
      );
  
  register_post_type( 'slider', $args );
}




//======================= // ESCONDENDO MENUS
function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  
}
add_action( 'admin_menu', 'remove_menus' );



//======================= // ADICIONANDO TAGS
add_action('init', 'add_tags');
 
function add_tags() {
    register_taxonomy_for_object_type('post_tag', 'moveis');
    register_taxonomy_for_object_type('post_tag', 'eletro');
}




?>