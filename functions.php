<?php

/**
* Fuctions and definitions
*
* @package WordPress
* @subpackage Mostra Solo
* @since 1.0
* @version 1.0
*/

// Requerendo os CPTs
require get_template_directory() . '/inc/cpts.php';

// Carregar scripts e folhas de estilo
function load_scripts(){
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), '4.4', 'all');
	wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,500,700', array(), null, 'all');
	wp_enqueue_style('fontawesome-all', get_template_directory_uri().'/assets/fonts/fontawesome-all.min.css', array(), null, 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/fonts/font-awesome.min.css', array(), null, 'all');
  wp_enqueue_style('fontawesome5', get_template_directory_uri().'/assets/fonts/fontawesome5-overrides.min.css', array(), null, 'all');
	wp_enqueue_style('nav', 'https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css', array(), null, 'all');  
  wp_enqueue_style('template', get_template_directory_uri().'/assets/css/styles.min.css','2.0','all');
  wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', null, '1.0', true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '4.4', true );
	wp_enqueue_script('nav2', 'https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js', null, '2', true );
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/script.min.js', null, '1.0', true );
}

// Dispara o Hook com os scripts e os estilos
add_action('wp_enqueue_scripts', 'load_scripts');

// Função de configuração do Tema
function quattri_config() {
	// Registrando nossos menus
	// register_nav_menus(
	// 	array(
	// 		'my_main_menu' => 'Main Menu',
	// 		'footer_menu' => 'Footer Menu'
	// 	)
	// );

	// Tamanhos Padrão de Imagens
	add_image_size('slider', 1920, 1080, true);
	add_image_size('thumb', 340, 200, true);

	// add_theme_support('post-formats',  array( 'video', 'image') ); // Adiciona metabox de formato de Post com as opcoes no array
	add_theme_support( 'post-thumbnails'); // Adiciona a metabox de imagem destacada no editor de Posts
	add_theme_support('title-tag'); // Carrega os dados Title do Site em todas as páginas

}

// Dispara o Hook com as configurações do Tema
add_action('after_setup_theme','quattri_config', 0 );

// Ordena o resultado da busca pelo campo personalizado MOSTRASOLO-NUMERO
add_action( 'pre_get_posts', function ( $q )
{
    if ( !is_admin() // Target only front end queries
         && $q->is_main_query() // Target the main query only
         && ($q->is_search() || $q->is_post_type_archive( 'data-base' ) )
    ) {
        $q->set( 'meta_key', 'mostrasolo-numero' );
        $q->set( 'order',    'ASC'         );
        $q->set( 'orderby',  'meta_value'  );
    }
});

// search all taxonomies, based on: http://projects.jesseheap.com/all-projects/wordpress-plugin-tag-search-in-wordpress-23

function atom_search_where($where){
  global $wpdb;
  if (is_search())
    $where .= "OR (t.name LIKE '%".get_search_query()."%' AND {$wpdb->posts}.post_status = 'publish')";
  return $where;
}

function atom_search_join($join){
  global $wpdb;
  if (is_search())
    $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
  return $join;
}

function atom_search_groupby($groupby){
  global $wpdb;

  // we need to group on post ID
  $groupby_id = "{$wpdb->posts}.ID";
  if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

  // groupby was empty, use ours
  if(!strlen(trim($groupby))) return $groupby_id;

  // wasn't empty, append ours
  return $groupby.", ".$groupby_id;
}

add_filter('posts_where','atom_search_where');
add_filter('posts_join', 'atom_search_join');
add_filter('posts_groupby', 'atom_search_groupby');