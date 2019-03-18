<?php
//insertion css js
add_action('wp_enqueue_scripts', 'insert_css');
function insert_css() {
	// On ajoute le css general du theme
	wp_enqueue_style('style', get_stylesheet_uri());
	//On  ajoute le jQuery au thème
	wp_register_script('jquery2','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js');
	wp_enqueue_script('jquery2');

	wp_register_script('scroll','https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');
	wp_enqueue_script('scroll');

	// style font
	wp_register_style('font','https://fonts.googleapis.com/css?family=Montserrat');
	wp_enqueue_style('font');

	// insertion de font awesome
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );

	// load any plugin from the WordPress.org plugins SVN repo

	wp_enqueue_script('https://cdn.jsdelivr.net/wp/plugins/project/tags/version/file');
}


add_action("wp_footer", "footer_text");
function footer_text()
{

}

add_theme_support('menus');
register_nav_menus(array(
	'menu-principal' => 'Navigation principale',
	'menu-secondaire' => 'Navigation secondaire',

));

// insertion de l'image a la une dans le theme

add_theme_support( 'post-thumbnails' );

function create_post_type() {
	register_post_type('proprietes',
		array(
			'label'                 => __('Propriétes'),
			'singular_label'        => __('Propriétes'),
			'add_new_item'          => __( 'Ajouter une Propriétes' ),
			'edit_item'             => __( 'Modifier une Propriétes' ),
			'new_item'              => __( 'Nouvelle Propriétes' ),
			'view_item'             => __( 'Voir la Propriétes' ),
			'search_items'          => __( 'Rechercher une Propriétes' ),
			'not_found'             =>  __( 'Aucune Propriétes trouvée' ),
			'not_found_in_trash'    => __( 'Aucune Propriétes trouvée' ),
			'public'                => true,
			'show_ui'               => true,
			'capability_type'       => 'post',
			'has_archive'           => true,
			'hierarchical'          => true,
			'menu_icon'             => 'dashicons-video-alt3',
			'taxonomies'            => array('villes'),
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'rewrite'               => array('slug' => 'proprietes', 'with_front' => true)
		)
	);

	register_post_type('agents',
		array(
			'label'                 => __('Agents'),
			'singular_label'        => __('Agents'),
			'add_new_item'          => __( 'Ajouter un Agents' ),
			'edit_item'             => __( 'Modifier un Agents' ),
			'new_item'              => __( 'Nouvelle Agents' ),
			'view_item'             => __( 'Voir la Agents' ),
			'search_items'          => __( 'Rechercher un Agents' ),
			'not_found'             =>  __( 'Aucune Agents trouvée' ),
			'not_found_in_trash'    => __( 'Aucune Agents trouvée' ),
			'public'                => true,
			'show_ui'               => true,
			'capability_type'       => 'post',
			'has_archive'           => true,
			'hierarchical'          => true,
			'menu_icon'             => 'dashicons-video-alt3',
			'taxonomies'            => array('types'),
			'supports'              => array( 'title', 'editor', 'thumbnail'),
			'rewrite'               => array('slug' => 'agents', 'with_front' => true)
		)
	);

}
add_action( 'init', 'create_post_type' );

function themes_taxonomy() {
	register_taxonomy(
		'villes',
		'proprietes',
		array(
			'label' => 'villes',
			'query_var' => true,
			'rewrite' => array(
				'slug' => 'villes',
				'with_front' => true
			),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'themes_taxonomy');


// insertion sidebar back office

if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'sidebar',
	                       'before_widget' => '<div>',
	                       'after_widget' => '</div>',
	                       'before_title' => '<h2>',
	                       'after_title' => '</h2>',
	));


