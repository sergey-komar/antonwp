<?php
function portal_scripts() {
	wp_enqueue_style( 'portal-style', get_stylesheet_uri());
	wp_enqueue_style( 'portal-main', get_template_directory_uri() . '/assets/css/style.min.css', [], 1.0);

	wp_enqueue_script( 'wayup-svg-sprite', get_template_directory_uri() . '/assets/js/main.min.js', [], 1.0, false );
	
}
add_action( 'wp_enqueue_scripts', 'portal_scripts' );



add_action('after_setup_theme', 'portal_setup');
  function portal_setup(){

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');    
  }

  add_theme_support( 'post-thumbnails' );

 // Подключаем REDUX 
 require get_template_directory() . '/inc/options-panel.php';



// Регистрируем меню
 register_nav_menus(
    array(
        'menu-header' => esc_html__( 'Шапка', 'umra' ),
        'menu-footer' => esc_html__( 'Подвал', 'umra' ),
        'menu-footermobile' => esc_html__( 'Подвал два', 'umra' ),   
    )
);
 add_filter( 'nav_menu_css_class', 'avoa_filter', 10, 4 );
 function avoa_filter(){
$newClasses = ['menu__list-item']; 

return $newClasses;
 }


add_filter( 'nav_menu_item_id', 'filter_function_name_471', 10, 4 );
function filter_function_name_471( $menu_id, $item, $args, $depth ){
 return '';
}


add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){
 
 $atts ['class'] = 'menu__list-link';
 if($atts['aria-current'] === 'page'){
	 $atts ['class'] .= ' active';
 }
 return $atts;
}



//    Цепляемся к событию для выода виджетов
add_action('widgets_init', 'sensive_widgets_init');

// // Выводим виджеты
function sensive_widgets_init(){

        register_sidebar([
            'name'          => esc_html__('Блог сайдбар',''), 
            'id'            => "sidebar-blog",
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<h4 class="single-sidebar-widget__title">',
            'after_title'   => "</h4>\n",
            
        ]);
    }




  // Регистрируем новый тип записей Путешествия
  add_action('init', 'my_custom_init',0);
    function my_custom_init(){
	register_post_type('controls', array(
		'labels'             => array(
			'name'               => __('Строительный контроль'), // Основное название типа записи
			'singular_name'      => __('Строительный контроль'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Строительный контроль'),
			'add_new_item'       => __('Добавить новые Строительный контроль'),
			'edit_item'          => __('Редактировать Строительный контроль'),
			'new_item'           => __('Новые Строительный контроль'),
			'view_item'          => __('Посмотреть Строительный контроль'),
			'search_items'       => __('Найти Строительный контроль'),
			'not_found'          => __('Путешествий не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Контроль')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-admin-site-alt2',
		'hierarchical'       => false,
		'menu_position'      => null,
        'taxonomies'          => array( 'category' ),//Добавляем категории
		'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields')
	) );
    }


