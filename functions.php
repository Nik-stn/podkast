<?php

define( 'PODKAST_THEME_ROOT', get_template_directory_uri() );
define( 'PODKAST_IMG_DIR', PODKAST_THEME_ROOT . '/images' );

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
add_theme_support( 'post-thumbnails' );

function theme_add_scripts() {
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/style/style.css');

	wp_enqueue_script( 'script-main', get_template_directory_uri() .'/script/script.js', array(), '1.0', true );
}

add_action( 'init', 'register_post_types' );


function register_post_types(){

	register_post_type( 'feedback', [
		'labels' => [
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзывы', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
			'new_item'           => 'Новый отзыв', // текст новой записи
			'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		],
		'public'                 => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-feedback',
		'supports'            => [ 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields',
	] );

}

function getFeedBack() {

	$args = array(
		'orderby'     => 'date',
		'order'       => 'ASC',
		'post_type'   => 'feedback',
	);

	return get_posts($args);
}
