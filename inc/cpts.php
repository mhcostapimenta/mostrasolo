<?php

	// 1. https://generatewp.com/
	// - Registrar os CTPs (https://generatewp.com/post-type/)
	// - Registrar no argumento supports quais meta boxex padrão irão aparecer
	// - Registrar as Taxonomias (https://generatewp.com/taxonomy/)
	// - Obs.: Cuidado com os slugs dos CTPs e suas respectivas Taxonomias
	// 2. Site para criação de Metabox: https://metabox.io/
	// - Instalar Plugin Meta Box
	// - Ir no Gerador online do Meta Box (link dentro do plugin)
	// - Criar os campos personalizados de cada um dos CTPs
	// - Copiar a parte do array de cada campo ou caso precise abrir uma nova metabox,
	// - Copiar também o array relativo a metabox nova
	// - Registrar todos os campos de uma única vez
	// - Validar os campos (https://docs.metabox.io/validation/)
  // - Incluir logo abaixo dos campos de cada metabox os arrays Validation e Messages
  

// Registra CPT TEMPORADA
function mostra_temporada() {

	$labels = array(
		'name'                  => _x( 'Temporadas', 'Post Type General Name', 'mostrasolo' ),
		'singular_name'         => _x( 'Temporada', 'Post Type Singular Name', 'mostrasolo' ),
		'menu_name'             => __( 'Temporadas', 'mostrasolo' ),
		'name_admin_bar'        => __( 'Temporada', 'mostrasolo' ),
		'archives'              => __( 'Arquivos do Item', 'mostrasolo' ),
		'attributes'            => __( 'Atributos do Item', 'mostrasolo' ),
		'parent_item_colon'     => __( 'Item Pai:', 'mostrasolo' ),
		'all_items'             => __( 'Todos os Items', 'mostrasolo' ),
		'add_new_item'          => __( 'Adicionar Novo Texto', 'mostrasolo' ),
		'add_new'               => __( 'Adicionar Nova', 'mostrasolo' ),
		'new_item'              => __( 'Novo Item', 'mostrasolo' ),
		'edit_item'             => __( 'Editar Item', 'mostrasolo' ),
		'update_item'           => __( 'Atualizar Item', 'mostrasolo' ),
		'view_item'             => __( 'Ver Item', 'mostrasolo' ),
		'view_items'            => __( 'Ver Itens', 'mostrasolo' ),
		'search_items'          => __( 'Procurar Item', 'mostrasolo' ),
		'not_found'             => __( 'Não encontrado', 'mostrasolo' ),
		'not_found_in_trash'    => __( 'Não encontrado na Lixeira', 'mostrasolo' ),
		'featured_image'        => __( 'Imagem Destacada', 'mostrasolo' ),
		'set_featured_image'    => __( 'Configurar imagem destacada', 'mostrasolo' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'mostrasolo' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'mostrasolo' ),
		'insert_into_item'      => __( 'Inserir no item', 'mostrasolo' ),
		'uploaded_to_this_item' => __( 'Enviado para este item', 'mostrasolo' ),
		'items_list'            => __( 'Lista do item', 'mostrasolo' ),
		'items_list_navigation' => __( 'Navegação de lista dos itens', 'mostrasolo' ),
		'filter_items_list'     => __( 'Filtrar lista de itens', 'mostrasolo' ),
	);
	$args = array(
		'label'                 => __( 'Temporada', 'mostrasolo' ),
		'description'           => __( 'Conteúdo das temporadas', 'mostrasolo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'temporada', $args );

}
add_action( 'init', 'mostra_temporada', 0 );


// Registra CPT ESPETACULO
function mostra_espetaculo() {

	$labels = array(
		'name'                  => _x( 'Espetaculos', 'Post Type General Name', 'mostrasolo' ),
		'singular_name'         => _x( 'Espetaculo', 'Post Type Singular Name', 'mostrasolo' ),
		'menu_name'             => __( 'Espetaculos', 'mostrasolo' ),
		'name_admin_bar'        => __( 'Espetaculo', 'mostrasolo' ),
		'archives'              => __( 'Arquivos do Item', 'mostrasolo' ),
		'attributes'            => __( 'Atributos do Item', 'mostrasolo' ),
		'parent_item_colon'     => __( 'Item Pai:', 'mostrasolo' ),
		'all_items'             => __( 'Todos os Items', 'mostrasolo' ),
		'add_new_item'          => __( 'Adicionar Novo Texto', 'mostrasolo' ),
		'add_new'               => __( 'Adicionar Novo', 'mostrasolo' ),
		'new_item'              => __( 'Novo Item', 'mostrasolo' ),
		'edit_item'             => __( 'Editar Item', 'mostrasolo' ),
		'update_item'           => __( 'Atualizar Item', 'mostrasolo' ),
		'view_item'             => __( 'Ver Item', 'mostrasolo' ),
		'view_items'            => __( 'Ver Itens', 'mostrasolo' ),
		'search_items'          => __( 'Procurar Item', 'mostrasolo' ),
		'not_found'             => __( 'Não encontrado', 'mostrasolo' ),
		'not_found_in_trash'    => __( 'Não encontrado na Lixeira', 'mostrasolo' ),
		'featured_image'        => __( 'Imagem Destacada', 'mostrasolo' ),
		'set_featured_image'    => __( 'Configurar imagem destacada', 'mostrasolo' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'mostrasolo' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'mostrasolo' ),
		'insert_into_item'      => __( 'Inserir no item', 'mostrasolo' ),
		'uploaded_to_this_item' => __( 'Enviado para este item', 'mostrasolo' ),
		'items_list'            => __( 'Lista do item', 'mostrasolo' ),
		'items_list_navigation' => __( 'Navegação de lista dos itens', 'mostrasolo' ),
		'filter_items_list'     => __( 'Filtrar lista de itens', 'mostrasolo' ),
	);
	$args = array(
		'label'                 => __( 'Espetaculo', 'mostrasolo' ),
		'description'           => __( 'Conteúdo dos espetáculos', 'mostrasolo' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'diretor', 'ator'  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'espetaculo', $args );

}
add_action( 'init', 'mostra_espetaculo', 0 );


// Registra Taxonomias para Espetáculos
// Taxonomia DIRETOR
function mostrasolo_diretores() {

	$labels = array(
		'name'                       => _x( 'Diretores', 'Áreas da Empresa', 'mostrasolo' ),
		'singular_name'              => _x( 'Diretor', 'Área da Empresa', 'mostrasolo' ),
		'menu_name'                  => __( 'Diretores', 'mostrasolo' ),
		'all_items'                  => __( 'Todos os Itens', 'mostrasolo' ),
		'parent_item'                => __( 'Item Pai', 'mostrasolo' ),
		'parent_item_colon'          => __( 'Item Pai:', 'mostrasolo' ),
		'new_item_name'              => __( 'Nome do Novo Item', 'mostrasolo' ),
		'add_new_item'               => __( 'Adicionar Novo Item', 'mostrasolo' ),
		'edit_item'                  => __( 'Editar Item', 'mostrasolo' ),
		'update_item'                => __( 'Atualizar Item', 'mostrasolo' ),
		'view_item'                  => __( 'Ver Item', 'mostrasolo' ),
		'separate_items_with_commas' => __( 'Separar itens com vírgulas', 'mostrasolo' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover itens', 'mostrasolo' ),
		'choose_from_most_used'      => __( 'Escolher entre as mais usados', 'mostrasolo' ),
		'popular_items'              => __( 'Itens Populares', 'mostrasolo' ),
		'search_items'               => __( 'Procurar Items', 'mostrasolo' ),
		'not_found'                  => __( 'Não encontrado', 'mostrasolo' ),
		'no_terms'                   => __( 'Não há itens', 'mostrasolo' ),
		'items_list'                 => __( 'Lista de Itens', 'mostrasolo' ),
		'items_list_navigation'      => __( 'Navegação de lista dos itens', 'mostrasolo' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'diretor', array( 'espetaculo' ), $args );

}
add_action( 'init', 'mostrasolo_diretores', 0 );

// Taxonomia ATOR
function mostrasolo_atores() {

	$labels = array(
		'name'                       => _x( 'Atores', 'Áreas da Empresa', 'mostrasolo' ),
		'singular_name'              => _x( 'Ator', 'Área da Empresa', 'mostrasolo' ),
		'menu_name'                  => __( 'Atores', 'mostrasolo' ),
		'all_items'                  => __( 'Todos os Itens', 'mostrasolo' ),
		'parent_item'                => __( 'Item Pai', 'mostrasolo' ),
		'parent_item_colon'          => __( 'Item Pai:', 'mostrasolo' ),
		'new_item_name'              => __( 'Nome do Novo Item', 'mostrasolo' ),
		'add_new_item'               => __( 'Adicionar Novo Item', 'mostrasolo' ),
		'edit_item'                  => __( 'Editar Item', 'mostrasolo' ),
		'update_item'                => __( 'Atualizar Item', 'mostrasolo' ),
		'view_item'                  => __( 'Ver Item', 'mostrasolo' ),
		'separate_items_with_commas' => __( 'Separar itens com vírgulas', 'mostrasolo' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover itens', 'mostrasolo' ),
		'choose_from_most_used'      => __( 'Escolher entre as mais usados', 'mostrasolo' ),
		'popular_items'              => __( 'Itens Populares', 'mostrasolo' ),
		'search_items'               => __( 'Procurar Items', 'mostrasolo' ),
		'not_found'                  => __( 'Não encontrado', 'mostrasolo' ),
		'no_terms'                   => __( 'Não há itens', 'mostrasolo' ),
		'items_list'                 => __( 'Lista de Itens', 'mostrasolo' ),
		'items_list_navigation'      => __( 'Navegação de lista dos itens', 'mostrasolo' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ator', array( 'espetaculo' ), $args );

}
add_action( 'init', 'mostrasolo_atores', 0 );


// Registra campos personalizados
function mostrasolo_get_meta_box( $meta_boxes ) {
	$prefix = 'mostrasolo-';

	// Meta boxes do CPT TEMPORADA
	$meta_boxes[] = array(
		'id' => 'inf_temporadas',
		'title' => esc_html__( 'Informações da temporada', 'mostrasolo' ),
		'post_types' => array( 'temporada' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'texto',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Texto síntese', 'mostrasolo' ),
				'options' => array(
					'textarea_rows' => 8,
					'media_buttons' => false,
					'teeny'         => true,
				),
			),
			array(
				'id' => $prefix . 'espetaculos',
				'type' => 'text',
				'name' => esc_html__( 'Espetáculos no ano', 'mostrasolo' ),
				'placeholder' => esc_html__( 'espetáculos', 'mostrasolo' ),
			),
			array(
				'id' => $prefix . 'apresentacoes',
				'type' => 'text',
				'name' => esc_html__( 'Apresentações no ano', 'mostrasolo' ),
				'placeholder' => esc_html__( 'apresentações', 'mostrasolo' ),
			),
			array(
				'id' => $prefix . 'publico',
				'type' => 'text',
				'name' => esc_html__( 'Público no ano', 'mostrasolo' ),
				'placeholder' => esc_html__( 'público', 'mostrasolo' ),
			),
		),

			// VALIDAÇÃO DOS CAMPOS
			'validation' => array(

				// Regras de validação
				'rules'  => array(
					'mostrasolo-texto' => array(
						'required'  => true,
					),
					'mostrasolo-espetaculos' => array(
						'required'  => true,
					),
					'mostrasolo-apresentacoes' => array(
						'required'  => true,
					),
					'mostrasolo-publico' => array(
						'required'  => true,
					),
				), 

				// Mensagens de erro da validação dos campos do Cliente
				'messages'  => array(
					'mostrasolo-texto' => array(
						'required'  => 'O texto síntese da temporada é obrigatório',
					),
					'mostrasolo-espetaculos' => array(
							'required' => 'O número de espetáculos no ano é obrigatório',
					),
					'mostrasolo-apresentacoes' => array(
							'required' => 'O número de apresentações no ano é obrigatório',
					),
					'mostrasolo-publico' => array(
						'required'  => 'A quantidade de público no ano é obrigatória',
					),
				),

			)
	);

	// Meta boxes do CPT ESPETACULO
	$meta_boxes[] = array(
		'id' => 'infosespetaculos',
		'title' => esc_html__( 'Informações sobre o espetáculo', 'mostrasolo' ),
		'post_types' => array( 'espetaculo' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'numero',
				'type' => 'text',
				'name' => esc_html__( 'Número do espetáculo', 'mostrasolo' ),
				'size' => 10,
				'placeholder' => esc_html__( 'numero', 'mostrasolo' ),
			),
			array(
				'id' => $prefix . 'data',
				'type' => 'date',
				'name' => esc_html__( 'Data do espetáculo', 'mostrasolo' ),
				'placeholder' => esc_html__( 'data', 'mostrasolo' ),
			),
			array(
				'id' => $prefix . 'urlVideo',
				'type' => 'text',
				'name' => esc_html__( 'URL do video', 'mostrasolo' ),
				'size' => 80,
				'placeholder' => esc_html__( 'endereço do video', 'mostrasolo' ),
			),
		),

			// Regras de validação dos campos do Cliente
			'validation' => array(
				'rules'  => array(
					'mostrasolo-numero' => array(
							'required'  => true,
					),
				), 
				'rules'  => array(
							'mostrasolo-data' => array(
									'required'  => true,
						),
				), 

			// Mensagens de erro da validação dos campos do Cliente
				'messages'  => array(
					'mostrasolo-numero' => array(
						'required'  => 'O número do espetáculo é obrigatório',
				),
					'mostrasolo-data' => array(
							'required'  => 'A data do espetáculo é obrigatória',
					),
				)

		)
);

return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'mostrasolo_get_meta_box' );