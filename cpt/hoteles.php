<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 03/01/2017
 * Time: 1:20
 */
function create_hoteles_post_type() {
    register_post_type( 'hoteles',
        array(
            'labels' => array(
                'name' => 'Hoteles',
                'singular_name' => 'hotel',
                'add_new' => 'Agregar Nuevo',
                'add_new_item' => 'Agregar Nuevos Hoteles',
                'edit_item' => 'Edit Hoteles',
                'new_item' => 'Nuevo Hoteles',
                'view_item' => 'Ver Hotel',
                'search_items' => 'Buscar Hoteles',
                'not_found' =>  'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug'=>'hoteles','with_front'=>FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive'=>true,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','excerpt','post‐formats','author'),
            //'taxonomies'          => array( 'tipos_autos','embrague' ),

        )
    );
}
add_action( 'init', 'create_hoteles_post_type' );
/*register_taxonomy("tipos_autos", array("autos"), array(
    "hierarchical" => true,
    "label" => "Tipos Autos",
    "publicly_queryable"=>false,
    "singular_label" => "Tipo de Auto",
    "rewrite" => true,

));
register_taxonomy("embrague", array("autos"), array(
    "hierarchical" => true,
    "label" => "Tipos de Embrage ",
    "publicly_queryable"=>false,
    "singular_label" => "Tipo de Embrage",
    "rewrite" => true,

));*/
flush_rewrite_rules();